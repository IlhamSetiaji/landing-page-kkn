<?php

namespace App\Http\Controllers;

use App\Models\FirstLineTeam;
use App\Models\HomeHero;
use App\Models\LeaderTeam;
use Illuminate\Http\Request;
use App\Models\ProfileContent;
use App\Models\ProfileTeam;
use App\Models\ProfileTesti;
use App\Models\SecondLineTeam;
use App\Models\ThirdLineTeam;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index()
    {
        $hero = HomeHero::latest()->first();
        $content = ProfileContent::latest()->first();
        // $teams = ProfileTeam::latest()->take(3)->get();
        $testi = ProfileTesti::latest()->take(5)->get();
        $leader = LeaderTeam::all();
        $first = FirstLineTeam::all();
        $second = SecondLineTeam::all();
        $third = ThirdLineTeam::all();
        $active = 'profil';
        return view('profil', compact('content', 'hero', 'testi', 'active', 'leader', 'first', 'second', 'third'));
    }

    public function indexContent()
    {
        $user = request()->user();
        if (!$user->hasRole('admin')) {
            return redirect()->back()->with('status', 'Anda bukan admin');
        }
        $contents = ProfileContent::all();
        return view('admin.profil.profil-content', compact('contents'));
    }

    public function updateContent($contentID)
    {
        $user = request()->user();
        if (!$user->hasRole('admin')) {
            return redirect()->back()->with('status', 'Anda bukan admin');
        }
        $content = ProfileContent::find($contentID);
        if (!$content) {
            return redirect()->back()->with('status', 'Data tidak ditemukan');
        }
        $validator = Validator::make(request()->all(), [
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'nullable|max:10240|mimes:png,jpg,jpeg,svg,webp,heic',
            'video' => 'required|url',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        if (request()->hasFile('image')) {
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
            return redirect()->back()->with('status', 'Data berhasil diupdate');
        }
        $content->update([
            'title' => request('title'),
            'desc' => request('desc'),
            'video' => request('video'),
        ]);
        return redirect()->back()->with('status', 'Data berhasil diupdate');
    }

    public function indexTeam()
    {
        $user = request()->user();
        if (!$user->hasRole('admin')) {
            return redirect()->back()->with('status', 'Anda bukan admin');
        }
        $teams = ProfileTeam::all();
        return view('admin.profil.profil-team', compact('teams'));
    }

    public function updateTeam($teamID)
    {
        $user = request()->user();
        if (!$user->hasRole('admin')) {
            return redirect()->back()->with('status', 'Anda bukan admin');
        }
        $team = ProfileTeam::find($teamID);
        if (!$team) {
            return redirect()->back()->with('status', 'Data tidak ditemukan');
        }
        $validator = Validator::make(request()->all(), [
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'nullable|max:10240|mimes:png,jpg,jpeg,svg,webp,heic',
            'twitter' => 'required|url',
            'facebook' => 'required|url',
            'instagram' => 'required|url',
            'linkedin' => 'required|url',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            // return $image;
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            // Image::make($gambar)->resize(500, 300)->save('images/wilayah/' . $name_gen);

            $image->move(public_path('uploads/profile'), $name_gen);
            $last_img = 'uploads/profile/' . $name_gen;
            $team->update([
                'name' => request('name'),
                'job' => request('job'),
                'desc' => request('desc'),
                'twitter' => request('twitter'),
                'facebook' => request('facebook'),
                'instagram' => request('instagram'),
                'linkedin' => request('linkedin'),
                'image' => $last_img,
            ]);
            return redirect()->back()->with('status', 'Data berhasil diupdate');
        }
        $team->update([
            'name' => request('name'),
            'job' => request('job'),
            'desc' => request('desc'),
            'twitter' => request('twitter'),
            'facebook' => request('facebook'),
            'instagram' => request('instagram'),
            'linkedin' => request('linkedin'),
        ]);
        return redirect()->back()->with('status', 'Data berhasil diupdate');
    }

    public function indexTesti()
    {
        $testi = ProfileTesti::all();
        return view('admin.profil.profil-testi', compact('testi'));
    }

    public function updateTesti($testiID)
    {
        $user = request()->user();
        if (!$user->hasRole('admin')) {
            return redirect()->back()->with('status', 'Anda bukan admin');
        }
        $testi = ProfileTesti::find($testiID);
        if (!$testi) {
            return redirect()->back()->with('status', 'Data tidak ditemukan');
        }
        $validator = Validator::make(request()->all(), [
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'desc' => 'required|string',
            'star' => 'required|numeric|min:1|max:5',
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

            $image->move(public_path('uploads/profile'), $name_gen);
            $last_img = 'uploads/profile/' . $name_gen;
            $testi->update([
                'name' => request('name'),
                'job' => request('job'),
                'desc' => request('desc'),
                'star' => request('star'),
                'image' => $last_img,
            ]);
            return redirect()->back()->with('status', 'Data berhasil diupdate');
        }
        $testi->update([
            'name' => request('name'),
            'job' => request('job'),
            'desc' => request('desc'),
            'star' => request('star'),
        ]);
        return redirect()->back()->with('status', 'Data berhasil diupdate');
    }

    public function leaderTeam()
    {
        $leader = LeaderTeam::all();
        return view('admin.profil.leader-team', compact('leader'));
    }

    public function updateLeaderTeam($leaderID)
    {
        $user = request()->user();
        if (!$user->hasRole('admin')) {
            return redirect()->back()->with('status', 'Anda bukan admin');
        }
        $team = LeaderTeam::find($leaderID);
        if (!$team) {
            return redirect()->back()->with('status', 'Data tidak ditemukan');
        }
        $validator = Validator::make(request()->all(), [
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'desc' => 'required|string',
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

            $image->move(public_path('uploads/profile'), $name_gen);
            $last_img = 'uploads/profile/' . $name_gen;
            $team->update([
                'name' => request('name'),
                'job' => request('job'),
                'desc' => request('desc'),
                'image' => $last_img,
            ]);
            return redirect()->back()->with('status', 'Data berhasil diupdate');
        }
        $team->update([
            'name' => request('name'),
            'job' => request('job'),
            'desc' => request('desc'),
        ]);
        return redirect()->back()->with('status', 'Data berhasil diupdate');
    }

    public function firstTeam()
    {
        $first = FirstLineTeam::all();
        return view('admin.profil.first-team', compact('first'));
    }

    public function updateFirstTeam($leaderID)
    {
        $user = request()->user();
        if (!$user->hasRole('admin')) {
            return redirect()->back()->with('status', 'Anda bukan admin');
        }
        $team = FirstLineTeam::find($leaderID);
        if (!$team) {
            return redirect()->back()->with('status', 'Data tidak ditemukan');
        }
        $validator = Validator::make(request()->all(), [
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'desc' => 'required|string',
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

            $image->move(public_path('uploads/profile'), $name_gen);
            $last_img = 'uploads/profile/' . $name_gen;
            $team->update([
                'name' => request('name'),
                'job' => request('job'),
                'desc' => request('desc'),
                'image' => $last_img,
            ]);
            return redirect()->back()->with('status', 'Data berhasil diupdate');
        }
        $team->update([
            'name' => request('name'),
            'job' => request('job'),
            'desc' => request('desc'),
        ]);
        return redirect()->back()->with('status', 'Data berhasil diupdate');
    }

    public function secondTeam()
    {
        $second = SecondLineTeam::all();
        return view('admin.profil.second-team', compact('second'));
    }

    public function updateSecondTeam($leaderID)
    {
        $user = request()->user();
        if (!$user->hasRole('admin')) {
            return redirect()->back()->with('status', 'Anda bukan admin');
        }
        $team = SecondLineTeam::find($leaderID);
        if (!$team) {
            return redirect()->back()->with('status', 'Data tidak ditemukan');
        }
        $validator = Validator::make(request()->all(), [
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'desc' => 'required|string',
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

            $image->move(public_path('uploads/profile'), $name_gen);
            $last_img = 'uploads/profile/' . $name_gen;
            $team->update([
                'name' => request('name'),
                'job' => request('job'),
                'desc' => request('desc'),
                'image' => $last_img,
            ]);
            return redirect()->back()->with('status', 'Data berhasil diupdate');
        }
        $team->update([
            'name' => request('name'),
            'job' => request('job'),
            'desc' => request('desc'),
        ]);
        return redirect()->back()->with('status', 'Data berhasil diupdate');
    }

    public function thirdTeam()
    {
        $third = ThirdLineTeam::all();
        return view('admin.profil.third-team', compact('third'));
    }

    public function updateThirdTeam($leaderID)
    {
        $user = request()->user();
        if (!$user->hasRole('admin')) {
            return redirect()->back()->with('status', 'Anda bukan admin');
        }
        $team = ThirdLineTeam::find($leaderID);
        if (!$team) {
            return redirect()->back()->with('status', 'Data tidak ditemukan');
        }
        $validator = Validator::make(request()->all(), [
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'desc' => 'required|string',
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

            $image->move(public_path('uploads/profile'), $name_gen);
            $last_img = 'uploads/profile/' . $name_gen;
            $team->update([
                'name' => request('name'),
                'job' => request('job'),
                'desc' => request('desc'),
                'image' => $last_img,
            ]);
            return redirect()->back()->with('status', 'Data berhasil diupdate');
        }
        $team->update([
            'name' => request('name'),
            'job' => request('job'),
            'desc' => request('desc'),
        ]);
        return redirect()->back()->with('status', 'Data berhasil diupdate');
    }
}
