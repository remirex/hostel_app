<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Room;


class RoomsController extends Controller
{
    public function show($room_id)
    {
        $room = new Room();
        $data = [];
        $data['image'] = $room->getImg($room_id);
        $data['images'] = $room->getImages($room_id);
        return view('rooms.room', $data);
    }

    public function check(Request $request)
    {
        $dateFrom = $request->input('dateFrom');
        $dateTo = $request->input('dateTo');
        $name = $request->input('name');
        $email = $request->input('email');

        if($request->isMethod('post'))
        {
            $this->validate($request,[
                'dateFrom'=>'required',
                'dateTo'=>'required',
                'name'=>'required',
                'email'=>'email'
            ]);
        }

        $room = new Room();

        $data = [];
        $data['dateFrom'] = $dateFrom;
        $data['dateTo'] = $dateTo;
        $data['name'] = $name;
        $data['email'] = $email;
        $data['rooms'] = $room->getAvailablerooms($dateFrom, $dateTo);

        return view('rooms.check', $data);
    }
}
