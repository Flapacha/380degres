@extends("normal_user.template.template")

@section("content")



    <form method="post" action="{{ route('actionFinishAbonnement') }}" class="container">

        <input type="hidden" name="email" value="{{ request("email") }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="col-8 offset-2">

            <div class="card my-4">

                <div class="card-body">

                    <div class="card-title  h6">
                        Choisissez les rubriques qui vous interessent
                    </div>

                    <div class="row">

                        @foreach($rubriques as $rubrique)

                            <div class="col-6 offset-3 text-center">

                                <input type="checkbox" name="rubriques[]" value="{{$rubrique->id}}" id="rubrique-{{ $rubrique->id }}">

                                <label for="rubrique-{{ $rubrique->id }}">

                                    {{ $rubrique->libelle }}

                                </label>

                            </div>

                        @endforeach

                        <div class="col-12">

                            <button class="btn btn-success avenir-light">
                                s'abonner
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </form>

@endsection