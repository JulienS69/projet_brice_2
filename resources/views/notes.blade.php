<!DOCTYPE html>
<html lang="en">
<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="icon" href="{{asset('images/xefi.ico')}}">
        <title>Projet_Brice</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <div class="col-4 py-3 mx-auto col-xl-4 col-lg-6 col-md-6 col-sm-12"
                             style="min-width:300px;min-height:300px;">
                            <div class="card" style="width:100%;height:100%;">
                                <div class="card-header">
                                    <h5>{{$article->titre}}</h5>
                                </div>
                                <div class="card-body">
                                    {{$article->libelle}}
                                </div>
                                <div class="card-footer">
                                    <p>Article écris le : {{$article->created_at->format("d/m/Y")}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
            {{--Ajout de commentaire--}}
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200  row justify-content-center">
                        <h3 class="mb-5" style="text-align: center; font-weight: bold">Ajouter une note </h3>
                        <form class="col-10 justify-content-center text-center" action="{{ route('addNote',[$article->id])}}" method="POST">
                            @csrf
                            {{--Selectionner la note--}}
                            <select name="note_article" id="">
                                <option value="1">1/10</option>
                                <option value="2">2/10</option>
                                <option value="3">3/10</option>
                                <option value="4">4/10</option>
                                <option value="5">5/10</option>
                                <option value="6">6/10</option>
                                <option value="7">7/10</option>
                                <option value="8">8/10</option>
                                <option value="9">9/10</option>
                                <option value="10">10/10</option>
                            </select><br>
                            <button type="submit" class="mt-5  btn btn-warning" style="background-color: limegreen">
                                Ajouter
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @if(Auth::user()->admin)
            {{-- Modification d'un article--}}
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200 text-center row justify-content-center">
                            <h3 class="mb-5" style="font-weight: bold">Modification de la note</h3>
                            <h4 class="mb-5">(Avoir au moins une note)</h4>
                                <form class="col-10 justify-content-center text-center" action="{{ route('note.update') }}" method="POST">
                                @csrf
                                    <label for="">Ancienne note</label>
                                <select name="note_article">
                                    @foreach($notes as $note)
                                        <option>{{ $note->note}}</option>
                                    @endforeach
                                </select><br><br>
                                    <label for="">Nouvelle note</label>
                                    <select name="NewNote" id="">
                                        <option value="1">1/10</option>
                                        <option value="2">2/10</option>
                                        <option value="3">3/10</option>
                                        <option value="4">4/10</option>
                                        <option value="5">5/10</option>
                                        <option value="6">6/10</option>
                                        <option value="7">7/10</option>
                                        <option value="8">8/10</option>
                                        <option value="9">9/10</option>
                                        <option value="10">10/10</option>
                                    </select><br>
                                    <button type="submit" class="mt-5  btn btn-warning" style="background-color: limegreen">
                                        Modifier
                                    </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Suppression d'un commentaire--}}
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 text-center row justify-content-center">
                        <h3 class="mb-5" style="font-weight: bold">Suppression d'un commentaire</h3>
                        <h4 class="mb-5">(Avoir au moins un commentaire)</h4>
                        <form action="{{ route("deleteNote") }}" method="post">
                            @csrf
                            <select name="deleteNote" id="">
                                @foreach($notes as $note)
                                    <option value="{{$note->note}}">{{$note->note}}</option>
                                @endforeach
                            </select><br>
                            <button type="submit" class="mt-5  btn btn-warning" style="background-color: limegreen">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</x-app-layout>

</html>
