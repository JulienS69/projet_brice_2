<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="shortcut icon" href="../../public/images/xefi.ico" type="image/x-icon" />
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
                    <h5 class="display-6 text-nowrap mb-0" style="font-weight: bold">Toutes les catégories</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Nom de l'article</th>
                                <th>Information</th>
                                <th>Date de création</th>
                                @if(Auth::user()->admin)
                                    <th class="text-center">Actions</th>
                                    <th class="text-center">Actions</th>
                                    <th class="text-center">Actions</th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($catégories as $categorie)
                            <tr>
                                <td class="text-truncate" style="max-width: 200px;">{{$categorie->nom}}</td>
                                <td class="text-truncate" style="max-width: 200px;"><a href="{{route('showArticleFromCateg' , ["id" => $categorie->id])}}"> Voir les articles de cette catégorie </a></td>
                                <td>{{$categorie->created_at->format("d/m/Y")}}</td>
                                @if(Auth::user()->admin)
                                    <td class="text-center"><a class="btn" href="{{ route('addCateg') }}"><i class="fa fa-plus-circle"></i></a></td>
                                <form action="{{ route("delete_categ", ["id" => $categorie->id]) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <td class="text-center"><button type="submit"><i class="fa fa-minus-circle"></i></button></td>
                                </form>
                                    <form action="{{ route("showCateg", ["id" => $categorie->id]) }}" method="post">
                                        @csrf
                                        <td class="text-center"><button type="submit"><i class="fa fa-pencil"></i></button></td>
                                    </form>
                                @endif
                            </tr>
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
