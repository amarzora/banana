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
            <i class="fa fa-twitter text-muted fs70 mt10"></i>
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
            <i class="fa fa-twitter text-muted fs70 mt10"></i>
            <h1 class="fs35 mbn">{{$moyAge}}</h1>
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
                <i class="fa fa-twitter text-muted fs70 mt10"></i>
                <h1 class="fs35 mbn">18,020</h1>
                <h6 class="text-white">NB CONVERSIONS</h6>
            </div>
            <div class="panel-footer bg-success br-n p12">
    <span class="fs11">
      <i class="fa fa-arrow-up pr5"></i>
      <b> 3% UNIQUES 1D AGO</b>
    </span>
            </div>
        </div>

    </div>

 @endsection
