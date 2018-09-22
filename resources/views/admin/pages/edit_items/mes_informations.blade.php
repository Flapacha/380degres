@extends("admin.template.template")


@section("custom_head")


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.js"></script>

@endsection

@section("content")
    <script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>

    <form method="post" action="" class="container" enctype="multipart/form-data" >

        <input type="hidden" value="{{ csrf_token() }}" name="_token">

        <div class="row">

            <div class="col-12">

                <div class="cool-linear-gradient text-white font-weight-bold py-3 px-3">

                    MODIFICATION DE MES INFORMATIONS

                </div>

                <div class="card shadow">

                    <div class="card-body">

                        <div>

                            <div class="form-group">
                                <label for="titre" class="font-weight-bold fpr">NOM</label>
                                <input type="text" class="form-control" placeholder="Votre nom" value="{{ $admin->nom }}">
                            </div>

                            <div class="form-group">
                                <label for="sous-titre" class="font-weight-bold">PRENOMS</label>
                                <input type="text" id="sous-titre" name="sousTitre" value="{{$admin->prenoms}}" placeholder="Sous titre de l'article" class="form-control">
                            </div>

                            <div class="form-group">

                                <label for="sous-titre" class="font-weight-bold">BIOGRAPHIE</label>

                                <textarea class="form-control" name="biographie" id="" cols="30" rows="10" placeholder="biographie">{{ $admin->biographie }}</textarea>

                            </div>

                            <div>

                                <label for="sous-titre" class="font-weight-bold">PHOTO</label>


                                            <div class="container">

                                                <div class="row">

                                                    <div class="col-3">

                                                        <img src="/{{ $admin->pp->path }}" width="100%" alt="">

                                                    </div>

                                                    <div class="col-3">

                                                        <button class="form-control btn btn-warning font-weight-bold text-white">

                                                            MODIFIER

                                                        </button>

                                                    </div>

                                                    <div class="col-3">

                                                        <button class="form-control btn btn-warning font-weight-bold text-white">

                                                            NOUVEAU

                                                        </button>

                                                    </div>

                                                </div>

                                            </div>


                                    </div>
                                    
                                </div>

                            </div>

                            <div class="text-right">
                                <button class="btn btn-outline-warning px-5 font-weight-bold">
                                    ENREGISTRER<i class="glyphicon glyphicon-check"></i>
                                </button>
                            </div>


                        </div>



                    </div>

                </div>

            </div>
        </div>


    </form>


    {{--<script type="text/javascript">--}}


    {{--tinyMCE.baseURL ='/js/tinymce';--}}
    {{--tinymce.init({--}}
    {{--selector: "#article-content",--}}
    {{--theme: "modern",--}}
    {{--skin: "custom",--}}
    {{--language : 'fr_FR',--}}
    {{--plugins: [--}}
    {{--"advlist autolink lists link image charmap print hr anchor pagebreak",--}}
    {{--"searchreplace visualblocks visualchars code fullscreen",--}}
    {{--"insertdatetime media nonbreaking save table contextmenu directionality",--}}
    {{--"emoticons template paste textcolor responsivefilemanager "--}}
    {{--],--}}
    {{--toolbar1: "insertfile undo redo | template | code | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link unlink anchor | image | media | youTube | forecolor backcolor | formatselect | fullscreen | fontselect  |  styleselect | fontsizeselect |  searchreplace |code | removeformat | responsivefilemanager ",--}}
    {{--image_advtab: true,--}}

    {{--//            external_filemanager_path:"https://gicop.ci//responsivefilemanager/",--}}
    {{--external_filemanager_path:"/upload/files",--}}
    {{--filemanager_title:"Gestionnaire de Fichiers" ,--}}
    {{--//            external_plugins: { "filemanager" : "/js/tinymce/plugins/responsivefilemanager/plugin.min.js"},--}}
    {{--external_plugins: { "filemanager" : "/js/tinymce/plugins/responsivefilemanager/plugin.min.js"},--}}

    {{--menubar: false,--}}
    {{--toolbar_items_size: 'small',--}}
    {{--convert_urls: false,--}}
    {{--//file_browser_callback: fileBrowser--}}
    {{--});--}}



    {{--</script>--}}


    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>

        $('.pp').croppie({

            url: "/{{ $admin->pp->path }}",

            viewport: {
                width: 256,
                height: 256,
                type: 'circle'
            },
            boundary: {
                width: "100%",
                height: 300
            },

            enableResize: false

        });

    </script>

    {{--    <textarea name="content" class="form-control my-editor">{!! old('content', $content) !!}</textarea>--}}

@endsection