<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{
    public function index()
    {
        $latest = Article::latest()->take(3)->get();
        $oldest = Article::oldest()->take(3)->get();
        // $random = Article::inRandomOrder()->take(3)->get();
        return view('artikel',compact('latest','oldest'));
    }

    public function indexArticle()
    {
        $user = request()->user();
        if(!$user->hasRole('admin'))
        {
            return redirect()->back()->with('status','Anda bukan admin');
        }
        $artikel = Article::latest()->get();
        return view('admin.artikel.artikel',compact('artikel'));
    }

    public function storeArticle()
    {
        $user = request()->user();
        if(!$user->hasRole('admin'))
        {
            return redirect()->back()->with('status','Anda bukan admin');
        }
        $validator = Validator::make(request()->all(),[
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'image' => 'required|max:10240|mimes:png,jpg,jpeg,svg,webp,heic',
        ]);
        if($validator->fails())
        {
            return redirect('admin/artikel')->withInput()->withErrors($validator);
        }
        $image = request()->file('image');
        // return $image;
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        // Image::make($gambar)->resize(500, 300)->save('images/wilayah/' . $name_gen);

        $image->move(public_path('uploads/artikel'), $name_gen);
        $last_img = 'uploads/artikel/' . $name_gen;
        Article::create([
            'title' => request('title'),
            'description' => request('description'),
            'date' => request('date'),
            'image' => $last_img,
        ]);
        return redirect('admin/artikel')->with('status','Artikel berhasil ditambahkan');
    }

    public function updateArticle($artikelID)
    {
        $user = request()->user();
        if(!$user->hasRole('admin'))
        {
            return redirect()->back()->with('status','Anda bukan admin');
        }
        $artikel = Article::find($artikelID);
        if(!$artikel)
        {
            return redirect()->back()->with('status','Data tidak ditemukan');
        }
        $validator = Validator::make(request()->all(),[
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'image' => 'nullable|max:10240|mimes:png,jpg,jpeg,svg,webp,heic',
        ]);
        if($validator->fails())
        {
            return redirect('admin/artikel')->withInput()->withErrors($validator);
        }
        if(request()->hasFile('image'))
        {
            $image = request()->file('image');
            // return $image;
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            // Image::make($gambar)->resize(500, 300)->save('images/wilayah/' . $name_gen);

            $image->move(public_path('uploads/artikel'), $name_gen);
            $last_img = 'uploads/artikel/' . $name_gen;
            Article::create([
                'title' => request('title'),
                'description' => request('description'),
                'date' => request('date'),
                'image' => $last_img,
            ]);
            return redirect()->back()->with('status','Data berhasil diupdate');
        }
        $artikel->update([
            'title' => request('title'),
            'description' => request('description'),
            'date' => request('date'),
        ]);
        return redirect()->back()->with('status','Data berhasil diupdate');
    }

    public function deleteArticle($artikelID)
    {
        $user = request()->user();
        if(!$user->hasRole('admin'))
        {
            return redirect()->back()->with('status','Anda bukan admin');
        }
        $artikel = Article::find($artikelID);
        if(!$artikel)
        {
            return redirect()->back()->with('status','Data tidak ditemukan');
        }
        $artikel->delete();
        return redirect()->back()->with('status','Data berhasil dihapus');
    }

    public function detailArtikel($artikelID)
    {
        $artikel = Article::find($artikelID);
        if(!$artikel)
        {
            return redirect()->back()->with('status','Data tidak ditemukan');
        }
        return view('artikel-detail',compact('artikel'));
    }

    public function showAllArtikel()
    {
        $artikel = Article::all();
        return view('all-artikel',compact('artikel'));
    }
}
