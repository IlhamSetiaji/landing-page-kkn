<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;

class GaleriController extends Controller
{
    public function index()
    {
        $active = 'galeri';
        $galeri = Gallery::all();
        return view('galeri', compact('active', 'galeri'));
    }

    public function indexGaleri()
    {
        $galeri = Gallery::all();
        return view('admin.galeri.galeri', compact('galeri'));
    }

    public function storeGaleri()
    {
        $user = request()->user();
        if (!$user->hasRole('admin')) {
            return redirect()->back()->with('status', 'Anda bukan admin');
        }
        $validator = Validator::make(request()->all(), [
            'image' => 'required|max:10240|mimes:png,jpg,jpeg,svg,webp,heic',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $image = request()->file('image');
        // return $image;
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        // Image::make($gambar)->resize(500, 300)->save('images/wilayah/' . $name_gen);

        $image->move(public_path('uploads/potensi'), $name_gen);
        $last_img = 'uploads/potensi/' . $name_gen;
        Gallery::create([
            'image' => $last_img,
        ]);
        return redirect()->back()->with('status', 'Data berhasil ditambahkan');
    }

    public function updateGaleri($galeriID)
    {
        $user = request()->user();
        if (!$user->hasRole('admin')) {
            return redirect()->back()->with('status', 'Anda bukan admin');
        }
        $galeri = Gallery::find($galeriID);
        if (!$galeri) {
            return redirect()->back()->with('status', 'Data tidak ditemukan');
        }
        $validator = Validator::make(request()->all(), [
            'image' => 'nullable|max:10240|mimes:png,jpg,jpeg,svg,webp,heic',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            // return $image;
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            // Image::make($gambar)->resize(500, 300)->save('images/wilayah/' . $name_gen);

            $image->move(public_path('uploads/potensi'), $name_gen);
            $last_img = 'uploads/potensi/' . $name_gen;
            $galeri->update([
                'image' => $last_img,
            ]);
            return redirect()->back()->with('status', 'Data berhasil diupdate');
        }
        return redirect()->back()->with('status', 'Gambar harus ada');
    }

    public function deleteGaleri($galeriID)
    {
        $user = request()->user();
        if (!$user->hasRole('admin')) {
            return redirect()->back()->with('status', 'Anda bukan admin');
        }
        $galeri = Gallery::find($galeriID);
        if (!$galeri) {
            return redirect()->back()->with('status', 'Data tidak ditemukan');
        }
        $galeri->delete();
        return redirect()->back()->with('status', 'Data berhasil dihapus');
    }
}
