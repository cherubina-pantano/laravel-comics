@extends('layouts.main')

@section('content')

    <main class="wrap-home mb-2"> 
        <section class="general-hero">
            <div class="container">
                <img class="cover-home"src="{{ asset('images/cover-home.jpg')}}" alt="">
            </div>
        </section>

        <section class="comics-section mt-3 mb-1">
            <div class="container">
                <ul class="comics-list no-list-style">
                    @foreach ( $comics as $comic)
                        <li>
                            <a href="{{ route('comic-detail', $comic['id']) }}">
                                <img src="{{ $comic['image'] }}" alt="{{ $comic['title'] }}">
                                <h3> {{ $comic['title'] }} </h3>
                            </a>
                        </li>
                    @endforeach
                </ul>                
            </div>
            <div class="btn-container">
                <button> <a href="#">LOAD MORE</a> </button>        
            </div>
        </section>

        <section class="dc-banner">
            <div class="container">
                <ul class="d-flex jc-sbetween no-list-style">
                    <li>
                        <div class="dc-features d-flex">
                            <img src="{{ asset('images/digital-comics.png')}}" alt="">
                            <a href="#">                            
                                Digital Comics
                            </a>
                        </div>                        
                    </li>
                    <li>
                        <div class="dc-features d-flex">
                            <img src="{{ asset('images/merchandise.png')}}" alt="">                             
                            <a href="#">
                                 DC Merchandise                            
                            </a>
                        </div>                        
                    </li>
                    <li>
                        <div class="dc-features d-flex">
                            <img src="{{ asset('images/subscriptions.png')}}" alt="">                             
                            <a href="#">
                                Subscription                            
                            </a>
                        </div>                        
                    </li>
                    <li>
                        <div class="dc-features d-flex">
                            <img src="{{ asset('images/shop-locator.png')}}" alt="">                              
                             <a href="#">
                                 Comic Shop Locator                             
                            </a>
                        </div> 
                    </li>
                    <li>
                        <div class="dc-features d-flex">
                            <img src="{{ asset('images/power-visa.svg')}}" alt="">                              
                            <a href="#">                            
                                DC Power Visa                            
                            </a>
                        </div>                         
                    </li>
                </ul>
            </div>
        </section>
    </main>

@endsection