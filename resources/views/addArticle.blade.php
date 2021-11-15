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
                        <h5 class="display-6 text-nowrap mb-0" style="font-weight: bold">Création d'un article</h5>
                    </div>
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                        <div class="p-6 bg-white border-b border-gray-200  row justify-content-center">
                            <div class="container">
                                <form class="" action="{{ route('addArticle')}}" method="POST">
                                    @csrf
                                    <label class="" for="name" style="padding-top: 25px; padding-bottom: 15px;">Nom de
                                        l'article : </label>
                                    <input class="text-center form-control" type="text" name="nom">
                                    <label class="" for="name" style="padding-top: 25px; padding-bottom: 15px">Catégorie
                                        de l'article : </label>
                                    <select class="text-center form-control" type="text" name="categorie">
                                        <option value="">Sélectionner une catégorie.</option>
                                        @foreach($categories as $categorie)
                                            <option value="{{$categorie->id}}">
                                                {{$categorie->nom}}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="row">
                                        <label class="mt-5" for="price" style="padding-top: 5px; padding-bottom: 15px">Contenu
                                            de l'article :</label>
                                        <textarea style="resize: none;height:300px;" class=" form-control"
                                                  name="libelle"></textarea>
                                        <button type="submit" class="mt-5  btn btn-warning"
                                                style="background-color: limegreen">Ajouter
                                        </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    </div>
    </body>
</x-app-layout>
</html>
