<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WoG</title>
    <meta name="description" content="WoG - работай играя">
    <meta name="author" content="Vladimir.Khonin">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset('/css/font-style.css')}}" rel="stylesheet">
    
    <link href="{{asset('/css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <!-- NAVIGATION MENU -->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img style=" margin-top: -7px; " src="{{asset('img/logo30.png')}}" alt="">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">WoG</a></li>
                    @if (Auth::guest())
                    @else
                        <li><a href="/personal-data"><i class="icon-th icon-white"></i> Персонаж</a></li>
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="/i/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Admin <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
				<li><a href="/phpinfo.php">phpinfo.php</a></li>
				<li><a href="/i/adminer.php">Adminer</a></li>
                            </ul>
                        </li>                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            не WoG <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
			    <li><a href="/gantt/">gantt</a></li>
			    <li><a href="/gantt/toweek.html">недельные задачи</a></li>
                        </ul>
                    </li>                        
                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <!-- FIRST ROW OF BLOCKS -->     
        <div class="row">
            @yield('content')
        </div><!--/row -->



    </div> <!-- /container -->
    <div id="footerwrap">
        <footer class="clearfix"></footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <p>© Vladimir Khonin & 2016 ПАО «МегаФон»</p>
                </div>

            </div><!-- /row -->
        </div><!-- /container -->		
    </div><!-- /footerwrap -->

    <!-- JavaScripts -->
    <script type="text/javascript" src="{{asset('/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/app.js') }}"></script>
</body>
</html>
