@extends('layouts.base')

@section('pageTitle')
    Laravel CD Comics
@endsection

@section('pageContent')

    <!-- sezione jumbotron -->
    <div id="jumbotron">

    </div>

    <!-- sezione corpo main della pagina -->
    <div id="main_content">
        <div class="container">
            <!-- bottone fissato in alto a sinistra 'current series' -->
            <button class="btn current">Current Series</button>

            <div class="row">
                {{-- @dump($comics) --}}

                @foreach ($comics as $comic)
                    <div class="box">
                        <!-- img elemento box -->
                        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                        <!-- titolo elemento box -->
                        <div class="title_serie">{{$comic['series']}}</div>
                    </div>
                @endforeach
            </div>

            <!-- bottone fissato in basso 'load more' -->
            <button class="btn load">Load More</button>
        </div>
    </div>

@endsection