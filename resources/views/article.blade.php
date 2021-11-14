<!DOCTYPE html>
<html lang="en">

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
                    <h5 class="display-6 text-nowrap mb-0" style="font-weight: bold">Tous les articles</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom de l'article</th>
                                <th>Catégorie</th>
                                <th>Date de publication</th>
                                <th>Liens vers l'article</th>
                            </tr>
                            </thead>
                            <tbody>
                                    @foreach($article as $unArticle)
                                        <tr>
                                            <td class="text-truncate" style="max-width: 200px;">{{$unArticle->id}}</td>
                                            <td class="text-truncate" style="max-width: 200px;">{{$unArticle->titre}}</td>
                                            <td class="text-truncate" style="max-width: 200px;">{{$unArticle->nom}}</td>
{{--                                            <td class="text-truncate" style="max-width: 200px;">{{$unArticle->categories[0]->nom}}</td>--}}
                                            <td class="text-truncate" style="max-width: 200px;">{{$unArticle->created_at->format("d/m/Y")}}</td>
                                            <td class="text-truncate" style="max-width: 200px;"><a href="{{ route('showArticle', [$unArticle->id]) }}">Cliquez ici pour en savoir plus</a></td>
                                    @endforeach
                             </tbody>
                        </table>
                    </div>
                </div>
                @if(Auth::user()->admin)
                {{-- Ajout d'un article--}}
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200  row justify-content-center">
                            <h3 class="mb-5">Création d'un article</h3>
                            <form class="col-10 justify-content-center text-center" action="{{ route('addArticle')}}" method="POST">
                                @csrf
                                <label class="" for="name">Nom de l'article : </label>
                                <input class="text-center form-control" type="text" name="nom">
                                <label class="mt-5" for="price">Contenu de l'article :</label>
                                <textarea style="resize: none;height:300px;" class="text-center form-control" type="text" name="libelle"></textarea>
                                <button type="submit" class="mt-5  btn btn-warning">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- Modification d'un article--}}
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200  row justify-content-center">
                            <h3 class="mb-5">Modification d'un article</h3>
                            <form class="col-10 justify-content-center text-center" action="{{ route('article.update') }}" method="POST">
                                @csrf
                                <label class="" for="name">Nom de l'article : </label>
                                <select class="form-select okokok" name="article">
                                    @foreach($article as $Unarticle)
                                        <option>{{ $Unarticle->titre}}</option>
                                    @endforeach
                                </select>
                                <label class="mt-5" for="price">Nouveau nom :</label>
                                <input class="text-center form-control" type="text" name="nouveauNom">
                                <label class="mt-5" for="price">Nouveau contenu :</label>
                                <textarea style="resize: none;height:300px;" class="text-center form-control" type="text" name="newDescription"></textarea>
                                <button type="submit" class="mt-5  btn btn-warning">Modifier</button>
                            </form>
                        </div>
                    </div>
                </div>

                    {{-- Suppression d'un article--}}
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200  row justify-content-center">
                                <h3 class="mb-5">Suppression d'un article</h3>
                                <form action="{{ route("article.destroy", ["id" => $Unarticle->id]) }}" method="post">
                                    @csrf
                                    <select class="form-select okokok" name="article">
                                    @foreach($article as $Unarticle)
                                            <option value="{{$Unarticle->titre}}">{{$Unarticle->titre}}</option>
                                    @endforeach
                                    </select>
                                    <button type="submit" class="mt-5  btn btn-warning">Supprimer</button>
                                </form>
                            </div>
                        </div>
                @endif
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
