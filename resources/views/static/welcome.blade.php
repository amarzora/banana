<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
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

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
                <ul>

                    <li><a href="{{ route('static_welcome') }}">HOME</a> </li>

                    <li><a href="{{ route('movies_lister') }}">Film</a></li>
                    <li><a href="{{ route('categorie_lister') }}">Categorie</a> </li>
                    <li><a href="{{ route('actors_lister') }}">Acteurs</a> </li>
                    <li><a href="{{ route('directors_lister') }}">Realisateurs</a> </li>


                </ul>


            </div>
        </div>
    </body>
</html>
