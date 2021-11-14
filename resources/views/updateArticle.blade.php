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
                <div
                    class="card-header d-flex flex-wrap justify-content-center align-items-center justify-content-sm-between gap-3">
                    <h5 class="display-6 text-nowrap mb-0" style="font-weight: bold">Modification d'un article</h5>
                </div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="card-body">
                        <form class="col-10 justify-content-center text-center"
                              action="{{ route('article.update') }}" method="POST">
                            <div class="row">
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
                                <textarea style="resize: none;height:300px;" class="text-center form-control"
                                          type="text" name="newDescription"></textarea>
                                <button type="submit" class="mt-5  btn btn-warning" style="background-color: limegreen">
                                    Modifier
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
