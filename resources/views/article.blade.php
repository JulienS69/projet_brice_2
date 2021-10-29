<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
@include('layouts.navigation')


<!-- Page Heading -->
    <x-slot name="header" class="block">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pr-96 inline-block">

        </h2>
    </x-slot>
    <!-- Page Content -->
    <main>
        <table class="table table-bordered" style="margin: 10px 0 10px 0;">
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Liens vers l'article</th>
            </tr>
            @foreach($article as $unArticle)
                <tr>
                    <td class="mx-auto"><input style="text-align: center" class="form-control" type="text" value="{{$unArticle->id}}" name="idArticle" readonly></td>
                    <td class="mx-auto"><input style="text-align: center" class="form-control" type="text" value="{{$unArticle->titre}}" name="nom" readonly>
                    </td>
                    <a href="{{ url('/article/{id}') }}">Cliquez ici pour en savoir plus </a>
                </tr>
            @endforeach
        </table>

    </main>
</div>
</body>
</html>
