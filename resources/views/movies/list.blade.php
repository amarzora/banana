@extends('layout')


@section('content')


    <div class = "container">
        <div class = "content">

    <h3>Listes de nos films</h3>


    @foreach($movies as $movie)
        <h3>
            <a href="{{ route("movies_voir",["id" => $movie->id]) }}"> {{$movie->title}}</a>
        </h3>
        <p>
            <a href="{{route("movies_editer", ['id' => $movie->id])}}"></a>
    </p>
        <img style="width :50px; height: auto" src="{{ $movie->image }}" />
        <p>{!! $movie->synopsis !!}}</p>


        <a href= "{{route('movies_supprimer', ["id" => $movie->id])}}">supprimer</a>
        @if($movie->visible == 0)
            <a href="{{route('movies_visible', ["id" =>$movie->id])}}">Rendre visible</a>
        @else
            <a href="{{route('movies_visible', ["id" =>$movie->id])}}">Rendre invisible</a>
        @endif

        <a href="">voir couverture
        </a>

    @endforeach
        </div>

    </div>

