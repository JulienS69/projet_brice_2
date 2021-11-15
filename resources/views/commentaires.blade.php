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
                        <h3 class="mb-5" style="text-align: center; font-weight: bold">Ajouter un commentaire à
                            l'article</h3>
                        <form class="col-10 justify-content-center text-center"
                              action="{{ route('addCommentaire',[$article->id])}}" method="POST">
                            @csrf
                            <label class="mt-5" for="price">Contenu du commentaire :</label>
                            <textarea style="resize: none;height:300px;" class="text-center form-control" type="text"
                                      name="contenu"></textarea>
                            <button type="submit" class="mt-5  btn btn-warning" style="background-color: limegreen">
                                Ajouter
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @if(Auth::user()->admin)
            {{-- Modification d'un commentaire--}}
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200 text-center row justify-content-center">
                            <h3 class="mb-5" style="font-weight: bold">Modification d'un commentaire</h3>
                            <h4 class="mb-5">(Avoir au moins un commentaire existant)</h4>
                                {{--Formulaire de modif -> renvoie à la route intitulé 'commentaire.update'--}}
                                <form class="col-10 justify-content-center text-center" action="{{ route('commentaire.update') }}" method="POST">
                                    @csrf
                                    {{--Selection du commentaire que l'admin veut modifier--}}
                                    <select class="form-select" name="commentaireAncien">
                                        @foreach($commentaires as $commentaire)
                                            <option>{{ $commentaire->contenu}}</option>
                                        @endforeach
                                    </select>
                                    <label class="mt-5" for="price">Nouveau contenu :</label>
                                    <textarea style="resize: none;height:300px;" class="text-center form-control" type="text" name="newContenu"></textarea>
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
                            <h4 class="mb-5">(Avoir au moins un commentaire existant)</h4>
                            <form action="{{ route("deleteCommentaire") }}" method="post">
                                @csrf
                                {{--Selection du commentaire que l'admin veut supprimer--}}
                                <select name="deleteCom" id="">
                                    @foreach($commentaires as $commentaire)
                                        <option value="{{$commentaire->contenu}}">{{$commentaire->contenu}}</option>
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
