@extends('layout')


@section('content')


    <table class="table table-bordered mbn">
        <thead>
         <tr>
             <th>Favoris</th>
            <th>IMAGE</th>
            <th>PRENOM</th>
            <th>NOM</th>
             <th>DATE DE NAISSANCE</th>
            <th>VILLE</th>
             <th>NATIONALITE</th>
            <th>BIOGRAPHIE</th>
             <th>ACTIONS</th>


         </tr>
        </thead>

        <tbody>


    @foreach($actors as $actor)
        <tr>
            <td><a href="{{ route("actors_favoris",['id' => $actor ]) }}">
                    @if(!array_key_exists($actor->id,session('id_actors',[])))
                       <i class = 'fa fa-heart'></i>
                    @else
                            <i class = 'fa fa-heart-o'></i>
                    @endif
                    </a>
                </td>
            <td><img style="width :50px; height: auto" src="{{$actor->image}}"></td>
            <td>{{ $actor->firstname }}</td>
            <td>{{ $actor->lastname }}</td>
            <td>{{ $actor->dob }}</td>
            <td>{{ $actor->nationality }}</td>
            <td>{{$actor->city}}</td>
            <td>{!!str_limit(strip_tags( $actor->biography),$limit = 150, $end = '...') !!}</td>
            <td>
                <h5>edier</h5>
                <a href="{{route("actors_editer", ['id' => $actor->id])}}">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a href="{{route('actors_voir',["id" => $actor->id])}}">voir</a><br>
                <h5>supprimer</h5><a href="{{route('actors_supprimer', ["id" => $actor->id])}}">
                    <span class="fa fa-remove text-danger-light"></span>
                </a>
            </td>




        </tr>
    @endforeach

        </tbody>
    </table>

    @endsection
