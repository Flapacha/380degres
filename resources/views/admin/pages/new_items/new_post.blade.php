@extends("admin.template.template")

@section("content")
    <script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>

    <form method="post" action="@if(!$edit) {{ route("actionNewArticle") }} @endif @if($edit) {{ route("actionEditArticle",["articleID"=>$article->id]) }} @endif" class="container" enctype="multipart/form-data" >

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
                                <input type="text" id="titre" name="titre" placeholder="Titre de l'article" value="{{$article->title}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="sous-titre" class="font-weight-bold">SOUS TITRE</label>
                                <input type="text" id="sous-titre" name="sousTitre" value="{{$article->sous_title}}" placeholder="Sous titre de l'article" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="sous-titre" class="font-weight-bold">CATEGORIE</label>
                                {{--<input type="text" id="sous-titre" placeholder="Sous titre de l'article" class="form-control">--}}

                                <select class="form-control avenir-light" name="categorie" id="">
                                    @foreach($categories as $categorie)

                                        <option value="{{ $categorie->id }}">{{$categorie->libelle}}</option>

                                    @endforeach
                                </select>

                            </div>

                            <div>

                                <label for="article_image_header">
                                    Choisissez une image comme header
                                </label>
                                <input type="file" class="d-block" id="article_image_header" name="article_image_header">

                            </div>


                            <div class="my-5">

                                <textarea id="article-content" class="" name="content">{{$article->article_content}}</textarea>

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
{{--    <textarea name="content" class="form-control my-editor">{!! old('content', $content) !!}</textarea>--}}
    <script>
        var editor_config = {
            path_absolute : "/upload/files",
            selector: "#article-content",
            theme: "modern",
                    skin: "custom",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

//                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                var cmsURL = editor_config.path_absolute + '?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>

@endsection