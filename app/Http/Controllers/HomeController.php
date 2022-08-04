<?php

namespace App\Http\Controllers;

use App\Models\HomeFeature;
use App\Models\HomeHero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $hero = HomeHero::latest()->first();
        $feature = HomeFeature::latest()->first();
        return view('index',compact('hero','feature'));
    }

    public function indexHero()
    {
        $user = request()->user();
        if(!$user->hasRole('admin'))
        {
            return redirect()->back()->with('status','Anda bukan admin');
        }
        $heros = HomeHero::all();
        return view('admin.home.home-hero',compact('heros'));
    }

    public function storeHero()
    {
        $user = request()->user();
        if(!$user->hasRole('admin'))
        {
            return redirect()->back()->with('status','Anda bukan admin');
        }
        $validator = Validator::make(request()->all(),[
            'krajan' => 'required|numeric|min:0',
            'rekesan' => 'required|numeric|min:0',
            'igir' => 'required|numeric|min:0',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        HomeHero::create([
            'krajan' => request('krajan'),
            'rekesan' => request('rekesan'),
            'igir' => request('igir'),
        ]);
        return redirect()->back()->with('status','Data home hero berhasil ditambahkan');
    }

    public function updateHero($heroID)
    {
        $user = request()->user();
        if(!$user->hasRole('admin'))
        {
            return redirect()->back()->with('status','Anda bukan admin');
        }
        $validator = Validator::make(request()->all(),[
            'krajan' => 'required|numeric|min:0',
            'rekesan' => 'required|numeric|min:0',
            'igir' => 'required|numeric|min:0',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $hero = HomeHero::find($heroID);
        if(!$hero)
        {
            return redirect()->back()->with('status','Data home hero tidak ditemukan');
        }
        $hero->update([
            'krajan' => request('krajan'),
            'rekesan' => request('rekesan'),
            'igir' => request('igir'),
        ]);
        return redirect()->back()->with('status','Data berhasil diupdate');
    }

    public function deleteHero($heroID)
    {
        $user = request()->user();
        if(!$user->hasRole('admin'))
        {
            return redirect()->back()->with('status','Anda bukan admin');
        }
        $hero = HomeHero::find($heroID);
        if(!$hero)
        {
            return redirect()->back()->with('status','Data home hero tidak ditemukan');
        }
        $hero->delete();
        return redirect()->back()->with('status','Data berhasil dihapus');
    }

    public function indexFeature()
    {
        $features = HomeFeature::all();
        return view('admin.home.home-feature',compact('features'));
    }

    public function updateFeature($featureID)
    {
        $user = request()->user();
        if(!$user->hasRole('admin'))
        {
            return redirect()->back()->with('status','Anda bukan admin');
        }
        $feature = HomeFeature::find($featureID);
        if(!$feature)
        {
            return redirect()->back()->with('status','Data tidak ditemukan');
        }
        $feature->update([
            'jiwa' => request('jiwa'),
            'luas' => request('luas'),
            'pos' => request('pos'),
        ]);
        return redirect()->back()->with('status','Data berhasil diupdate');
    }
}
