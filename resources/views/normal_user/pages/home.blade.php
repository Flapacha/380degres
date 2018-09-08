@extends("normal_user.template.template")

@section("custom_header_content")

    <div class="home-slider remaining-flex-height position-relative">

        <div class="title">

            <div  class="w-75 m-auto position-relative px-3 py-3 text-white display-3">


                <h1>

                    L'<span class="text-color-380">ESCROQUERIE</span> DU RESEAU DE <span class="text-color-380">MARKETING</span> - ENQUETE AU COEUR DE LA <span class="text-color-380">SUPERCHERIE</span>

                </h1>

                <div class="bar bg-white my-3">

                </div>

                <div class="h5 mt-5">

                    <div class="d-lg-inline-block font-weight-bold h4">
                        Aujourd'hui
                    </div>

                    <div class=" float-right">



                        par <span class="font-weight-bold h3 text-color-380">{{ $lastArticle->author->nom }}</span>
                    </div>

                </div>

            </div>


        </div>

        <a class="d-block" href="#">

            <img src="{{ $lastArticle->headerImage->path }}" width="100%" alt="">


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

                <div class="row">

                    @php $i=0; @endphp

                    @foreach($autreArticles as $article)

                    <div class="col-lg-4 col-xs-12 mt-md-3 mt-3  @if(($i%1)==0) offset-lg-1 @endif border-dark article-preview text-center">

                        <div class="box-shadow">

                            <a href="/article/{{ $article->id }}/{{ $article->title }}">

                                <img src="{{ $article->headerImage->path  }}" width="264px" height="164px"  alt="">

                                <div class="text-center px-lg-4 py-lg-4 px-1 py-2 description">

                                    <div class="text-left ml-3 mb-3 px-1 py-1 h4 avenir-light text-color-380 author">
                                        {{ $article->author->nom." ".$article->author->prenoms }}
                                    </div>

                                    <div class="m-auto w-75 bar my-3"></div>

                                    <h3 class="h5 titre avenir-light mt-2">{{ $article->title }}</h3>


                                    <div class="d-none text-left mx-3 my-3 font-weight-bold text-color-380 ">
                                        Marketing de reseau
                                    </div>

                                    <div class="">

                                        <div class="d-inline-block w-50 bar"></div><div class="d-inline-block w-50">Aujourd'hui à 22:30</div>
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

                    @php $i++; @endphp

                    @endforeach


                    <div class="row col-lg-12 my-5">

                        <div class="col-md-12">

                            <div class="px-4 py-4 bg-dark">


                                <div class="h5 text-white mb-5">
                                    ACTUALITÉS
                                </div>

                                <div class="row">

                                    @foreach($actualites as $actualite)

                                    <a href="{{ route("articleDetail", ["articleID"=>$actualite->id,"articleTitre"=>$actualite->title]) }}" class="col-4 mt-3 actualite-item">

                                        <div class="article-image">
{{--                                            <img src="{{ $actualite->headerImage->path  }}" width="100%" alt="">--}}
                                            <img src="{{ $article->headerImage->path }}" width="100%" alt="">
                                        </div>

                                        <div class="bg-white text-black-50 content">

                                            <div class="h4 avenir-light px-3 py-3">
                                                {{ $actualite->title }}
                                            </div>

                                            <div class="text-center h5 avenir-light px-2 py-2">
                                                {{ $actualite->sous_title }}
                                            </div>

                                            <div class=" px-3 py-3 text-right">
                                                par <span class="text-color-380 font-weight-bold">{{ $article->author->nom." ".$article->author->prenom }}</span>
                                            </div>

                                            <div class="avenir-light  px-3 py-3 font-weight-bold">
                                                Le {{ $article->created_at->format("d/m/Y") }}
                                            </div>

                                        </div>

                                    </a>

                                    @endforeach

                                </div>

                            </div>

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

            <div class="col-lg-3 col-12">

                <div class="row">

                    <div class="col-12 o-rubrique">

                        <div class="head text-center px-3 py-3">
                            VOIR AUSSI
                        </div>

                        <div class="content px-3 py-3">

                            @foreach($rubrique4 as $r4)

                            <a href="#" class="py-3 border-bottom border-dark item">

                                    <div class="h4 avenir-light text-color-380">
                                        {{--{{ $r4->title  }}--}}
                                        {{ $r4->title }}
                                    </div>

                                    <div class="avenir-light mini-description">
                                        {{--{{ $r4->sous_title  }}--}}
                                        {!! $r4->sous_title !!}
                                    </div>

                                </a>

                            @endforeach

                        </div>

                    </div>

                    <form method="post" action="{{ route('actionAbonnement') }}" class="col-12 left-abonnement box-shadow mt-4 d-md-none d-lg-block">

                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div>

                            <div class="head text-center px-3 py-3 mt-3 avenir-light">
                                ABONNEMENT
                            </div>

                            <div class="content px-3 py-3">

                                <form action="#" class="form-group">

                                    <label for="" class="text-center text-white font-weight-bold">ABONNEZ VOUS A NOTRE NEWSLETTER</label>
                                    <input type="text" class="form-control" datatype="email" placeholder="adresse@email.com" name="email">

                                    <button class="btn avenir-light form-control my-4">

                                        <span>S'ABONNER</span>
                                        <i class="glyph-icon glyphicon-save"></i>

                                    </button>

                                </form>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

        <div class="row bottom-newsletter px-1 py-5 px-lg-5 py-lg-5">

            <div class="col-12 text-center h2 font-ubuntu text-white">

                ABONNEZ VOUS A NOTRE NEWSLETTER

            </div>


            <p class="font-roboto-mono w-100 d-block text-center text-white">
                Abonnez nous a notre newsletter et restez informez de nos dernieres actualités & articles
            </p>

            <div class="col-12">

                <form action="">

                    <input type="text" class="d-block w-75 px-3 py-2 border-0 h3 text-center mx-auto mt-4 avenir-light" placeholder="adresse@email.com">


                    <button class="mt-4 font-weight-bold d-block mx-auto  py-2 px-5 avenir-light radius-1 newsletter-submit-button">
                        S'INSCRIRE
                    </button>

                </form>

            </div>

        </div>

    </div>

@endsection