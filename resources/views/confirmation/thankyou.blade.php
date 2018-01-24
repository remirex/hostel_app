@extends('layouts.app')

@section('content')

    <div class="container thank-you-section text-center">

        <h1>Thank you for <br> Your Booking</h1>

        <p>A confirmation email was sent</p>

        <a href="{{route('home')}}" class="button">Home page</a>

    </div>

    @endsection