<!DOCTYPE html>
<html lang="fr" class="h-100">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="/css/app.css" />
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


    @yield("custom_head")


</head>

    <body class="h-100">

        <header class="d-flex flex-column h-100a ">

            <div class="background-color-380 text-white px-3 py-1 avenir-light text-right flex-heigt-by-content">

                suivez nous sur les reseaux !

            </div>

            <div class="containere px-1 flex-heigt-by-content">
                <ul class="row">

                    <li class="col-md-11 col-lg-9 ">
                        <a  class="d-md-block " href="{{ route("home") }}">
                            <img src="/images/logo.png" alt="Logo 380 Dégrés" class="logo py-1">
                            <span class="logo-description">
                           <span>AGENCE DE COMMUNICATION - LE BLOG</span>
                            </span>
                        </a>

                    </li>

                    <div class="col text-right align-items-center vertical-center d-none d-lg-flex">

                        <div>

                            <i class="fab fa-facebook-square facebook"></i>
                            <i class="fab fa-twitter-square twitter"></i>
                            <i class="fab fa-youtube youtube"></i>
                            <i class="fab fa-instagram instagram"></i>

                        </div>


                    </div>

                </ul>
            </div>



            <div></div>
            
            <nav class="containere d-none d-lg-block font-weight-bold  avenir-light flex-heigt-by-content">

                <ul class="row px-1">

                    {{--<li class="col-3 text-center font-weight-bold px-3 py-3 background-color-380">--}}
                        {{--<a href=""></a>RUBRIQUE 1--}}
                    {{--</li>--}}

                    <li class="col-3 text-center px-3 py-3 @if(request()->request->get("categorieID")==1)  actived background-color-380 text-white @endif">
                        <a href="{{ route("rubrique1Home") }}">RUBRIQUE 1</a>

                    </li>

                    <li class="col-lg text-center px-3 py-3 @if(request()->request->get("categorieID")==2)  actived background-color-380 text-white @endif">
                        <a href="{{  route("rubrique2Home") }}">RUBRIQUE 2</a>
                    </li>

                    <li class="col-lg text-center px-3 py-3 @if(request()->request->get("categorieID")==3)  actived background-color-380 text-white @endif">
                        <a href="{{  route("rubrique3Home") }}">RUBRIQUE 3</a>
                    </li>

                    <li class="col-lg text-center px-3 py-3 @if(request()->request->get("categorieID")==4)  actived background-color-380 text-white @endif">
                        <a href="{{  route("rubrique4Home") }}">RUBRIQUE 4</a>
                    </li>


                    {{--<li class="col-lg text-center px-3 py-3 @if(request()->request->get("categorieID")==5)  actived background-color-380 text-white @endif">--}}
                        {{--<a href="{{  route("rubrique4Home") }}">RUBRIQUE 5</a>--}}
                    {{--</li>--}}



                </ul>

            </nav>

            @yield("custom_header_content")

        </header>

        <div>
            @yield("content")
        </div>

        <footer class="px-3 py-3">

            <div class="container d-none">

                <div class="row">

                    <div class="col-3">
                        <img src="/images/logo_white.png" alt="Logo 380 Degres">
                        <div class="text-color-380 letter-spaccing-7 font-weight-bold avenir-light">AGENCE DE COMMUNICATION</div>
                    </div>

                    <div class="col-9 d-none">

                        <div class="row">

                            <div class="col-4 avenir-light font-weight-bold">

                                <ul>
                                    <li><a href="#">NOTRE SITE</a></li>
                                    <li><a href="#">ACTUALITE</a></li>
                                    <li><a href="#">NOUS CONTACTEZ</a></li>
                                    <li><a href="#">NOUS CONTACTEZ</a></li>
                                </ul>

                            </div>


                            <div class="col-4 avenir-light font-weight-bold">

                                <ul>
                                    <li><a href="#">NOTRE SITE</a></li>
                                    <li><a href="#">ACTUALITE</a></li>
                                    <li><a href="#">NOUS CONTACTEZ</a></li>
                                    <li><a href="#">NOUS CONTACTEZ</a></li>
                                </ul>

                            </div>


                            <div class="col-4 avenir-light font-weight-bold">

                                <ul>
                                    <li><a href="#">NOTRE SITE</a></li>
                                    <li><a href="#">ACTUALITE</a></li>
                                    <li><a href="#">NOUS CONTACTEZ</a></li>
                                    <li><a href="#">NOUS CONTACTEZ</a></li>
                                </ul>

                            </div>


                            <div class="col-4 avenir-light font-weight-bold">

                                <ul>
                                    <li><a href="#">NOTRE SITE</a></li>
                                    <li><a href="#">ACTUALITE</a></li>
                                    <li><a href="#">NOUS CONTACTEZ</a></li>
                                    <li><a href="#">NOUS CONTACTEZ</a></li>
                                </ul>

                            </div>



                        </div>

                    </div>

                </div>

            </div>

            <div class="container-fluid">

                <div class="row text-center">

                    <div class="col-5 vertical-center">
                        <div class="footer-bar"></div>
                    </div>

                    <div class="col-2 d-inline-block">

                        <img src="/images/logo_white.png" alt="380 Degres Logo" width="50%">

                        <div class="lighned-color font-weight-bold letter-spaccing-3">
                            LE BLOG
                        </div>

                    </div>

                    <div class="col-5 vertical-center">
                        <div class="footer-bar"></div>
                    </div>

                </div>

                <div class="row">

                    <div class="text-center col-12 px-1 py-3 text-white avenir-light">
                        Copyright 2018 © 380 DEGRES Le Blog Tous droits réservés.
                    </div>

                    <div class="float-right h3 text-white">

                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-twitter-square "></i>
                        <i class="fab fa-youtube facebook"></i>

                    </div>

                </div>

            </div>



        </footer>

    </body>

</html>