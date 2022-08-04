<?php

namespace App\Http\Controllers;

use App\Models\HomeHero;
use Illuminate\Http\Request;
use App\Models\ProfileContent;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index()
    {
        $hero = HomeHero::latest()->first();
        $content = ProfileContent::latest()->first();
        return view('profil',compact('content','hero'));
    }

    public function indexContent()
    {
        $user = request()->user();
        if(!$user->hasRole('admin'))
        {
            return redirect()->back()->with('status','Anda bukan admin');
        }
        $contents = ProfileContent::all();
        return view('admin.profil.profil-content',compact('contents'));
    }

    public function updateContent($contentID)
    {
        $user = request()->user();
        if(!$user->hasRole('admin'))
        {
            return redirect()->back()->with('status','Anda bukan admin');
        }
        $content = ProfileContent::find($contentID);
        if(!$content)
        {
            return redirect()->back()->with('status','Data tidak ditemukan');
        }
        $validator = Validator::make(request()->all(),[
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'nullable|max:10240|mimes:png,jpg,jpeg,svg,webp,heic',
            'video' => 'required|url',
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

            $image->move(public_path('uploads/profile'), $name_gen);
            $last_img = 'uploads/profile/' . $name_gen;
            $content->update([
                'title' => request('title'),
                'desc' => request('desc'),
                'video' => request('video'),
                'image' => $last_img,
            ]);
            return redirect()->back()->with('status','Data berhasil diupdate');
        }
        $content->update([
            'title' => request('title'),
            'desc' => request('desc'),
            'video' => request('video'),
        ]);
        return redirect()->back()->with('status','Data berhasil diupdate');
    }
}
