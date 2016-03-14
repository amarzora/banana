
<html>
    <head>

    </head>
    <body>





    <button type="button" class="btn btn-rounded btn-primary btn-block">Créer un acteur</button>


    <form method="post" action="{{ route('actors_enregistrer') }}">

        {{ csrf_field() }}
        <label for="biography">Biographie</label>
        <textarea id="biography" name="biography"></textarea>

        <label for="lastname">lastname</label>
        <input name="lastname" id="lastname" />

        <label for="firstname">firstname</label>
        <input name="firstname" id="firstname" />

        <label for="city">Ville</label>
        <input name="city" id="city" />

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
    </body>
</html>