
<html>
    <head>
        <title>Film</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 10px;
                padding: 10px;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            h3 {
                font-size: 50px;
                color: Black;
                text-align: center;

            }

            img {
                width: 20%;


            }

        </style>
    </head>

    <body>
    <div class = "container">
        <div class = "content">

    <h3>Listes de nos films</h3>


    @foreach($movies as $movie)
        <h3>
            <a href="{{ route("movies_voir",["id" => $movie->id]) }}"> {{$movie->title}}</a>
        </h3>
        <p>
            <a href="{{route("movies_editer", ['id' => $movie->id])}}"></a>
    </p>
        <img style="width :50px; height: auto" src="{{ $movie->image }}" />
        <p>{!! $movie->synopsis !!}}</p>


        <a href= "{{route('movies_supprimer', ["id" => $movie->id])}}">supprimer</a>
        @if($movie->visible == 0)
            <a href="{{route('movies_visible', ["id" =>$movie->id])}}">Rendre visible</a>
        @else
            <a href="{{route('movies_visible', ["id" =>$movie->id])}}">Rendre invisible</a>
        @endif

        <a href="">voir couverture
        </a>

    @endforeach
        </div>

    </div>
    </body>
</html>