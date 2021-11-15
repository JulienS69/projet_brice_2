<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Projet_Brice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>

<body>
<x-app-layout>
    <x-slot name="header">
    </x-slot>
<section class="getintouch">
    <div class="container modern-form">
        <div class="text-center">
            <h4 style="color: #212529;font-size: 45px; padding-top: 25px; padding-bottom: 25px">Espace Contact</h4>
        </div>
        <hr class="modern-form__hr">
        <div class="modern-form__form-container">
            <form>
                <div class="row">
                    <div class="col col-contact" style="padding-top: 20px">
                        <div class="modern-form__form-group--padding-r form-group mb-3"><input class="form-control input input-tr" type="text" placeholder="Nom">
                            <div class="line-box" style="padding-bottom: 10px">
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-contact" style="padding-top: 20px">
                        <div class="modern-form__form-group--padding-l form-group mb-3"><input class="form-control input input-tr" type="text" placeholder="Email">
                            <div class="line-box">
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="modern-form__form-group--padding-t form-group mb-3"><textarea class="form-control input modern-form__form-control--textarea" placeholder="Message"></textarea>
                            <div class="line-box">
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center"><button class="btn btn-primary submit-now" type="submit">Envoyez</button></div>
                </div>
            </form>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>
</body>

</html>
