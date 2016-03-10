
<html>
    <head>

    </head>
    <body>
    <h3>Listes de nos categories</h3>
    <hr/>

        <a href="{{ route("categorie_creer") }}">Créer une catégorie</a>
        {{csrf_field()}}

        @foreach($categories as $categorie)
            <h5>{{$categorie->title}}</h5>

            <a href="{{route('categories_supprimer',['id' => $categorie->id])}}">supprimer</a>
         @endforeach

    </body>
</html>