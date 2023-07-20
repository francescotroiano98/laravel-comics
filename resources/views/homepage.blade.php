@extends('layouts.app')

@section('title', 'Welcome')

@section('logo-content')
        <div class="w-25">
            
        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">
            
        </div>
@endsection

@section('nav-content')

            <nav class="w-75">
                <ul class="w-100 me-2 d-flex justify-content-between">
                    @foreach($links as $link)
                        <li>
                            
                            <a href="#">{{ $link['title'] }}</a>

                        </li>
                    @endforeach    
                </ul>

            </nav>
        
@endsection

@section('main-top')

    <div class="jumbotron-container">
        
    </div>

@endsection

@section('main-bottom')

<section class="container d-flex flex-wrap justify-content-between py-4">
    @foreach($serieslist as $singleserie)
        <div class="d-flex series-container">
        
            <div class="image-container">
                <img src="{{ $singleserie['thumb'] }}" alt="">
            </div>
            <div class="title-container">
                <p>{{ $singleserie['series'] }}</p>
            </div>
        
        
        </div>
    @endforeach
</section>
    

@endsection

@section('footer-top')

<section class="footer-top">
    <div class="container">

        <div class="left-nav-content">
            <nav>
                <ul>
                    @foreach($footerLink as $link)
                    <li>
                        <h2>{{ $link['name'] }}</h2>
                        <p class="d-flex flex-column">
                            @foreach($link['link'] as $item)
                                <a href="#">{{ $item }}</a>
                            @endforeach
                        </p>
                    </li>                           
                    @endforeach
                </ul>
            </nav>
        </div>

        <div class="right-content">
            <img src="{{ Vite::asset('resources/images/dc-logo-bg.png') }}" alt="">
        </div>

    </div>
</section>

@endsection

@section('footer-bottom')

            <section class="footer-bottom">
                    <section class="container">
                        <div>
                            <button class="btn ">SIGN-UP NOW!</button>
                        </div>
                        <div>
                            <div>
                                <h3>FOLLOW US</h3>
                            </div>
                            <nav>
                                <ul>
                                    <li>

                                    </li>
                                    
                                </ul>
                            </nav>
                        </div>
                    </section>    
            </section>
@endsection