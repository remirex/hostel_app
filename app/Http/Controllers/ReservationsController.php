<?php

namespace App\Http\Controllers;

use App\Mail\sendBookEmail;
use App\Reservation;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Mail;

class ReservationsController extends Controller
{
    public function bookRoom($room_id, $date_in, $date_out, $name, $email, Mailer $mailer)
    {
        $reservation = new Reservation();
        $room_instance = new Room();

        $room = $room_instance->find($room_id);
        $reservation->date_in = $date_in;
        $reservation->date_out = $date_out;
        $reservation->name = $name;
        $reservation->email = $email;


        $reservation->room()->associate($room);

        if($room_instance->isRoomBooked($room_id, $date_in, $date_out))
        {
            return view('error.error');
        }

        //$reservation->save();

        if($reservation->save())
        {
            $mailer
                ->to($email)
                ->send(new sendBookEmail($name,$email,$date_in,$date_out,$room_id));
        }

        return view('confirmation.thankyou');
    }
}
