@extends("normal_user.template.template_2")

@section("custom_header_content")

    <div class="home-slider remaining-flex-height position-relative">

        <div class="title">

            <a href="{{ route("articleDetail",["articleID"=>$lastArticle->id]) }}"  class="w-75 m-auto position-relative px-3 py-3 text-white display-3">


                <h1>

                    {{--L'<span class="text-color-380">ESCROQUERIE</span> DU RESEAU DE <span class="text-color-380">MARKETING</span> - ENQUETE AU COEUR DE LA <span class="text-color-380">SUPERCHERIE</span>--}}

                    {{ $lastArticle->title }}

                </h1>

                <div class="bar bg-white my-3">

                </div>

                <div class="h5 mt-5">

                    <div class="d-lg-inline-block font-weight-bold h4">
                        {{ $lastArticle->created_at->format("d/m/Y") }}
                    </div>

                    <div class=" float-right">



                        par <span class="font-weight-bold h3 text-color-380">{{ $lastArticle->author->nom }}</span>
                    </div>

                </div>

            </a>


        </div>

        <a class="d-block" href="#">

            <img src="/{{ $lastArticle->headerImage->path }}" width="100%" alt="">


            <div class="slider-info px-5">

                <div class="row py-5 px-5 d-none d-md-flex">

                    <div class="col-2 date text-white">
                        {{ $lastArticle->created_at->format("d/m/Y \à h:i") }}
                    </div>

                    <div class="col-10">

                        <div class="row w-100">

                        <div class="col-10 text-right">

                            <div class="h1 text-white"> {{ $lastArticle->title }} </div>
                            <div class="h4 text-white">{{ $lastArticle->author->nom." ".$lastArticle->author->prenoms }}</div>

                        </div>

                        <div class="col-2 author-icon">
                            <img src="/images/pp.jpg" width="100%" alt="">
                        </div>

                        </div>



                    </div>


                </div>

            </div>

        </a>
        
    </div>

@endsection

@section("content")

    <div class="container-fluid mt-3">

        <div class="row">

            <div class="col-xs-12 col-lg-9 px-lg-5">

                <div>

                    <div class="text-color-380 display-3">A L'ASSAUT DU MARKETING ET DE LA COMMUNICATION</div>

                    <div class="my-4">

                        Ce blog est un blog professionnel de Marketing et de communication et par moment de management.

                        Il cible le grand public et principalement les clients de ces services.

                        Il sera un des moyens promotionnel de 380° grâce à des liens hypertextes dans les articles qui renverront vers le
                        web site

                    </div>


                </div>

            </div>

            <div class="col-lg-12 col-12">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="row">

                            @php $i=0; @endphp

                            <div class="col-lg-4 col-xs-12 mt-md-3 border-dark article-preview text-center">

                                <div class="box-shadow  h-100  description">

                                    <a href="{{ route("articleDetail",["articleID"=>$rubrique2Home->id]) }}">

                                        <img src="/images/slider-item.jpg" width="100%"   alt="">




                                        <div class="text-center px-lg-4 py-lg-4 px-1 py-2">

                                            <div class="m-auto w-75 bar my-3"></div>


                                            <h3 class="h5 titre avenir-light my-4 ">{{ $rubrique2Home->title }}LE MARKETING POUR LES NULLES DE CHEZ NULL</h3>

                                            <div class="m-auto w-75 bar my-3"></div>


                                            <div class="text-left ml-3 mb-3 my-2 px-1 py-1 h4 avenir-light text-color-380 author">
                                                {{ $rubrique2Home->author->nom." ".$rubrique2Home->author->prenoms }}
                                            </div>


                                            <div class="d-none text-left mx-3 my-3 font-weight-bold text-color-380 ">
                                                Marketing de reseau
                                            </div>

                                            <div class="">

                                                <div class="d-inline-block w-50 bar"></div><div class="d-inline-block w-50">{{ $rubrique2Home->created_at->format("d/m/Y à h:m")  }}</div>
                                            </div>


                                            {{--<p>--}}
                                            {{--DESCRIPTION DE L'ARTICLE LIMITE A QUELQUES CARACTERES--}}
                                            {{--DESCRIPTION DE L'ARTICLE LIMITE A QUELQUES CARACTERES--}}
                                            {{--DESCRIPTION DE L'ARTICLE LIMITE A QUELQUES CARACTERES--}}
                                            {{--</p>--}}

                                        </div>

                                    </a>

                                </div>


                            </div>


                            <div class="col-lg-4  col-xs-12 mt-md-3 border-dark article-preview text-center ">

                                <div class="box-shadow h-100  description">

                                    <a href="{{ route("articleDetail",["articleID"=>$rubrique3Home->id]) }}">

                                        <img src="/images/slider-item.jpg" width="100%"   alt="">

                                        <div class="text-center px-lg-4 py-lg-4 px-1 py-2">

                                            <div class="m-auto w-75 bar my-3"></div>


                                            <h3 class="h5 titre avenir-light my-4 ">{{ $rubrique3Home->title }}LE MARKETING POUR LES NULLES DE CHEZ NULL</h3>

                                            <div class="m-auto w-75 bar my-3"></div>


                                            <div class="text-left ml-3 mb-3 my-2 px-1 py-1 h4 avenir-light text-color-380 author">
                                                {{ $rubrique3Home->author->nom." ".$rubrique3Home->author->prenoms }}
                                            </div>


                                            <div class="d-none text-left mx-3 my-3 font-weight-bold text-color-380 ">
                                                Marketing de reseau
                                            </div>

                                            <div class="">

                                                <div class="d-inline-block w-50 bar"></div><div class="d-inline-block w-50">{{ $rubrique3Home->created_at->format("d/m/Y à h:m")  }}</div>
                                            </div>


                                            {{--<p>--}}
                                            {{--DESCRIPTION DE L'ARTICLE LIMITE A QUELQUES CARACTERES--}}
                                            {{--DESCRIPTION DE L'ARTICLE LIMITE A QUELQUES CARACTERES--}}
                                            {{--DESCRIPTION DE L'ARTICLE LIMITE A QUELQUES CARACTERES--}}
                                            {{--</p>--}}

                                        </div>

                                    </a>

                                </div>


                            </div>


                            <div class="col-lg-4 col-xs-12 mt-md-3 border-dark article-preview text-center">

                                <div class="box-shadow  h-100  description">

                                    <a href="{{ route("articleDetail",["articleID"=>$rubrique4Home->id]) }}">

                                        <img src="/images/slider-item.jpg" width="100%"   alt="">

                                        <div class="text-center px-lg-4 py-lg-4 px-1 py-2">

                                            {{ $rubrique4Home->title }}

                                            <div class="d-none text-left mx-3 my-3 font-weight-bold text-color-380 ">
                                                Marketing de reseau
                                            </div>



                                            {{--<p>--}}
                                            {{--DESCRIPTION DE L'ARTICLE LIMITE A QUELQUES CARACTERES--}}
                                            {{--DESCRIPTION DE L'ARTICLE LIMITE A QUELQUES CARACTERES--}}
                                            {{--DESCRIPTION DE L'ARTICLE LIMITE A QUELQUES CARACTERES--}}
                                            {{--</p>--}}

                                        </div>

                                    </a>

                                </div>


                            </div>


                            {{--<div class="row col-lg-12 r-4">--}}

                            {{--<div class="col-lg-12 header">--}}

                            {{--<div class="px-4 py-4 text-white font-weight-bold">--}}
                            {{--VOIR AUSSI--}}
                            {{--</div>--}}

                            {{--<div class="card">--}}

                            {{--<div class="card-body">--}}

                            {{--<div class="row">--}}

                            {{--@for($i=0;$i<3;$i++)--}}

                            {{--<div class="col-12">--}}

                            {{--<div>--}}
                            {{--titre de l'actualité--}}
                            {{--</div>--}}

                            {{--<div class="row">--}}

                            {{--<div class="col-2">--}}

                            {{--<img src="/images/dogba.jpg" class="w-100" alt="">--}}

                            {{--</div>--}}

                            {{--<div class="col-10">--}}

                            {{--PATITE DESCRIPTION DE L'ARTISTE QUI SUIT--}}
                            {{--PATITE DESCRIPTION DE L'ARTISTE QUI SUIT--}}
                            {{--PATITE DESCRIPTION DE L'ARTISTE QUI SUIT--}}
                            {{--PATITE DESCRIPTION DE L'ARTISTE QUI SUIT--}}
                            {{--PATITE DESCRIPTION DE L'ARTISTE QUI SUIT--}}
                            {{--PATITE DESCRIPTION DE L'ARTISTE QUI SUIT--}}
                            {{--PATITE DESCRIPTION DE L'ARTISTE QUI SUIT--}}
                            {{--PATITE DESCRIPTION DE L'ARTISTE QUI SUIT--}}
                            {{--PATITE DESCRIPTION DE L'ARTISTE QUI SUIT--}}

                            {{--</div>--}}

                            {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="bar w-100 mx-4 my-4"></div>--}}

                            {{--@endfor--}}

                            {{--</div>--}}

                            {{--</div>--}}

                            {{--</div>--}}


                            {{--</div>--}}


                            {{--</div>--}}


                        </div>





                    </div>

                    <div class="col-lg-9">

                        <div class="row">



                        </div>

                    </div>

                </div>



            </div>

        </div>

        <div class="row bottom-newslfetter mt-3 background-color-380 px-1 py-2 px-lg-5 py-lg-2">

            <div class="col-12 text-center h2 font-ubuntu text-white">

                ABONNEZ VOUS A NOTRE NEWSLETTER

            </div>


            <p class="font-roboto-mono w-100 d-block text-center text-white">
                Abonnez vous à notre newsletter et recevez vos articles préférés dès leurs publications
            </p>

            <div class="col-12">

                <form action="{{ route("actionAbonnement") }}" method="post">


                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text"  datatype="email" placeholder="adresse@email.com" name="email" required class="d-block w-75 px-3 py-2 border-0 h3 text-center mx-auto mt-4 avenir-light" placeholder="adresse@email.com">


                    <button class="mt-4 font-weight-bold d-block mx-auto  py-2 px-5 avenir-light radius-1 newsletter-submit-button">
                        S'INSCRIRE
                    </button>

                </form>

            </div>

        </div>

    </div>

@endsection