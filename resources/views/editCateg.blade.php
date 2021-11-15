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
    <div class="row justify-content-center" style="padding-top: 25px">
        <div class="col-xl-10 col-xxl-9">
            <div class="card shadow">
                <div
                    class="card-header d-flex flex-wrap justify-content-center align-items-center justify-content-sm-between gap-3">
                    <h5 class="display-6 text-nowrap mb-0" style="font-weight: bold">Modification d'une catégorie</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{ route("updateCateg", ["id" => $search->id]) }}" method="post">
                            @csrf
                            @method("PUT")
                            <label for="">Modification de la catégorie</label>
                            <input type="text" value="{{$search->nom}}" name="NomCateg">
                            <button type="submit"
                                    style="font-weight: bold; background-color: #ffffff; padding-left: 20px">Modifier
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</x-app-layout>
</html>


