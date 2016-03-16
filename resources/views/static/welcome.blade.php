@extends('layout')


@section('content')

    <h3><i classe = "fa fa -dashboard"></i>Dashboard</h3>
    <hr />

<div class = "col-md-3">
    <div class="panel panel-tile text-center">
        <div class="panel-body bg-success light">
            <i class="fa fa-film text-muted fs70 mt10"></i>
            <h1 class="fs35 mbn">{{$nbFilm}} sur {{$nbFilmT}}</h1>
            <h6 class="text-white">Nb films actifs</h6>
        </div>
        <div class="panel-footer bg-success br-n p12">
    <span class="fs11">
      <i class="fa fa-arrow-up pr5"></i>
      <b> 3% UNIQUES 1D AGO</b>
    </span>
        </div>
    </div>

</div>



<div class = "col-md-3">
    <div class="panel panel-tile text-center">
        <div class="panel-body bg-info light">
            <i class="fa fa-user text-muted fs70 mt10"></i>
            <h1 class="fs35 mbn">{{$nbActorsF}} sur {{$nbActors}}</h1>
            <h6 class="text-white">NB Acteurs français</h6>
        </div>
        <div class="panel-footer bg-info br-n p12">
    <span class="fs11">
      <i class="fa fa-arrow-up pr5"></i>
      <b> 3% UNIQUES 1D AGO</b>
    </span>
        </div>
    </div>


</div>



<div class = "col-md-3">

    <div class="panel panel-tile text-center">
        <div class="panel-body bg-primary light">
            <i class="fa fa-group text-muted fs70 mt10"></i>
            <h1 class="fs35 mbn">{{$moyAge}} ans</h1>
            <h6 class="text-white">MOYENNE D'AGE</h6>
        </div>
        <div class="panel-footer bg-primary br-n p12">
    <span class="fs11">
      <i class="fa fa-arrow-up pr5"></i>
      <b> 3% UNIQUES 1D AGO</b>
    </span>
        </div>
    </div>

</div>

<div class = "col-md-3">
        <div class="panel panel-tile text-center">
            <div class="panel-body bg-success light">
                <i class="fa fa-usd text-muted fs70 mt10"></i>
                <h1 class="fs35 mbn">{{$budgT}} €</h1>
                <h6 class="text-white">BUDGET TOTAL</h6>
            </div>
            <div class="panel-footer bg-success br-n p12">
    <span class="fs11">
      <i class="fa fa-arrow-up pr5"></i>
      <b> 3% UNIQUES 1D AGO</b>
    </span>
            </div>
        </div>

    </div>


    <div class = "col-md-3">
        <div class="panel panel-tile text-center">
            <div class="panel-body bg-success light">
                <i class="fa fa-file-movie-o text-muted fs70 mt10"></i>
                <h1 class="fs35 mbn">{{$moyDF}} h</h1>
                <h6 class="text-white"> DUREE MOYENNE D'UN FILM</h6>
            </div>
            <div class="panel-footer bg-success br-n p12">
    <span class="fs11">
      <i class="fa fa-arrow-up pr5"></i>
      <b> 3% UNIQUES 1D AGO</b>
    </span>
            </div>
        </div>

    </div>








    <div class = "col-md-3">
        <div class="panel panel-tile text-center">
            <div class="panel-body bg-success light">
                <i class="fa fa-film text-muted fs70 mt10"></i>
                <h1 class="fs35 mbn">{{$fLn}} </h1>
                <h6 class="text-white">nombre films francais note>4 </h6>
            </div>
            <div class="panel-footer bg-success br-n p12">
    <span class="fs11">
      <i class="fa fa-arrow-up pr5"></i>
      <b> 3% UNIQUES 1D AGO</b>
    </span>
            </div>
        </div>

    </div>


    <div class = "col-md-3">
        <div class="panel panel-tile text-center">
            <div class="panel-body bg-success light">
                <i class="fa fa-thumbs-up text-muted fs70 mt10"></i>
                <h1 class="fs35 mbn">{!! str_repeat('<i class="fa fa-star"></i>',$note) !!} </h1>
                <h6 class="text-white">moyenne note presse </h6>
            </div>
            <div class="panel-footer bg-success br-n p12">
    <span class="fs11">
      <i class="fa fa-arrow-up pr5"></i>
      <b> 3% UNIQUES 1D AGO</b>
    </span>
            </div>
        </div>

    </div>




<!--users-->


    <div class="col-md-6">

        <!-- User Group Widget -->
        <div class="panel user-group-widget">
            <div class="panel-heading">
                    <span class="panel-icon">
                      <i class="fa fa-users"></i>
                    </span>
                <span class="panel-title"> Recent User Activity</span>
            </div>
            <div class="panel-menu">
                <div class="input-group ">
                      <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                      </span>
                    <input type="text" class="form-control" placeholder="Search user...">
                </div>
            </div>
            <div class="panel-body panel-scroller pn" style="max-height: 513px;">
                <div class="row">
                    <div class="col-md-3">
                        <img src="assets/img/avatars/1.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/avatars/2.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/avatars/3.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/avatars/4.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="row mt15">
                    <div class="col-md-3">
                        <img src="assets/img/avatars/5.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/avatars/6.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/avatars/1.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/avatars/2.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="row mt15">
                    <div class="col-md-3">
                        <img src="assets/img/avatars/3.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/avatars/4.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/avatars/5.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/avatars/6.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="row mt15">
                    <div class="col-md-3">
                        <img src="assets/img/avatars/1.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/avatars/2.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/avatars/3.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/avatars/4.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="row mt15">
                    <div class="col-md-3">
                        <img src="assets/img/avatars/5.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/avatars/6.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/avatars/1.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/avatars/2.jpg" class="user-avatar">
                        <div class="caption">
                            <h5>Mike Pavlov
                                <br>
                                <small> Designer</small>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>










    <div class="col-md-6">

    <div class="panel">
        <div class="panel-heading">
    <span class="panel-icon">
      <i class="fa fa-film"></i>
    </span>
            <span class="panel-title"> 10 prochaines seances</span>
        </div>
        <div class="panel-body ptn pbn p10">
            <ol class="timeline-list">

                @foreach($titleCinema as $value)
                <li class="timeline-item">
                    <div class="timeline-icon bg-dark light">
                        <span class="fa fa-tags"></span>
                    </div>
                    <div class="timeline-desc">
                        <b>{{$value->title}}</b> Added to his store:
                        <a href="#">Ipod</a>
                    </div>
                    <div class="timeline-date">1:25am</div>
                </li>
                @endforeach

            </ol>
        </div>
    </div>












</div>


    <div class="col-md-6">
    <div class="panel listgroup-widget">
        <div class="panel-heading">
    <span class="panel-icon">
      <i class="fa fa-tag"></i>
    </span>
            <span class="panel-title"> Nombres</span>
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <span class="badge badge-primary">{{$nbFilmT}}</span>
                Film
            </li>
            <li class="list-group-item">
                <span class="badge badge-success">9</span>
                Catégories
            </li>
            <li class="list-group-item">
                <span class="badge badge-info">11</span>
               Acteurs
            </li>
            <li class="list-group-item">
                <span class="badge badge-warning">18</span>
                Réalisateur
            </li>
            <li class="list-group-item">
                <span class="badge badge-danger">22</span>
               Séances
            </li>
            <li class="list-group-item">
                <span class="badge badge-alert">9</span>
              Médias
            </li>
        </ul>
    </div>

</div>





     





@endsection
