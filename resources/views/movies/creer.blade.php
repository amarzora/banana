
<html>
    <head>

    </head>
    <body>
    <h3>creer de nos films</h3>


        <form method="post" action="{{route('movies_enregistrer')}}" >

            {{csrf_field()}}

            <div class = "form-group">
                <label for = "title">Titre</label>
                <input name ="title" id="title" >
            </div>

            <div class = "form-group">
                <label for ="synopsis">Synopsis</label>
                <input name= "synopsis" id="synopsis">
            </div>
            <div class = "form-group">
                 <label for="budget">Budget</label>
                 <input name="budget" id="budget">

            <div class = "form-group">
                 <label for="annee">Année</label>
                 <input name="annee" id="annee">
            </div>

            <div class = "form-group">
                 <label for="cover">Couverture</label>
                 <input name="cover" id = "cover">
            </div>

            <div class = "form-group">
                <label for="language">Langue : </label>
                 <input type="radio" name="language"  id = "language" value="fr"> fr
                 <input type="radio" name="language" id = "language" value="en"> en
                 <input type="radio" name="language" id = "language" value="es"> es
            </div>

            <label for = "description">Description</label>
            <textarea id="description" name="description"></textarea>

            <select name ="BO">
            <label for="BO">BO</label>
            <option>Select BO</option>
            <option>Vo</option>
            <option>Vost</option>
            <option>Vostfr</option>
            </select>

            <button type="submit">Créer un film</button>




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