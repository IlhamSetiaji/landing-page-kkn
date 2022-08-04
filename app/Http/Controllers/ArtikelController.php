<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('artikel');
    }

    public function indexArticle()
    {
        return view('admin.index');
    }

    public function storeArticle()
    {
        $validator = Validator::make(request()->all(),[
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'image' => 'required|max:10240|mimes:png,jpg,jpeg,svg,webp,heic',
        ]);
        if($validator)
        {
            return redirect('admin')->withInput()->withErrors($validator);
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
        return redirect('admin')->with('status','Artikel berhasil ditambahkan');
    }
}
