<!DOCTYPE html>
<html lang="fr">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="/css/app.css" />
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


    @yield("custom_head")

</head>

    <body>

        <header>
            
            <div class="containere px-1">
                <ul class="row">

                    <li class="col-md-11 col-lg-9 ">
                        <img src="/images/logo.png" alt="Logo 380 Dégrés" class="logo py-1">
                        <span class="logo-description">
                           <span>AGENCE DE COMMUNICATION - LE BLOG</span>
                        </span>
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
            
            <nav class="containere d-none d-lg-block ">

                <ul class="row px-1">

                    <li class="col-3 text-center font-weight-bold px-3 py-3 background-color-380">
                        <a href=""></a>RUBRIQUE 1
                    </li>

                    <li class="col-3 text-center px-3 py-3">
                        <a href="{{  route("rubrique2Home") }}">RUBRIQUE 2</a>
                    </li>

                    <li class="col-3 text-center px-3 py-3">
                        <a href="{{  route("rubrique3Home") }}">RUBRIQUE 3</a>
                    </li>

                    <li class="col-3 text-center px-3 py-3">
                        <a href="{{  route("rubrique4Home") }}">RUBRIQUE 4</a>
                    </li>



                </ul>

            </nav>

            @yield("custom_header_content")

        </header>

        <div>
            @yield("content")
        </div>

        <footer class="px-3 py-3">

            <div class="container">

                <div class="row">

                    <div class="col-3">
                        <img src="/images/logo_white.png" alt="Logo 380 Degres">
                        <div class="text-color-380 letter-spaccing-7 font-weight-bold avenir-light">AGENCE DE COMMUNICATION</div>
                    </div>

                    <div class="col-9">

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
                        <div class="footer-bar">a</div>
                    </div>

                </div>

            </div>



        </footer>

    </body>

</html>