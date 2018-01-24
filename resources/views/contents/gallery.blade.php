@extends('layouts.app')

@section('content')

    <section id="gallery">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="gallery">
                        <a href="{{asset('images/ada-ciganlija-beograd.jpg')}}" data-lightbox="gallery">
                            <img src="{{asset('images/ada-ciganlija-beograd.jpg')}}" data-lightbox="gallery">
                        </a>
                        <a href="{{asset('images/St.SavaCathedral_Belgrade_Serbia.jpg')}}" data-lightbox="gallery">
                            <img src="{{asset('images/St.SavaCathedral_Belgrade_Serbia.jpg')}}" data-lightbox="gallery">
                        </a>
                        <a href="{{asset('images/image_14.jpg')}}" data-lightbox="gallery">
                            <img src="{{asset('images/image_14.jpg')}}" data-lightbox="gallery">
                        </a>
                        <a href="{{asset('images/Belgrade-sky-above-marina.jpg')}}" data-lightbox="gallery">
                            <img src="{{asset('images/Belgrade-sky-above-marina.jpg')}}" data-lightbox="gallery">
                        </a>
                        <a href="{{asset('images/Belgrade_Waterfront_rendering.jpg')}}" data-lightbox="gallery">
                            <img src="{{asset('images/Belgrade_Waterfront_rendering.jpg')}}" data-lightbox="gallery">
                        </a>
                        <a href="{{asset('images/jade-masri-323340.jpg')}}" data-lightbox="gallery">
                            <img src="{{asset('images/jade-masri-323340.jpg')}}" data-lightbox="gallery">
                        </a>
                        <a href="{{asset('images/Most-na-Adi.jpg')}}" data-lightbox="gallery">
                            <img src="{{asset('images/Most-na-Adi.jpg')}}" data-lightbox="gallery">
                        </a>
                        <a href="{{asset('images/1.jpg')}}" data-lightbox="gallery">
                            <img src="{{asset('images/1.jpg')}}" data-lightbox="gallery">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.gallery -->

    @endsection