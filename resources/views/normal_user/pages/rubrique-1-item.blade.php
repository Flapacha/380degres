@extends("normal_user.template.template")

@section("custom_head")

    <meta property="og:url"  content="{{ Request::url() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title"  content="380 Degrés Blog - {{$article->title}}" />
    <meta property="og:description"   content="{{$article->sous_title}}" />
    <meta property="og:image"         content="{{ url("/").$article->headerImage->path }}" />
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="200">

    <title>380 Degrés - {{ $article->title }}</title>

@endsection

@section("custom_header_content")
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.1&appId=695464670813834&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <div class="container-fluid px-5">

        <div class="row">

            <div class="col-12">


                <div class="py-5">


                    <div class="font-weight-bold my-3 text-color-380">

                        {{ $article->categorie->libelle }}

                    </div>

                    <div class="display-3 vertical-center">
                        {{ $article->title }}
                    </div>


                </div>

            </div>

            <div class="col-lg-12 pt-5">

                <div class="d-inline-block w-lg-66">


                        <div>

                            <span class="avenir-light font-weight-bold h5 px-5">
                                vous avez aimez l'article ? partagez avec vos amis
                            </span>

                            {{--<span class="share-icon rounded-circle background-fb text-white">--}}
                                {{--<i class="fab fa-facebook-f"></i>--}}
                            {{--</span>--}}


                            {{--<span class="share-icon rounded-circle background-twitter text-white">--}}
                                {{--<i class="fab fa-twitter"></i>--}}
                            {{--</span>--}}

                            {{--<span class="share-icon rounded-circle background-google-plus text-white">--}}
                                {{--<i class="fab fa-google-plus-g"></i>--}}
                            {{--</span>--}}

                            <div class="fb-like" data-href="{{ Request::url() }}" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>

                            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">
                                Tweet <i class="mdi mdi-check"></i>
                            </a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                        </div>

                        <div class="avenir-light h5 px-5 font-weight-bold py-3">

                            @foreach($article->articleTags as $articleTag)

                                <a href="{{ route("tagList",["tag"=>$articleTag->tag->id]) }}">#{{ $articleTag->tag->libelle }}</a>
                                
                            @endforeach    
                                
                        </div>

                </div>

            </div>

            
            <div class="col-lg-12 pb-5">

                <div class="d-inline-block w-lg-66  vertical-align-center">
                    <div class="bar"></div>
                </div>

                <div class="d-inline-block w-lg-33  vertical-align-middle">

                    <div class="h5 author-icon avenir-light text-center">
                        <span class="avenir-light">PAR</span>  <a href="{{ route("authorDetailAndArticle",["authorName"=>$article->author->nom,"authorID"=>$article->author->id]) }}" class="font-weight-bold">{{ $article->author->nom }} {{ $article->author->prenoms }}</a>
                        {{--<img src="/images/pp.jpg" class="" alt="">--}}
                    </div>

                </div>

            </div>

            {{--<div class="col-lg-12 h5 font-italic">--}}
            {{--Le 15/12/2017--}}
            {{--</div>--}}

        </div>


    </div>

@endsection

@section("content")

    <div class="container-fluid px-5">


        <div class="col-lg-12">

            <img src="{{$article->headerImage->path}}" width="100%" height="400px" alt="">

        </div>

        <div class="col-lg-12 py-md-5 px-md-5 mb-md-3 avenir-light">

            {!! htmlspecialchars_decode($article->article_content)  !!}

            @for($i=0;$i<0;$i++)

                Momo

            @endfor

        </div>

        <div class="col-12">

            <div class="h4 background-color-380 d-inline-block px-lg-5 py-lg-3">
                A VOIR AUSSI
            </div>

            <div class="row">

                @foreach($voirAussis as $voirAussi)

                    <a href="{{ route("articleDetail",["articleID"=>$article->id,"articleTitle"=>$article->title]) }}" class=" col-6 row my-3">

                        <div class="col-6">

                            <div>
                                <img src="{{ $article->headerImage->path }}" width="100%" alt="">
                            </div>

                        </div>

                        <div class="col-4 background-color-380 text-white">

                            <div class="text-center px-4 py-4 display-3">
                                {{ $article->title }}
                            </div>

                            <div class="text-center px-4 py-4 h5">
                                {{ $article->sous_title }}
                            </div>

                            <div class="font-weight-bold text-right avenir-light py-2">
                                {{ $article->created_at->format("d/m/Y") }}
                            </div>

                        </div>

                    </a>

                @endforeach

        </div>
        </div>

        <div>

            <div class="text-center my-5">

                <div class="display-4 text-left">
                    COMMENTAIRES
                </div>

                <div class="bar my-4">

                </div>

                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.1&appId=695464670813834&autoLogAppEvents=1';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>


                <div class="fb-comments m-auto" data-href="https://blog.380degre.com/{{ route("articleDetail",["articleID"=>$article->id,"articleTitle"=>$article->title]) }}" data-numposts="9"></div>
            </div>
        </div>

    </div>

@endsection
