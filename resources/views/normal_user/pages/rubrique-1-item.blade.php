@extends("normal_user.template.template")

@section("custom_header_content")


    <div class="container">

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

                            <span class="avenir-light">
                                VOUS AVEZ AIMÉ L'ARTICLE ? PARTAGEZ AVEC VOS AMIS
                            </span>

                            <span class="share-icon rounded-circle background-fb text-white">
                                {{--<i class="fab fa-facebook-f"></i>--}}
                            </span>


                            <span class="share-icon rounded-circle background-twitter text-white">
                                {{--<i class="fab fa-twitter"></i>--}}
                            </span>

                            <span class="share-icon rounded-circle background-google-plus text-white">
                                {{--<i class="fab fa-google-plus-g"></i>--}}
                            </span>


                        </div>


                </div>

            </div>

            
            <div class="col-lg-12 pb-5">

                <div class="d-inline-block w-lg-66  vertical-align-center">
                    <div class="bar"></div>
                </div>

                <div class="d-inline-block w-lg-33  vertical-align-middle">

                    <div class="h5 author-icon avenir-light text-center">
                        <span class="avenir-light">PAR</span>  <span class="font-weight-bold">{{ $article->author->nom }} {{ $article->author->prenoms }}</span>
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

    <div class="container">


        <div class="col-lg-9">

            <img src="/{{$article->headerImage->path}}" width="100%" height="400px" alt="">

        </div>

        <div class="col-lg-9 py-md-5">

            {!! htmlspecialchars_decode($article->article_content)  !!}

            @for($i=0;$i<0;$i++)

                Momo

            @endfor

        </div>

        <div class="col-12">

            <div class="h4 background-color-380 d-inline-block px-lg-5 py-lg-3">
                A VOIR AUSSI
            </div>

        </div>

    </div>

@endsection
