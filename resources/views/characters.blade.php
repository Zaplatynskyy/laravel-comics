@extends('layouts.base')

@section('pageTitle')
    Laravel CD Characters
@endsection

@section('PageHeaderNav')
    <ul>
        <li><a href="/" class="header_link  selected">Characters</a></li>
        <li><a href="/comics" class="header_link">Comics</a></li>
        <li><a href="/" class="header_link">Movies</a></li>
        <li><a href="/" class="header_link">Tv</a></li>
        <li><a href="/" class="header_link">Games</a></li>
        <li><a href="/" class="header_link">Collectibles</a></li>
        <li><a href="/" class="header_link">Videos</a></li>
        <li><a href="/" class="header_link">Fans</a></li>
        <li><a href="/" class="header_link">News</a></li>
        <li><a href="/" class="header_link">Shop</a></li>
    </ul>
@endsection

@section('PageHero')
    <!-- sezione jumbotron -->
    <div id="jumbotron_characters" class="jumbotron">

    </div>
@endsection

@section('PageRow')

    <div class="row">
        {{-- @dump($comics) --}}

        @foreach ($characters as $character)
            <div class="box">
                <!-- img elemento box -->
                <img src="{{$character['thumb']}}" alt="{{$character['name']}}">
                <!-- titolo elemento box -->
                <div class="title_serie">{{$character['name']}}</div>
            </div>
        @endforeach
    </div>

@endsection