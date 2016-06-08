<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>2-Execute</title>

    <!-- Bootstrap Core CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    -->
    <!-- Custom Fonts -->
    <link   href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
            rel='stylesheet'
            type='text/css'
    >
    <link   href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
            rel='stylesheet'
            type='text/css'
    >
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Custom CSS -->
    <link href="{{ asset('css/creative.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand-logo page-scroll" href="#page-top">
                    <img src="{{ asset('img/2-execute-logo.png') }}" class="" alt="2-execute logo supply chain management"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" aria-expanded="true">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="{{ route('home') }}#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ route('home') }}#mission">Mission</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ route('home') }}#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ route('home') }}#cases">Cases</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ route('home') }}#partners">Partners</a>
                    </li>
                    <li>
                        <a class="page-scroll color-tinder" href="{{ route('tinder.contact') }}">Supply Chain Tinder</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ route('home') }}#contact">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a  href="#"
                            class="dropdown-toggle"
                            data-toggle="dropdown"
                            role="button"
                            aria-expanded="false"
                        >
                            {{ trans('content.homepage.language.text') }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('language.change', ['language_code' =>'nl']) }}">NL - Nederlands</a>
                            </li>
                            <li>
                                <a href="{{ route('language.change', ['language_code' =>'fr']) }}">FR - Fran&#xE7;ais</a>
                            </li>
                            <li>
                                <a href="{{ route('language.change', ['language_code' =>'en']) }}">EN - English</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <section class="bg-dark" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading wow fadeInDown">Let's Get In Touch!</h2>
                    <hr class="primary wow fadeInUp">
                    <p class="wow fadeInUp" data-wow-delay="0.5s">
                        Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!
                    </p>
                </div>
                <div class="col-md-4 col-md-offset-2 text-center wow fadeInUp" data-wow-delay="1.0s"> <i class="fa fa-phone fa-3x"></i>
                    <p>
                        <a href="tel:0032474091153">+32 (0) 474 / 09 11 53</a>
                    </p>
                </div>
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="1.5s"> <i class="fa fa-envelope-o fa-3x"></i>
                    <p>@include('home.email')</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-right">
                    <p>
                        Powered by:
                        <script type="text/javascript"><!--
                        var tpnpzqo = ['i','g','e','<','<','t','a','.','k','l','n','m','a','a','e','m','l','@','o','t','i','v','c','r','l',' ','=','r','>','"','k','.','r','e','i','o','s','i','c','m','m','l','e','=','c','e','y','a','h','a',':','r','a','n','m','e','/','"','r','t','>','"','c','s','k','"','g','v','a','i','a','m','c','i',' ','k','f','o','a','@','l','y'];var lbllsem = [33,30,21,0,78,23,10,74,19,52,67,77,32,80,5,31,12,29,37,62,66,26,18,61,34,2,7,4,81,47,24,35,16,25,51,76,45,72,57,9,38,73,48,46,41,64,56,20,3,50,15,55,71,28,70,60,79,39,22,13,54,53,36,44,58,8,69,65,59,11,1,49,75,27,40,63,6,14,43,68,42,17];var xgiafes= new Array();for(var i=0;i<lbllsem.length;i++){xgiafes[lbllsem[i]] = tpnpzqo[i]; }for(var i=0;i<xgiafes.length;i++){document.write(xgiafes[i]);}
                        // --></script>
                        <noscript>Please enable Javascript to see the email address</noscript>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.fittext.js') }}" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('js/wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/countUp.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/appear.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/slick.min.js') }}" type="text/javascript"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/creative.js') }}" type="text/javascript"></script>

</body>

</html>