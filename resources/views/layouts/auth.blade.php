<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>SeeDev Project ~ Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Simple Website CRUD - Created by Beginner" name="description" />
    <meta content="Ahmad Dzaky" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

    @yield('content')

    <div class="mt-5 text-center">
        <div>
            <p>© <script>
                    document.write(new Date().getFullYear())
                </script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Ahmad Dzaky</p>
        </div>
    </div>

    </div>
    </div>
    </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- validation init -->
    <script src="{{ asset('assets/js/pages/validation.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>