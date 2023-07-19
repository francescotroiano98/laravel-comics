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

