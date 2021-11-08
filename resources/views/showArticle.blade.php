<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../public/css/Block-Responsive-Item-List.css?h=e74f113350bcbbb9a8e3a166e873d476">
    <link rel="stylesheet" href="../../public/css/styles_article.css?h=d41d8cd98f00b204e9800998ecf8427e">
</head>

<body>

@foreach($articles as $articleInfo)
<div class="row">
    <div class="col-4 py-3 mx-auto col-xl-4 col-lg-6 col-md-6 col-sm-12" style="min-width:300px;min-height:300px;">
        <div class="card" style="width:100%;height:100%;"><a href="#"><img class="img-fluid card-img-top" style="height:200px;" src="{{$articleInfo->image_article}}"></a>
            <div class="card-body">
                <h5>{{$articleInfo->titre}}</h5>
                <p>{{$articleInfo->date}}</p>
            </div>
            <div class="card-footer text-center"><small><a href="#"><i class="fa fa-eye pe-1"></i> {{$articleInfo->libelle}}<br></a></small></div>
        </div>
    </div>
</div>
@endforeach
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
