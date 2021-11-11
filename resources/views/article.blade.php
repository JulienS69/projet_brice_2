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
                                            <td class="text-truncate" style="max-width: 200px;">{{$unArticle->created_at->format("d/m/Y")}}</td>
                                            <td class="text-truncate" style="max-width: 200px;"><a href="{{ route('showArticle', [$unArticle->id]) }}">Cliquez ici pour en savoir plus</a></td>
                                    @endforeach
                             </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
