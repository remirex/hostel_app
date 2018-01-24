@extends('layouts.app')

@section('content')

    <div class="container">
        <h4>Booking</h4>
        <form action="#" method="post">
            {{csrf_field()}}
            <div class="form-row">
               <div class="form-group col-sm-5">
                   <label for="from">FROM</label>
                   <div class="input-group date">
                       <input type="text" id="from" name="dateFrom" value="{{ $dateFrom }}" class="form-control datepicker">
                       <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                   </div>
                   <small class="error">{{$errors->first('dateFrom')}}</small>
               </div>
                <div class="form-group col-sm-5">
                    <label for="to">TO</label>
                    <div class="input-group date">
                        <input type="text" id="to" name="dateTo" value="{{ $dateTo }}" class="form-control datepicker">
                        <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                    </div>
                </div>
                <div class="form-group col-sm-5">
                    <label for="name">NAME</label>
                    <input type="text" id="name" name="name" value="{{$name}}" class="form-control">
                    <small class="error">{{$errors->first('name')}}</small>
                </div>
                <div class="form-group col-sm-5">
                    <label for="email">EMAIL</label>
                    <input type="text" id="email" name="email" value="{{$email}}" class="form-control">
                    <small class="error">{{$errors->first('email')}}</small>
                </div>
                <div class="form-group col-sm-2">
                    <label for="action">ACTION</label>
                    <div class="input-group date">
                        <button type="submit" id="action" class=" btn btn-dark" style="cursor: pointer;width: 100%"><i class="fa fa-search" aria-hidden="true"></i> &nbsp;<b>search</b></button>
                    </div>
                </div>
            </div>
        </form>

        <table class="table" style="margin: 20px 0 20px 0">
            <thead class="thead-dark">
            <tr>
                <th>Room</th>
                <th>Availability</th>
                <th>Price(per night)</th>
                <th class="text-right">Action</th>
            </tr>
            </thead>

            <tbody>
            @unless(empty($dateFrom) or empty($dateTo) or empty($name) or empty($email))

                @if(count($rooms) > 0)
                    @foreach($rooms as $room)
                        <tr>
                            <td><img src="{{asset('images')}}/{{$room->front}}" height="100" width="150"> &nbsp;{{$room->name}}</td>
                            <td class="alert alert-success" role="alert">Available</td>
                            <td>{{$room->price}} &euro;</td>
                            <td class="text-right">
                                <a href="{{route('book_room',[
                                'room_id'=>$room->id,
                                'date_in'=>$dateFrom,
                                'date_out'=>$dateTo,
                                'name'=>$name,
                                'email'=>$email
                                ])}}" class="button">BOOK ROOM</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <div class="alert alert-danger" role="alert">
                        There are currently no rooms available for this date
                    </div>
                    @endif

                @endunless
            </tbody>
        </table>
    </div>

    @endsection