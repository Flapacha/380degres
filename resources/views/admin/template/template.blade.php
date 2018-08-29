<!DOCTYPE html>
<html lang="fr">

    <head>

        <link rel="stylesheet" href="/css/admin.css" />
        <link rel="stylesheet" href="/css/bootstrap.min.css" />

        {{--<script type="text/javascript" src="/js/bootstrap.min.js"></script>--}}
        <script
        src="https://code.jquery.com/jquery-3.3.1.js"
                integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
                crossorigin="anonymous"></script>

        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.6.95/css/materialdesignicons.min.css">

    </head>

    <body>

        <div class="container-fluid">

            <div class="row admin-page">


                <div class="same-line admin-left-menu left-box-shadow">

                    <div class="text-center my-4 font-weight-bold">
                        ADMINISTRATEUR
                    </div>

                    <div class="text-center">

                        <img src="/images/logo.png" alt="logo 380">

                    </div>


                    <div class="red-bar-separator"></div>

                    <div class="text-center my-4 font-weight-bold">
                    YAYA SORO
                </div>
                    <div class="menu">

                        <ul class="list-unstyled components">
                            <li class="active my-3">
                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle h5">
                                    <span class="mdi mdi-newspaper mr-4"></span>
                                    ARTICLES
                                </a>
                                <ul class="collapse list-unstyled" id="homeSubmenu">

                                    <li>
                                        <a href="{{route("adminPostList",["page"=>1])}}">LISTE</a>
                                    </li>


                                </ul>
                            </li>
                            <li class="my-3">
                                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle h5 my-4">
                                    <span class="mdi mdi-web mr-4"></span>
                                    PAGES
                                </a>
                                <ul class="collapse list-unstyled" id="pageSubmenu">

                                    <li class="px-2 py-1">
                                        <a href="#">
                                            <span class="mdi mdi-home mr-4"></span>
                                            ACCEUIL
                                        </a>
                                    </li>
                                    <li class="px-2 py-1">
                                        <a href="#">
                                            <span class="mdi mdi-shape mr-4"></span>
                                            RUBRIQUE 1
                                        </a>
                                    </li>
                                    <li class="px-2 py-1">
                                        <a href="#">
                                            <span class="mdi mdi-shape mr-4"></span>

                                            RUBRIQUE 2
                                        </a>
                                    </li>
                                    <li class="px-2 py-1">
                                        <a href="#">RUBRIQUE 3</a>
                                    </li>
                                    <li class="px-2 py-1">
                                        <a href="#">RUBRIQUE 4</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>


                </div>


                <div class="same-ligne admin-right-content">


                    <div class="text-center h3 py-4  cool-linear-gradient text-white">
                        PANEL DE CONTROLE
                    </div>

                    <div class="content">
                        @yield("content")
                    </div>


                </div>

            </div>



        </div>

    </body>

</html>
