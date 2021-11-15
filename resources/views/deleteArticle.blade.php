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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200  row justify-content-center">
                <h3 class="mb-5">Suppression d'un article</h3>
                @foreach($article as $Unarticle)

                    <form action="{{ route("article.destroy", ["id" => $Unarticle->id]) }}" method="post">
                        @endforeach
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
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</x-app-layout>
</html>
