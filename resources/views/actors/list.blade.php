@extends('layout')


@section('content')


    <table class="table table-bordered mbn">
        <thead>
         <tr>
            <th>IMAGE</th>
            <th>PRENOM</th>
            <th>NOM</th>
            <th>VILLE</th>
            <th>BIOGRAPHIE</th>


         </tr>
        </thead>

        <tbody>

    <h3>Listes des acteurs</h3>
    @foreach($actors as $actor)
        <tr>
            <td><img img style="width :50px; height: auto" src="{{$actor->image}}"></td>
            <td>{{ $actor->firstname }}</td>
            <td>{{ $actor->lastname }}</td>
            <td>{{$actor->city}}</td>
            <td>{{ $actor->biography }}</td>



        </tr>
    @endforeach

        </tbody>
    </table>

    @endsection
