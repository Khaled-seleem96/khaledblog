<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        <!-- START NAVBAR -->
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm nav" >
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="img/logo.png" alt="" width="80px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" >
                    <span class="navbar-toggler-icon " ></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav " style="direction: rtl;" >
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link text btn" href="{{route('userlogin')}}" style="font-size: 10px;color: wheat !important;opacity: 0.7;" >تسجيل الدخول                                </a>
                        </li> 

                        <li class="nav-item">

                                <a class="nav-link text" href="{{url('/')}}" style="font-size: 16px ;margin-right: 5px">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text" href="{{url('/gallery')}}" style="font-size: 16px;margin-right: 5px;" >المعرض</a>
                            </li>   
                            <li class="nav-item">
                                <a class="nav-link text" href="{{url('about')}}" style="font-size: 16px;margin-right: 5px;" >من نحن</a>
                            </li>   
                            
                            
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->
        @yield('user')

         <!-- START SECTION FOOTER -->
         <footer id="footer" class="footer-1" style="border-top: #ebba41 1px solid;" data-aos="fade-up">
            <div class="main-footer widgets-dark typo-light">
            <div class="container">
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="widget subscribe no-box">
            <h5 class="widget-title" style="text-align: center;"><img src="img/logo.png" alt="logo" width="20%"></h5>
            <p class="tsec1" style="font-size: 12px;color: #ebba41;">التميز بتفاصيل التصميم وتنفيذ
                كافه الديكورات والمفروشات لكي نقدم لكم أرق التصاميم الداخلية بتفاصيلها
                على الطراز الحديث.</p>
            </div>
            </div>
            
            <div class="col-xs-6 col-sm-6 col-md-4" style="justify-content: center;display: flex;">
            <div class="widget no-box">
            <h5 class="widget-title">روابط سريعة<span></span></h5>
            <ul class="thumbnail-widget">
            <li>
            <div><a href="{{url('/')}}" class="text">الرئيسية</a></div>	
            </li>
            <li>
            <div><a href="{{url('/gallery')}}" class="text">المعرض</a></div>	
            </li>
            <li>
            <div><a href="{{url('/about')}}" class="text">من نحن</a></div>	
            </li>
            </ul>
            </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4" style="justify-content:center;display: flex;">
            <div class="widget no-box" >
            <h5 class="widget-title" >اتصل بنا<span></span></h5>          
            <p class="text" style="margin-left: 30px;position: relative;">0505563337</p>
            <img src="img/phone.png" style="bottom: 30px;position: relative;">
            <p  class="text" style="margin-left: 30px;bottom: 40px;position: relative;">0555024466</p>
            <ul class="social-footer2">
            <a style="color: white;size: 20px;" title="pinterest" target="_blank" href="https://www.pinterest.com/janahalamirah"><img src="img/pinterest .png" width="30" height="30"></a>
            <a href="https://www.facebook.com/janahalamirah" target="_blank" title="Facebook"><img alt="Facebook" width="30" height="30" src="img/facebook.png"></a>
            <a href="https://twitter.com/janahalamirah" target="_blank" title="Twitter"><img alt="Twitter" width="30" height="30" src="img/twitter.png"></a>
            <a title="instagram" target="_blank" href="https://www.instagram.com/janahalamirah/"><img alt="instagram" width="30" height="30" src="img/instagram.png"></a>
            </ul>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="footer-copyright">
            <div class="container">
            <div class="row">
            <div class="col-md-12 text-center">
            <p style="color: wheat !important;">Copyright © 2020. All rights reserved.</p>
            </div>
            </div>
            </div>
            </div>
            </footer>
            <!-- END SECTION FOOTER -->
    </div>  
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>