@extends('layout')


@section('content')




        <a href="{{route("movies_creer")}}">
            <button type="button" class="btn btn-rounded btn-primary btn-block">Créer un film</button>
        </a>
    <table class="table table-bordered mbn">
        <thead>
            <tr>
                <th>IMAGE</th>
                <th>TITRE</th>
                <th>SYNOPSIS</th>
                <th>VISIBLE</th>
                <th>ACTIONS</th>

             </tr>
        </thead>

        <tbody>
        @foreach($movies as $movie)

            <tr>
                <td><img style="width :50px; height: auto" src="{{ $movie->image }}" /></td>
                <td><a href="{{ route("movies_voir",["id" => $movie->id]) }}"> {{$movie->title}}</a> </td>
                <td>{!!str_limit(strip_tags( $movie->synopsis),$limit = 250, $end = '...')!!}</td>
                <td>@if($movie->visible == 0)

                        <a href="{{route('movies_visible', ["id" =>$movie->id])}}"><span class="glyphicon glyphicon-eye-open"></span></a>
                    @else
                        <a href="{{route('movies_visible', ["id" =>$movie->id])}}"><span class="glyphicon glyphicon-eye-close"></span></a>
                    @endif</td>



                <td>
                    <a href="{{route("movies_editer", ['id' => $movie->id])}}">edier</a></br>
                    <a href="{{route('movies_voir',["id" => $movie->id])}}">voir</a>
                    <a href= "{{route('movies_supprimer', ["id" => $movie->id])}}">supprimer</a>
                </td>

            </tr>



        @endforeach

        </tbody>
    </table>



@endsection
