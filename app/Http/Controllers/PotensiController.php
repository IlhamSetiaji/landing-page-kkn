<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PotensiContent;
use Illuminate\Support\Facades\Validator;

class PotensiController extends Controller
{
    public function index()
    {
        $contents = PotensiContent::latest()->take(9)->get();
        return view('potensi',compact('contents'));
    }

    public function indexContent()
    {
        $user = request()->user();
        if(!$user->hasRole('admin'))
        {
            return redirect()->back()->with('status','Anda bukan admin');
        }
        $contents = PotensiContent::all();
        return view('admin.potensi.potensi-content',compact('contents'));
    }

    public function storeContent()
    {
        $user = request()->user();
        if(!$user->hasRole('admin'))
        {
            return redirect()->back()->with('status','Anda bukan admin');
        }
        $validator = Validator::make(request()->all(),[
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'required|max:10240|mimes:png,jpg,jpeg,svg,webp,heic',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $image = request()->file('image');
        // return $image;
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        // Image::make($gambar)->resize(500, 300)->save('images/wilayah/' . $name_gen);

        $image->move(public_path('uploads/potensi'), $name_gen);
        $last_img = 'uploads/potensi/' . $name_gen;
        PotensiContent::create([
            'title' => request('title'),
            'desc' => request('desc'),
            'image' => $last_img,
        ]);
        return redirect()->back()->with('status','Data berhasil ditambahkan');
    }

    public function updateContent($contentID)
    {
        $user = request()->user();
        if(!$user->hasRole('admin'))
        {
            return redirect()->back()->with('status','Anda bukan admin');
        }
        $content = PotensiContent::find($contentID);
        if(!$content)
        {
            return redirect()->back()->with('status','Data tidak ditemukan');
        }
        $validator = Validator::make(request()->all(),[
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'nullable|max:10240|mimes:png,jpg,jpeg,svg,webp,heic',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        if(request()->hasFile('image'))
        {
            $image = request()->file('image');
            // return $image;
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            // Image::make($gambar)->resize(500, 300)->save('images/wilayah/' . $name_gen);

            $image->move(public_path('uploads/potensi'), $name_gen);
            $last_img = 'uploads/potensi/' . $name_gen;
            $content->update([
                'title' => request('title'),
                'desc' => request('desc'),
                'image' => $last_img,
            ]);
            return redirect()->back()->with('status','Data berhasil diupdate');
        }
        $content->update([
            'title' => request('title'),
            'desc' => request('desc'),
        ]);
        return redirect()->back()->with('status','Data berhasil diupdate');
    }

    public function deleteContent($contentID)
    {
        $user = request()->user();
        if(!$user->hasRole('admin'))
        {
            return redirect()->back()->with('status','Anda bukan admin');
        }
        $content = PotensiContent::find($contentID);
        if(!$content)
        {
            return redirect()->back()->with('status','Data tidak ditemukan');
        }
        $content->delete();
        return redirect()->back()->with('status','Data berhasil dihapus');
    }
}
