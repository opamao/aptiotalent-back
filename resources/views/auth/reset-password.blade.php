<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
    <meta name="author" content="Dreams technologies - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>AptioTalent</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('') }}assets/img/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Feather CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/icons/feather/feather.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css">

</head>

<body class="bg-white">

    <div id="global-loader" style="display: none;">
        <div class="page-loader"></div>
    </div>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <div class="container-fuild">
            <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
                <div class="row">
                    @include('auth.left')
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap">
                            <div class="col-md-7 mx-auto vh-100">
                                <form action="{{ url('change-success') }}" class="vh-100">
                                    <div class="vh-100 d-flex flex-column justify-content-between p-4 pb-0">
                                        <div class=" mx-auto mb-5 text-center">
                                            <img src="{{ URL::asset('') }}assets/img/logo.svg" class="img-fluid"
                                                alt="Logo">
                                        </div>
                                        <div class="">
                                            <div class="text-center mb-3">
                                                <h2 class="mb-2">Reinitialiser le mot de passe</h2>
                                                <p class="mb-0">Votre nouveau mot de passe doit être différent des
                                                    mots de passe prècédemment utilisés.</p>
                                            </div>
                                            <div>
                                                <div class="input-block mb-3">
                                                    <div class="mb-3">
                                                        <label class="form-label">Mot de passe</label>
                                                        <div class="pass-group" id="passwordInput">
                                                            <input type="password" class="form-control pass-input">
                                                            <span class="ti toggle-password ti-eye-off"></span>
                                                        </div>
                                                    </div>
                                                    <div class="password-strength d-flex" id="passwordStrength">
                                                        <span id="poor"></span>
                                                        <span id="weak"></span>
                                                        <span id="strong"></span>
                                                        <span id="heavy"></span>
                                                    </div>
                                                    <div id="passwordInfo" class="mb-2"></div>
                                                    <p class="fs-12">Utilisez 8 caractères ou plus avec un mélange de
                                                        lettres, de chiffres et de symboles..</p>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Confirmez le mot de passe</label>
                                                    <div class="pass-group">
                                                        <input type="password" class="pass-inputs form-control">
                                                        <span class="ti toggle-passwords ti-eye-off"></span>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <button type="submit" class="btn btn-primary w-100">Soumettre</button>
                                                </div>
                                            </div>
                                        </div>
                                        @include('auth.footer')
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="{{ URL::asset('') }}assets/js/feather.min.js"></script>

    <!-- Validation-->
    <script src="{{ URL::asset('') }}assets/js/validation.js"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js"></script>

</body>

</html>
