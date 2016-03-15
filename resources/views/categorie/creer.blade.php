
<html>
    <head>

    </head>
    <body>
    <h3>Créer de nos categories</h3>
    <form method="post" action="{{ route('categories_enregistrer') }}">
        {{--chaamps caché--}}
        {{ csrf_field() }}
        <label for="title">Titre</label>


        <!--old sert à recuperer ancien valeur-->

        <input vulue = "{{old('title')}} name="title" id="title" />

        <label for="description">Description</label>
        <textarea id="description" name="description"></textarea>
        <button type="submit">Créer cette catégorie</button>
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