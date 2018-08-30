<!DOCTYPE>
<html>

    <head>

        <link rel="stylesheet" href="/css/admin.css" />
        <link rel="stylesheet" href="/css/bootstrap.min.css" />
        <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.6.95/css/materialdesignicons.min.css">

    </head>

    <body class="h-100 w-100 d-flex align-items-center">

        <div class="w-100 text-center">

            <div class="d-inline-block">

                <img src="/images/logo.png" alt="">

                <div class="logo-description mb-5" style="font-family: 'Avenir';font-weight: bold;color: #ed292c;letter-spacing: 7px;">
                    AGENCE DE COMMUNATION
                </div>

                <form action="{{ route("actionConnectAdmin") }}" method="post">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="my-4">
                        <input type="text" class="form-control text-center my-3 font-weight-bold text-color-380" name="login" style="color:#ed292c" placeholder="NOM D'UTILISATEUR">
                    </div>

                    <div class="my-4">
                        <input type="password" class="form-control text-center my-3 font-weight-bold" name="password" style="color:#ed292c" placeholder="NOM D'UTILISATEUR">
                    </div>


                    @if(session()->get("error")==1)

                    <div class="font-weight-bold text-color-380" style="color:#ed292c">

                        LES INFORMATIONS SONT INCORRECTS

                    </div>

                    @endif

                    <div class="mt-5">
                        <button class="btn btn-danger btn-icons btn-rounded">
                            <i class="mdi mdi-check"></i>
                        </button>
                    </div>



                </form>

            </div>

        </div>

    </body>

</html>                    {{dd(Session::has("errorr"))}}
