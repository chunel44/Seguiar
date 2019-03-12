@extends('layouts.backend.app')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
        <form action="{{ route('admin.post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-content">
                            <h4 class="card-title">Nuevo Post</h4>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="title" class="form-control" name="title" value="{{ $post->name }}">
                                    <label class="form-label">Titulo</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="excerpt" class="form-control" name="excerpt" value="{{ $post->excerpt }}">
                                    <label class="form-label">Extracto</label>
                                </div>
                            </div>


                            <div style="display: block;" class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="{{ asset('post/'.$post->file) }}">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                <div>
                                    <span class="btn btn-round btn-primary btn-file">
                                        <span class="fileinput-new">Add Photo</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="hidden">
                                        <input type="file" name="image" id="image" aria-describedby="fileHelp">
                                        <div class="ripple-container"></div>
                                    </span>
                                    <a href="" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>

                            <div style="text-align: center;" class="form-group">
                                <input type="checkbox" id="publish" class="filled-in" name="status" value="1" {{ $post->status == 'PUBLISHED' ? 'checked' : '' }}>
                                <label for="publish">Publish</label>
                            </div>

                            <a style="position: relative;float: left;" class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.category.index') }}">BACK</a>
                            <button style="position: relative;float: right;" type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-content">
                            <h4 class="card-title">Body</h4>
                            <textarea id="tinymce" name="body">{{ $post->body }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('js')
    <!-- TinyMCE -->
    <script src="{{ asset('admin/js/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <script src='{{asset('admin/js/plugins/tinymce/tinymce.js')}}'></script>
    <script>
        $(function () {
            //TinyMCE
            tinymce.suffix = ".min";
            tinyMCE.baseURL = "{{asset('admin/js/plugins/tinymce')}}";
            tinymce.init({
                selector: "textarea#tinymce",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],

                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true,
                formats: {
                    aligncenter: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', styles: { display: 'block', margin: '0px auto', textAlign: 'center' } },
                },
                relative_urls: false,
                file_browser_callback : function(field_name, url, type, win) {
                    let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                    let y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                    let cmsURL = '/laravel-filemanager?field_name=' + field_name;
                    if (type == 'image') {
                        cmsURL = cmsURL + "&type=Images";
                    } else {
                        cmsURL = cmsURL + "&type=Files";
                    }

                    tinyMCE.activeEditor.windowManager.open({
                        file : cmsURL,
                        title : 'Ahuehuete',
                        width : x * 0.8,
                        height : y * 0.8,
                        resizable : "yes",
                        close_previous : "no"
                    });
                }
            });

        });
    </script>
@endpush
