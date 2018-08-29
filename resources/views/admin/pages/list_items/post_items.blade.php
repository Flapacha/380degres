@extends("admin.template.template")


@section("content")

    <div class="container-fluid">

        <div class="col-12">

            <div class="card">

                <div class="card-body">

                    <div class="h5">
                        LISTE DES ARTICLES

                        <a href="{{ route("adminNewPost") }}">

                            <button class="btn btn-outline-success float-right">
                                NOUVEAU <i class="mdi mdi-plus"></i>
                            </button>

                        </a>

                    </div>

                    <div class="row 2 mt-5">

                        <div class="col-10">

                            <input type="text" class="form-control" placeholder="TITRE , CONTENUE DE L'ARTICLE">

                        </div>

                        <div class="col-2">

                            <button class="btn btn-outline-primary form-control">
                                RECHERCHER
                            </button>

                        </div>

                    </div>

                    <div class="mt-5">

                        <table class="table">

                            <thead>

                                <th>
                                    TITRE
                                </th>

                                <th>
                                    AUTEUR
                                </th>

                                <th>
                                    CATEGORIE
                                </th>

                                <th>
                                    VUE
                                </th>

                                <th>
                                    DATE
                                </th>

                                <th class="text-center">
                                    ACTION
                                </th>

                            </thead>

                            <tbody>

                                @foreach($articles as $article)

                                    <tr class="py-4">

                                        <td class="font-weight-bold">
                                            {{$article->title}}
                                        </td>

                                        <td>
                                            {{$article->author->prenoms}}
                                        </td>

                                        <td>
                                            {{$article->categorie->libelle}}
                                        </td>

                                        <td>
                                            15
                                        </td>

                                        <td>
                                            {{ $article->created_at->format("d-m-Y") }}
                                        </td>

                                        <td  class="text-center">

                                            <div>

                                                <button class="btn btn-icon btn-info text-white">
                                                    <i class="mdi mdi-pencil"></i>
                                                </button>
                                                <button class="btn btn-icon btn-danger text-white">
                                                    <i class="mdi mdi-close"></i>
                                                </button>

                                            </div>

                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                    <div class="float-right px-5 py-5">
                        {{$articles->links()}}
                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection