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
                                <form action="{{ url('reset-password') }}" class="vh-100 digit-group">
                                    <div class="vh-100 d-flex flex-column justify-content-between p-4 pb-0">
                                        <div class=" mx-auto mb-5 text-center">
                                            <img src="{{ URL::asset('') }}assets/img/logo.svg" class="img-fluid"
                                                alt="Logo">
                                        </div>
                                        <div class="">
                                            <div class="text-center mb-3">
                                                <h2 class="mb-2">Vérification OTP par e-mail</h2>
                                                <p class="mb-0">Veuillez saisir le mot de passe à usage unique reçu
                                                    pour confirmer la propriété de votre compte. Un code a été envoyé à
                                                    ******doe@example.com</p>
                                            </div>
                                            <div class="text-center otp-input">
                                                <div class="d-flex align-items-center mb-3">
                                                    <input type="text"
                                                        class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold me-3"
                                                        id="digit-1" name="digit-1" data-next="digit-2"
                                                        maxlength="1">
                                                    <input type="text"
                                                        class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold me-3"
                                                        id="digit-2" name="digit-2" data-next="digit-3"
                                                        data-previous="digit-1" maxlength="1">
                                                    <input type="text"
                                                        class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold me-3"
                                                        id="digit-3" name="digit-3" data-next="digit-4"
                                                        data-previous="digit-2" maxlength="1">
                                                    <input type="text"
                                                        class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold"
                                                        id="digit-4" name="digit-4" data-next="digit-5"
                                                        data-previous="digit-3" maxlength="1">
                                                </div>
                                                <div>
                                                    <div class="badge bg-danger-transparent mb-3">
                                                        <p class="d-flex align-items-center "><i
                                                                class="ti ti-clock me-1"></i>09:59</p>
                                                    </div>
                                                    <div class="mb-3 d-flex justify-content-center">
                                                        <p class="text-gray-9">Vous n'avez pas reçu l'OTP? <a
                                                                href="javascript:void(0);" class="text-primary">Renvoyer
                                                                l'OTP</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary w-100">Vérifier et continuer</button>
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

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/otp.js"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js"></script>

</body>

</html>
