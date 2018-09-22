@extends("normal_user.template.template")

@section("content")


    <div class="container-fluid my-3 py-3">

        <div class="row">


            <div class=" col-3 h-100">

                <div class="background-color-380 px-5 py-5">

                    <div>

                        <img class="btn-icons btn-rounded" width="100%" src="/{{ $author->pp->path }}"/>

                    </div>

                    <div class="display-4">

                        <span class="font-weight-bold d-block">{{ $author->nom}}</span>
                        {{$author->prenoms }}

                    </div>

                    <div class="mce-i-pagebreak h2">

                        {{ $author->biographie }}

                    </div>

                </div>

            </div>
            <div class="col-9">

                <div class="">

                    <div class="display-4 text-center py-3">
                        ARTICLES POSTÉ PAR L'AUTEUR
                    </div>

                    <div class="px-5">

                        @foreach($articles as $article)

                            <a href="{{ route("articleDetail",["articleID"=>$article->id,"articleTitle"=>$article->title]) }}" class="my-2">

                                <div class=" display-4 sfont-weight-bold">

                                    {{ $article->title }}

                                </div>

                                <div class="px-5 py-2">

                                    {{ $article->sous_title }}

                                </div>

                            </a>

                            <div class="bar my-4"></div>

                        @endforeach

                    </div>

                    <div class="d-inline-block float-right">

                        {{ $articles->links() }}

                    </div>

                </div>

            </div>


        </div>


    </div>


@endsection