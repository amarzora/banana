@extends('layout')


@section('content')




<div class="col-md-8">
    <form method="post" action="{{route('movies_enregistrer')}}" >

            {{csrf_field()}}


        <select class="form-control">
            <label for="BO">BO</label>
            <option>Select BO</option>
            <option>Vo</option>
            <option>Vost</option>
            <option>Vostfr</option>
        </select>

            <div class = "form-group">
                <label for = "title">Titre</label>
                <input name ="title" id="title" class ="form-control" placeholder="title" type="text" >
            </div>

            <div class = "form-group">
                <label for ="synopsis">Synopsis</label>
                <textarea id="synopsis" class ="form-control" rows="3">
                    </textarea>
            </div>
            <div class = "form-group">
                 <label for="budget">Budget</label>
                 <input name="budget" id="budget" class ="form-control">
            </div>
            <div class = "form-group">
                 <label for="annee">Année</label>
                 <input name="annee" id="annee" class ="form-control">
            </div>
        <div class = "form-group">
            <label for="duree">Durée</label>
            <input name="duree" id="duree" class ="form-control">
        </div>
        <div class = "form-group">
            <label for="created_at">Date de création</label>
            <input name="created_at" id="created_at"class ="form-control">
        </div>


        <div class = "form-group">
            <label for="date_release">Date de realisation</label>
            <input name="date_release" id="date_release"class ="form-control">
        </div>
        <div class = "form-group">
            <label for ="description">Description</label>
                <textarea id="description" rows="3" class ="form-control">
                    </textarea>
        </div>
            <div class = "form-group">
                 <label for="cover">Couverture</label>
                 <input name="cover" id = "cover"class ="form-control">
            </div>

            <div class = "form-group" >
                <label for="language">Langue   :    </label>
                <label class="radio-inline mr10" >
                    <input type="radio" name="language"  id = "language" value="fr"> FR
                </label>
                <label class="radio-inline mr10">
                     <input type="radio" name="language" id = "language" value="en"> EN
                </label>
                <label class="radio-inline mr10">
                    <input type="radio" name="language" id = "language" value="es"> ES
                </label>




            </div>
    <div>
            <button type="submit">Créer un film</button>

    </div>


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
</div>
@endsection