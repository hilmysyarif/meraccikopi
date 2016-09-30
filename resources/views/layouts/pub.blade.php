<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="pub">

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <header>
                    <div class="navbar">
                        <div class="navbar-header">
                            <div class="logo">
                                <img src="{{ asset('img/meracci@2x.png') }}" data-rjs="2" alt="">
                            </div>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Cerita</a></li>
                                <li><a href="#">Ulasan</a></li>
                                <li><a href="#">Tentang Kami</a></li>
                            </ul>
                        </div>
                    </div>
                </header>

                <section class="content">
                    @yield('content')
                </section>

                <footer>
                    <div class="row">
                        <div class="col-md-4">
                            <address>
                                <strong>Meracci Kopi</strong><br>
                                Pondok Karya Agung, Blok RBC No 37.<br>
                                Balikpapan, Kalimantan Timur Indonesia - 74115<br>
                                <abbr title="Phone">P:</abbr> (0542) 760-319
                            </address>
                        </div>
                        <div class="col-md-4 col-md-offset-4 text-right">
                            <p>Stay tune at:</p>
                            <address>
                                <strong>Instagram</strong><br>
                                <a href="https://www.instagram.com/meraccikopi/" target="_blank">instagram.com/meraccikopi</a>
                            </address>
                            <address>
                                <strong>Twitter</strong><br>
                                <a href="https://www.twitter.com/meraccikopi/" target="_blank">@meraccikopi</a>
                            </address>
                        </div>
                    </div>
                </footer>

            </div>
        </div>
    </div>

    <!-- Scripts -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="{{ url('js/app.js') }}"></script>
    <script src="{{ url('js/retina.min.js') }}"></script>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script src="https://use.fontawesome.com/995f141bcd.js"></script>
</body>
</html>
