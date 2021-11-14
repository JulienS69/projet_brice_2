<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" href="{{asset('images/xefi.ico')}}">
    <title>Projet_Brice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    <div class="row justify-content-center" style="padding-top: 25px">
        <div class="col-xl-10 col-xxl-9">
            <div class="card shadow">
                <div class="card-header d-flex flex-wrap justify-content-center align-items-center justify-content-sm-between gap-3">
                    <h5 class="display-6 text-nowrap mb-0" style="font-weight: bold">{{$article->titre}}</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">

<div class="columns">
    <div class="modal-title">
        <h2>Article écrit par : {{$article->user->nom}}</h2>
    <div class="col-4 py-3 mx-auto col-xl-4 col-lg-6 col-md-6 col-sm-12" style="min-width:300px;min-height:300px;">
        <div class="card" style="width:100%;height:100%;">
            <div class="card-body">
                <h5>{{$article->titre}}</h5>
                <p>{{$article->date}}</p>
            </div>
            <div class="card-footer text-center"><small><a href="{{route("commentaire.index",[$article->id])}}"><i class="fa fa-eye pe-1"></i> {{$article->libelle}}<br></a></small></div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
