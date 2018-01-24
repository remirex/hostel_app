<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Room extends Model
{
    public function getImg($room_id)
    {
        $image = DB::table('galleries')
            ->select('images')
            ->where('room_id', '=', $room_id)
            ->limit(1)
            ->get();
        return $image;
    }

    public function getImages($room_id)
    {
        $images = DB::table('galleries')
            ->select('images')
            ->where('room_id', '=', $room_id)
            ->get();
        return $images;
    }

    public function getAvailablerooms($start_date, $end_date)
    {
        $available_rooms = DB::table('rooms as r')
            ->select('r.id','r.name','r.front','r.price')
            ->whereRaw("
                r.id NOT IN(
                SELECT b.room_id FROM reservations as b
                WHERE NOT(
                    b.date_out < '{$start_date}' OR
                    b.date_in > '{$end_date}'
                    )
                )
            ")
            ->orderBy('r.id')
            ->get();
        return $available_rooms;
    }

    public function isRoomBooked($room_id, $start_date, $end_date)
    {
        $available_rooms = DB::table('reservations')
            ->whereRaw("
                NOT(
                    date_out < '{$start_date}' OR
                    date_in > '{$end_date}'
                )
            ")
            ->where('room_id', $room_id)
            ->count()
        ;
        return $available_rooms;
    }

    public function getRoomName($room_id)
    {
        $room_name = DB::table('rooms')
            ->select('name')
            ->where('id', '=', $room_id)
            ->get();
        return $room_name;
    }
}
