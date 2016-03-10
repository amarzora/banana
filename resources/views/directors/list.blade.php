
<html>
    <head>

    </head>
    <body>
    <h3>Listes des directeur</h3>
    @foreach($directors as $director)
        <h5>{{ $director->firstname }}</h5>
        <p>{{ $director->lastname }}</p>


    @endforeach

    </body>
</html>