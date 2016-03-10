
<html>
    <head>

    </head>
    <body>
    <h3>creer de nos films</h3>
        <form method="post" action="{{route('movies_enregistrer')}}" >
            <label for = "title">Titre</label>
            <input name ="title" id="title" >

            <labe for ="synopsis">Synopsis</labe>
            <input name= "synopsis" id="synopsis">

            <label for="budget">Budget</label>
            <input name="budget" id="budget">

            <label for="annee">Année</label>
            <input name="annee" id="annee">

            <label for="cover">Couverture</label>
            <input name="cover" id = "cover">

            <label for = "description">Description</label>
            <textarea id="description" name="description"></textarea>
            <button type="submit">Créer un film</button>



        </form>
    </body>
</html>