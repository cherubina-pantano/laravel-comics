@extends('layouts.main')

@section('content')

    <main class="wrap-home"> 
        <section class="general-hero">
            <div class="container">
                <img src="{{ asset('images/cover-home.jpg')}}" alt="">
            </div>
        </section>

        <section class="comics-section mt-3 mb-3">
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
        
        </section>
    </main>

@endsection