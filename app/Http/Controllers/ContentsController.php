<?php

namespace App\Http\Controllers;

use App\Mail\MyMail;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;


class ContentsController extends Controller
{
    public function home()
    {
        $rooms = Room::all();
        return view('contents/home', compact('rooms'));
    }

    public function about()
    {
        return view('contents/about');
    }

    public function contact()
    {
        return view('contents/contact');
    }

    public function gallery()
    {
        return view('contents/gallery');
    }

    public function sendMail(Request $request, Mailer $mailer)
    {
        $email = $request->input('email');
        $message = $request->input('message');
        $name = $request->input('name');

        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);

        $mailer
            ->to($email)
            ->send(new MyMail($message, $name));

        return back();
    }
}
