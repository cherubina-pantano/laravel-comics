@extends('layouts.main')

@section('content')

    <main class="comic-detail"> 
        <section class="general-hero" style="background-image: url({{ $comic['image-hero'] }});">
            <div class="container">
                <img class="cover-comic" src="{{ $comic['image-cover']}}" alt="{{ $comic['title']}}">
            </div>
        </section>

        <section class="details-section mt-3 mb-3">
            <div class="container d-flex jc-sbetween">
                <div class="info-comic">
                    <h1> {{ $comic['title']}} </h1>
                        <div class="price d-flex jc-sbetween"> 
                            <span>
                                U.S. Price: $ {{ $comic['price']}}
                            </span> 
                            <span>
                                Avaible on 11/10
                                <span class="check-avaibility">
                                    Check Availability 
                                    <i class="fas fa-caret-down"></i>
                                </span>
                            </span>                             
                        </div>                 

                    <div class="text">{!! $comic['body'] !!} </div>
                </div>
                <div class="adv-comic">
                    <h4>Advertisement</h4>
                    <img src="{{ asset('images/adv.png') }}" alt="">
                </div>             
            </div>        
        </section>
        <section class="details-section-bottom mt-3">
            <div class="container d-flex">
                <div class="talent">
                    <h3> Talent</h3>
                    <h6>Art by: <span> Sandy Jarrell </span></h6>
                    <h6>Written by: <span> P.C. Morrisey</span></h6>

                </div>
                <div class="specs">
                    <h3> Specs</h3>
                    <h6>Series: <span clas="specs-title"> {{ $comic['title']}} </span></h6>
                    <h6>U.S. Price: <span> {{ $comic['price']}}</span></h6>
                    <h6>On Sale Date: <span> Nov 10 2020 </span></h6>

                </div>
            </div>
        </section>
    </main>

@endsection