<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MissKeen">
  	<meta name="author" content="MissKeen" />

    <title>MissKeen</title>
    <link rel="icon" href="{{ asset('/img/logo-misskeen-small.png')}}" type="image" sizes="16x16"> <!------------------------------------------ ICON-------------->
    <!-- Bootstrap-->
    <link rel="stylesheet" href="{{ asset('css/frontpage/bootstrap.min.css') }}">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,400italic">
    <!-- Stroke 7 font by Pixeden (http://www.pixeden.com/icon-fonts/stroke-7-icon-font-set)-->
    <link rel="stylesheet" href="{{ asset('css/frontpage/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{ asset('css/frontpage/helper.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/frontpage/style.default.css')}}" id="theme-stylesheet">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{ asset('css/frontpage/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('css/frontpage/owl.theme.css')}}">
    <!-- plugins-->
    <link rel="stylesheet" href="{{ asset('css/frontpage/simpletextrotator.css')}}">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css/frontpage/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body data-spy="scroll" data-target="#navigation" data-offset="120">
    <div id="all">
      <!-- navbar-->
      <header class="header">
        <div role="navigation" class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header"><a href="#all" class="navbar-brand scroll-to"><img src="{{ asset('/img/logo-misskeen-small.png')}}" alt="logo" class="hidden-xs hidden-sm"><img src="{{ asset('/img/logo-small.png')}}" alt="logo" class="visible-xs visible-sm"><span class="sr-only">Go to homepage</span></a>
              <div class="navbar-buttons">
                <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="pe-7s-menu"></i></button>
              </div>
            </div>
            <div id="navigation" class="collapse navbar-collapse navbar-right">
              <ul class="nav navbar-nav">
                <li><a href="#features" class="scroll-to">Features</a></li>
                <li><a href="#documentation" class="scroll-to">Documentation</a></li>
                <li><a href="#contact" class="scroll-to">Contact</a></li>
              </ul><a href="#" data-toggle="modal" data-target="#get-started" class="btn navbar-btn btn-ghost">Get started</a>
            </div>
          </div>
        </div>
      </header>


        @yield('content')


      <footer class="footer">
        <div class="footer__copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <p>&copy;2017 MissKeen Co.</p>
              </div>
              <div class="col-md-6">
                <p class="credit pull-right">Code by <a href="https://bootstrapious.com/landing-pages" class="external">PLBTW Team</a></p>
               <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ asset('js/frontpage/bootstrap.min.js')}}"> </script>
    <script src="{{ asset('js/frontpage/jquery.cookie.js')}}"> </script>
    <script src="{{ asset('js/frontpage/ekko-lightbox.js')}}"></script>
    <script src="{{ asset('js/frontpage/jquery.simple-text-rotator.min.js')}}"></script>
    <script src="{{ asset('js/frontpage/jquery.scrollTo.min.js')}}"></script>
    <script src="{{ asset('js/frontpage/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/frontpage/front.js')}}"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>
