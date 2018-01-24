@extends('layouts.app')

@section('content')

    <header class="bg-light negative">

        <div class="container">

            <div class="baner_front">
                <h1>the Hostel Regie &amp; Friends</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nobis.!</p>
                <p>Why the Hostel Regie &amp; Friends?</p>
                <p><a href="#" class="button">Learn more &raquo;</a></p>
            </div>

        </div>

    </header>


    <section id="rooms" class="text-center">
        <div class="container">

            <div id="r_header">
                <h2>Our great Rooms</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, esse, fugit, autem, ratione quam doloremque impedit sunt unde repellat ipsum architecto quod itaque ab omnis laudantium modi fugiat accusamus? Explicabo, tempore, est, rerum recusandae at architecto quas cum officiis quaerat accusamus laudantium totam ratione ducimus assumenda omnis laboriosam consectetur velit unde tempora necessitatibus aut harum enim quibusdam sequi dignissimos vitae vero distinctio ipsum minus neque! Mollitia, quae, quod, nam dolorem sequi iste nobis optio ipsam iusto soluta accusantium corporis tenetur et necessitatibus odit officia consequatur accusamus culpa minima nisi atque quibusdam delectus veritatis aliquam tempore sunt quidem maxime quas officiis.</p>
            </div>

            <div class="row">
                @foreach($rooms as $room)

                    <div class="col-sm-4">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('images')}}/{{$room->front}}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">{{$room->name}}</h4>
                                <p class="card-text">{{$room->description}}</p>
                                <h6>from {{$room->price}} &euro; per night</h6>
                                <a href="{{route('show_room',['room_id'=>$room->id])}}" class="button">VIEW MORE</a>
                            </div>
                        </div>
                    </div>

                        @endforeach
                <!--
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images/gina-manzeck-97522.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="book.html" class="button">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images/nastuh-abootalebi-284877.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="button">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images/nastuh-abootalebi-284882.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="button">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                -->
            </div>
        </div>
    </section><!-- /.rooms -->

    @endsection