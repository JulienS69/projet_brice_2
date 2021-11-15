<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-app-layout>
    <x-slot name="header">
    </x-slot>
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
    <div class="row justify-content-center" style="padding-top: 25px">
        <div class="col-xl-10 col-xxl-9">
            <div class="card shadow">
                <div
                    class="card-header d-flex flex-wrap justify-content-center align-items-center justify-content-sm-between gap-3">
                    <h5 class="display-6 text-nowrap mb-0" style="font-weight: bold">{{$article->titre}}</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <div class="modal-title">
                                <h2>Article écrit par : {{$article->user->nom}}</h2>
                                <p> le : {{$article->created_at->format("d/m/Y")}}</p>
                                <div class="col-4 py-3 mx-auto col-xl-4 col-lg-6 col-md-6 col-sm-12"
                                     style="min-width:300px;min-height:300px;">
                                    <div class="row">
{{--                                        <h5 style="font-weight: bold">{{$article->titre}}</h5>--}}
                                        <br> <br>
                                        <h3 style="font-weight: bold;">Contenu de l'article : </h3>
                                        <br>
                                        <h3 class="card-body" style="size: 25px">{{$article->libelle}} </h3>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                                <div class="card">
                                    <p class="card-title" style="font-weight: bold;"> Espace commentaire : </p>
                                    <br>
                                    <ul>
                                        @foreach($commentaires as $commentaire)
                                            <li>{{$commentaire->user->nom}}: {{$commentaire->contenu}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{route("commentaire.index",[$article->id])}}"> Écrire un commentaire ?<br></a>

                                </div>
                                <br>
                                <div class="card">
                                    <p class="card-title" style="font-weight: bold;"> Espace note : </p>
                                    <br>
                                    <ul>
                                        @foreach( $notes as $note)
                                            <li>utilisateur: {{$note->user->nom}} a noté : {{$note->note}}/10</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{route("notes.index",[$article->id])}}"> Noté l'article ?<br></a>
                                </div>
                                <br>

                                <script
                                    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</x-app-layout>
</html>
