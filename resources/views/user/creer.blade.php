@extends('layout')


@section('content')





    <button type="button" class="btn btn-rounded btn-primary btn-block">Créer un acteur</button>


    <form method="post" action="{{ route('user_enregistrer') }}">

        {{ csrf_field() }}

        <label for="username">username</label>
        <input name="username" id="username" />

        <label for="username_canonical">username_canonical</label>
        <input name="username_canonical" id="username_canonical" />

        <label for="ville">Ville</label>
        <input name="ville" id="villeœ" />

        <label for="image">Image</label>
        <input name="image" id="image" />



        <button type="submit">Créer un acteur</button>
    </form>

    @if(count($errors->all()))
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
