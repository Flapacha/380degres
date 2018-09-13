@extends("normal_user.template.template")


@section("content")

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-9">

                <div class="row">

                    @foreach($articles as $article)

                    <div class="col-lg-4 col-xs-12 mt-md-3 mt-3   offset-lg-1  border-dark article-preview text-center">

                            <div class="box-shadow">

                                <a href="{{ route("articleDetail",["articleID"=>$article->id,"articleTitle"=>$article->title]) }}">

                                    <img src="/tests/abidjan.png" width="264px" height="164px" alt="">

                                    <div class="text-center px-lg-4 py-lg-4 px-1 py-2 description">

                                        <div class="text-left ml-3 mb-3 px-1 py-1 h4 avenir-light text-color-380 author">
                                            {{ $article->author->nom." ".$article->author->prenom }}
                                        </div>

                                        <div class="m-auto w-75 bar my-3"></div>

                                        <h3 class="h5 titre avenir-light mt-2">{{ $article->title }}</h3>


                                        <div class="d-none text-left mx-3 my-3 font-weight-bold text-color-380 ">
                                            {{ $article->sous_title }}
                                        </div>

                                        <div class="">

                                            <div class="d-inline-block w-50 bar"></div><div class="d-inline-block w-50">Aujourd'hui à 22:30</div>
                                        </div>








                                    </div>

                                </a>

                            </div>


                        </div>

                    @endforeach

                    <div class="mt-5 col-12">

                        <div class=" float-right">

                            {{ $articles->links() }}

                        </div>


                    </div>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="row">


                    <div class="col-12 left-abonnement box-shadow mt-4 d-md-none d-lg-block">

                        <div>

                            <div class="head text-center px-3 py-3 mt-3 avenir-light">
                                ABONNEMENT
                            </div>

                            <div class="content px-3 py-3">

                                <form action="{{ route("actionAbonnement") }}" method="post" class="form-group">

                                    <input type="hidden" value="{{ csrf_token() }}" name="_token">

                                    <label for="" class="text-center text-white font-weight-bold">ABONNEZ VOUS A NOTRE NEWSLETTER</label>
                                    <input type="text" class="form-control" datatype="email" placeholder="adresse@email.com" name="email" required>

                                    <button class="btn avenir-light form-control my-4">

                                        <span>S'ABONNER</span>
                                        <i class="glyph-icon glyphicon-save"></i>

                                    </button>

                                </form>

                            </div>

                        </div>


                    </div>

                    <div class="col-12 o-rubrique mt-4">

                        <div class="">

                            <div class="head text-center px-3 py-3">
                                VOIR AUSSI
                            </div>

                            <div class="content row px-3 py-3">

                                <div class="col-12">

                                    @foreach($voirAussis as $voirAussi)

                                        <a href="#" class="py-3 border-bottom border-dark item">

                                            <div class="h4 avenir-light text-color-380">

                                                {{ $voirAussi->title  }}

                                                {{--TITRE DE L'ARTICLE--}}
                                            </div>

                                            <div class="avenir-light mini-description">

                                                {{ $voirAussi->sous_title  }}

                                                {{--Lorem ipsum dolor sit amet, consectetur ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...--}}
                                            </div>

                                        </a>

                                    @endforeach

                                </div>


                            </div>

                        </div>


                    </div>

                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=695464670813834&autoLogAppEvents=1';
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                    <div class="col-12 mt-4 text-center">

                        <div class="fb-page w-100" data-href="https://www.facebook.com/agencebravo/"
                             data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/agencebravo/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/agencebravo/">Bravo</a></blockquote></div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection