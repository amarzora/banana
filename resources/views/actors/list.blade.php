
<html>
    <head>

    </head>
    <body>
    <h3>Listes des acteurs</h3>
    @foreach($actors as $actor)
        <h2>Nom :{{ $actor->firstname }}  - Prenom :{{ $actor->lastname }}</h2>
        <h2></h2>
        <p>Biographie :{{ $actor->biography }}</p>
        <h3>Ville : {{$actor->city}}</h3>
        <h4><img src="{{$actor->image}}"></h4>




    @endforeach

    </body>
</html>