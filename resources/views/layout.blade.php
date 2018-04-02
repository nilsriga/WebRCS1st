<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />

    <title>Amuse yourself</title>
</head>

<body class="container zoom col-xs-12 col-lg-12 col-xl-12">
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-lg-2 col-md-2 col-sm-2 col-xs-offset-5 col-xs-2 main_logo border-bottom" >
                    <a href="/">
                        <img src="resources/Logo.png" class="main_logo img-responsive">
                    </a>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <ul class="main-menu">
                        <li class=" {{{ (Request::is('/') ? 'active' : '') }}} main-menu-item text-nowrap w3-btn " >
                            <a href="/">Home</a>
                        </li>
                        <li class=" {{{ (Request::is('articles*') ? 'active' : '') }}}  main-menu-item text-nowrap w3-btn" >
                            <a href="/articles">Articles</a>
                        </li>
                        <li class=" {{{ (Request::is('chat') ? 'active' : '') }}}  main-menu-item text-nowrap w3-btn" >
                            <a href="/chat">Chat</a>
                        </li>
                        <li class=" {{{ (Request::is('register') ? 'active' : '') }}}  main-menu-item text-nowrap w3-btn" >
                            <a href="/register">Register</a>
                        </li>
                        <li class=" {{{ (Request::is('about_us') ? 'active' : '') }}}  main-menu-item text-nowrap w3-btn" >
                            <a href="/about_us">About Us</a>
                    </ul>
    
                </div>
            </div>
        </div>
    </header>




@yield('content')



    <footer>
        <div class="container footer_container col-lg-12 col-xl-12 col-xs-12">
        <p>The footer</p>
        </div>
    </footer>

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script src="js/main.js"></script>


</body>




</html>