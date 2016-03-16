@extends('layout')


@section('content')

    <h3>Voir titre du film est {{$movies->title}}</h3>
    <h4>Voir date de sortie est : {{$movies->date_release}}</h4>
 @endsection
