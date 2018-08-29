@extends("admin.template.template")

@section("content")
    <script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="cool-linear-gradient text-white font-weight-bold py-3 px-3">

                    NOUVEAU POST

                </div>

                <div class="card shadow">

                    <div class="card-body">

                        <div>

                            <div class="form-group">
                                <label for="titre" class="font-weight-bold">TITRE DE L'ARTICLE</label>
                                <input type="text" id="titre" placeholder="Titre de l'article" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="sous-titre" class="font-weight-bold">SOUS TITRE</label>
                                <input type="text" id="sous-titre" placeholder="Sous titre de l'article" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="sous-titre" class="font-weight-bold">CATEGORIE</label>
                                {{--<input type="text" id="sous-titre" placeholder="Sous titre de l'article" class="form-control">--}}

                                <select class="form-control avenir-light" name="" id="">
                                    @foreach($categories as $categorie)

                                        <option value="{{ $categorie->id }}">{{$categorie->libelle}}</option>

                                    @endforeach
                                </select>

                            </div>


                            <div>

                                <textarea id="article-content" class=""></textarea>

                            </div>

                            <div class="text-right">
                                <button class="btn btn-outline-warning px-5 font-weight-bold">
                                    ENREGISTRER L'ARTICLE<i class="glyphicon glyphicon-check"></i>
                                </button>
                            </div>

                        </div>



                    </div>

                </div>

            </div>
        </div>


    </div>


    <script type="text/javascript">


        tinyMCE.baseURL ='/js/tinymce';
        tinymce.init({
            selector: "#article-content",
            theme: "modern",
            skin: "custom",
            language : 'fr_FR',
            plugins: [
                "advlist autolink lists link image charmap print hr anchor pagebreak",
                "searchreplace visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor responsivefilemanager "
            ],
            toolbar1: "insertfile undo redo | template | code | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link unlink anchor | image | media | youTube | forecolor backcolor | formatselect | fullscreen | fontselect  |  styleselect | fontsizeselect |  searchreplace |code | removeformat | responsivefilemanager ",
            image_advtab: true,

//            external_filemanager_path:"https://gicop.ci//responsivefilemanager/",
            external_filemanager_path:"/articleimages",
            filemanager_title:"Gestionnaire de Fichiers" ,
//            external_plugins: { "filemanager" : "/js/tinymce/plugins/responsivefilemanager/plugin.min.js"},
            external_plugins: { "filemanager" : "/js/tinymce/plugins/responsivefilemanager/plugin.min.js"},

            menubar: false,
            toolbar_items_size: 'small',
            convert_urls: false,
            //file_browser_callback: fileBrowser
        });



    </script>

@endsection