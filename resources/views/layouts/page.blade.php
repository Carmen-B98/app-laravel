<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{setting('site.title')}}</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Preda:ital,wght@1,700&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <link href="//db.onlinewebfonts.com/c/a6741a835b0a9e9227f7c11e2ec8e088?family=Bebas+Neue+Pro" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

        @vite(['resources/css/app.scss','resources/css/app.css','resources/js/app.js','resources/js/home.js'])
        <!-- <link rel="stylesheet" type="text/css" href="../../slick-carousel/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick-carousel/slick/slick-theme.css"/>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick-carousel/slick/slick.min.js"></script> -->


    </head>
    <body class="">
      <div id="app">
        @yield('content')
      </div>
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4 menu">
              <img src="/storage/icons/footer_logo.png" alt="Logo"/>
            </div>
            <div class="col-12 col-md-6 col-lg-4 menu">
              <p class="widget-title">Companie</p>
              <ul>
                <li>
                  <a href="">Despre DY Nutrition</a>
                </li>
                <li>
                  <a href="">Termeni și Condiții</a>
                </li>
                <li>
                  <a href="">Contact</a>
                </li>
                <li>
                  <a href="">Politica de Confidențialitate</a>
                </li>
              </ul>
              <div class="social-media">
                <div class="el">
                  <a href=""><img src="/storage/icons/social/facebook.png" alt="Facebook"/></a>
                </div>
                <div class="el">
                  <a href=""><img src="/storage/icons/social/twitter.png" alt="Twitter"/></a>
                </div>
                <div class="el">
                  <a href=""><img src="/storage/icons/social/linkedin.png" alt="LinkedIn"/></a>
                </div>
                <div class="el">
                  <a href=""><img src="/storage/icons/social/instagram.png" alt="Instagram"/></a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 menu">
              <p class="widget-title">Ai întrebări?</p>
              <div class="flex-elements">
                <div class="el">
                  <div class="ring"><img src="/storage/icons/ring.png" alt="Ring"/></div>
                  <div class="text">
                    <p>Sună la</p>
                    <p>0756 348 348</p>
                  </div>
                </div>
                <div class="el">
                  <div class="mail"><img src="/storage/icons/mail.png" alt="Mail"/></div>
                  <div class="text">
                    <p>Email</p>
                    <p>contact@dynutrition.ro</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </body>
</html>
