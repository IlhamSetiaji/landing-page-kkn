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
        $active = 'kontak';
        return view('kontak',compact('active'));
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

    public function indexContact()
    {
        $messages = Message::where('status','NOT YET')->get();
        return view('admin.contact.contact',compact('messages'));
    }

    public function sendReply($messageID)
    {
        $user = request()->user();
        if(!$user->hasRole('admin'))
        {
            return redirect()->back()->with('status','Anda bukan admin');
        }
        $message = Message::find($messageID);
        if(!$message)
        {
            return redirect()->back()->with('status','Data tidak ditemukan');
        }
        $validator=Validator::make(request()->all(),[
            'message' => 'required|string',
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        Mail::to($message->email)->send(new SendMessage($message->email, request('message')));
        Mail::to($user->email)->send(new SendMessage($user->email, 'Tanggapan anda ke pengguna '.$message->name.' berhasil dikirim'));
        $message->update([
            'status' => 'DONE',
        ]);
        return redirect()->back()->with('status','Tanggapan berhasil dikirim');
    }
}
