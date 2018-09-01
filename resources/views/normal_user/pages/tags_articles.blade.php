@extends("normal_user.template.template")

@section("content")




    <div class="container-fluid">

        <div class="row">

            <div class="col-sm-2 position-fixed">

                <div class="card">

                    <div class="card-body">

                        <div class="h3 font-weight-bold text-color-380 avenir-light">
                            Hashtag
                        </div>

                        <div class="avenir-light h4 font-weight-bold text-right">
                            #{{ $tag->libelle }}
                        </div>

                    </div>

                </div>

            </div>




            <div class="col-8 offset-2">

                @foreach($tags as $tag)


                    <a href="{{ route("articleDetail",["articleID"=>$tag->article->id,"articleTitle"=>$tag->article->title]) }}" class="row my-3 avenir-light">

                        <div class="w-100">

                            <div class="card">

                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-3">
                                            <img src="{{ $tag->article->headerImage->path }}" width="100%" alt="">
                                        </div>

                                        <div class="col-9">

                                            <div class="px-3  h1 text-color-380 font-weight-bold">

                                                {{ $tag->article->title }}

                                            </div>

                                            <div class="px-5 h4 text-dark">

                                                {{ $tag->article->sous_title }}

                                            </div>

                                        </div>

                                        <div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </a>

                @endforeach

            </div>



            <div class="col-sm-2">

                <div class="card">

                    <div class="card-body">

                        <div class="h3 font-weight-bold text-color-380 avenir-light">
                            Autres
                        </div>

                        @foreach($otherTags as $otherTag)

                            <a href="{{ route("tagList",["tag"=>$otherTag->id]) }}" class="avenir-light h4 font-weight-bold text-center text-primary d-block py-3 border-bottom px-3">
                                #{{ $otherTag->libelle }}
                            </a>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>


    </div>

@endsection