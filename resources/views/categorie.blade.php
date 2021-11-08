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
            Ajouter une catégorie
        </a>

    </div>
    @endif
    <style>
        .styled {
            border: 0;
            line-height: 2.5;
            padding: 0 20px;
            font-size: 1rem;
            text-align: center;
            color: #fff;
            text-shadow: 1px 1px 1px #000;
            border-radius: 10px;
            background-color: rgba(220, 0, 0, 1);
            background-image: linear-gradient(to top left,
            rgba(0, 0, 0, .2),
            rgba(0, 0, 0, .2) 30%,
            rgba(0, 0, 0, 0));
            box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
            inset -2px -2px 3px rgba(0, 0, 0, .6);
        }

        .styled:hover {
            background-color: rgba(255, 0, 0, 1);
        }

        .styled:active {
            box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
            inset 2px 2px 3px rgba(0, 0, 0, .6);
        }

    </style>
    <main>
        @foreach($catégories as $categorie)
            <tr>
                <td class="mx-auto"><input style="text-align: center" class="form-control" type="text" value="{{$categorie->nom}}" name="visiteurid" readonly></td>
                <a href="{{route('showArticleFromCateg' , ["id" => $categorie->id])}}" class="favorite styled"
                                type="button">
                            Cliquez ici pour en savoir plus.
                        </a>
                @if(Auth::user()->admin)
                    <form action="{{ route("delete_categ", ["id" => $categorie->id]) }}" method="post">
                        @csrf
                        @method("DELETE")
                        <button type="submit"><img src="../images/corbeille.png"></button>
                    </form>
                    <form action="{{ route("showCateg", ["id" => $categorie->id]) }}" method="post">
                        @csrf
                        <button type="submit"><img src="../images/bouton-modifier.png"></button>
                    </form>
                @endif
            </tr>
        @endforeach

    </main>
</div>
</body>
</html>
