<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Message;
use App\Mail\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak');
    }

    public function sendMessage()
    {
        $users = User::all();
        // return $users;
        $validator = Validator::make(request()->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        Message::create([
            'name' => request('name'),
            'email' => request('email'),
            'subject' => request('subject'),
            'message' => request('message'),
            'datetime' => Carbon::now(),
        ]);
        Mail::to(request()->email)->send(new SendMessage(request()->email, 'Pesan anda berhasil terkirim'));
        foreach($users as $u)
        {
            Mail::to($u->email)->send(new SendMessage($u->email, 'Ada pesan baru dari '.request('name').'. Silahkan cek di website Desa Darungan'));
        }
        return redirect()->back();
    }
}
