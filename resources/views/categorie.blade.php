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
            {{ __('add') }}
        </h2>
        <button class="font-semibold text-xl text-gray-800 leading-tight pl-96 ml-22 inline-block" type="submit" href="Categorie">
            Catégorie
        </button>
    </x-slot>
    <!-- Page Content -->
    @if(Auth::user()->admin)
    <div class="container">
        <a href="{{ route('addCateg') }}">
            Ajout Catégorie
        </a>
    </div>
    @endif
    <main>
        @foreach($catégorie as $uneCategorie)
            <tr>
                <td class="mx-auto"><input style="text-align: center" class="form-control" type="text" value="{{$uneCategorie->nom}}" name="visiteurid" readonly></td>
            </tr>
        @endforeach

    </main>
</div>
</body>
</html>
