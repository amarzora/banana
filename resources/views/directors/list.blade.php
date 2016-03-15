
@extends('layout')


@section('content')

    <table class="table table-bordered mbn">


        <thead>
        <tr>
            <th>IMAGE</th>
            <th>PRENOM</th>
            <th>NOM</th>
            <th>DATE DE NAISSANCE</th>
            <th>BIOGRAPHIE</th>
            <th>NOTE</th>
            <th>ACTIONS</th>
        </tr>
        </thead>

        <tbody>

    @foreach($directors as $director)

        <tr>
            <td><img style="width :50px; height: auto" src="{{$director->image}}"></td>
            <td>{{ $director->firstname }}</td>
            <td>{{ $director->lastname }}</td>
            <td>{{ $director->dob }}</td>
            <td>{!!str_limit(strip_tags( $director->biography),$limit = 150, $end = '...') !!}</td>
            <td>{{$director->note}}</td>
            <td>
                <a href="{{route("actors_editer", ['id' => $director->id])}}">edier</a></br>
                <a href="{{route('actors_voir',["id" => $director->id])}}">voir</a>
                <a href="{{route('actors_supprimer', ["id" => $director->id])}}">supprimer</a>
            </td>

        </tr>

    @endforeach
    </tbody>

@endsection
