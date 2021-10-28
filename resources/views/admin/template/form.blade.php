@extends('admin.layout.master')
@section('title', 'Form page | Admin')
@section('breadcrumb')
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    <form role="search" class="sr-input-func">
                                        <input type="text" placeholder="Search..." class="search-int form-control">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Demo</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Form</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <link rel="stylesheet" href="/css/summernote/summernote.css">
@endsection
@section('content')
    <div class="basic-form-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline12-list">
                        <div class="sparkline12-hd">
                            <div class="main-sparkline12-hd">
                                <h1>Form</h1>
                            </div>
                        </div>
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="all-form-element-inner">
                                            <form action="/" name="demo-form" method="post">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">Username</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter username" name="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">Password</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter password" name="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">Description</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                            <textarea type="text" class="form-control" rows="7"
                                                                      placeholder="Enter description"
                                                                      name="description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">Cloudinary upload</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                            <div id="preview-img">

                                                            </div>
                                                            <input type="hidden" class="form-control"
                                                                   placeholder="Enter avatar"
                                                                   name="image">
                                                            <button class="btn btn-primary"
                                                                    type="button" id="thumbnail_upload_widget">Upload avatar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">Summernote</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                                <textarea name="detail"
                                                                          class="tinymce-single responsive-mg-b-30"
                                                                          id="summernote1">
                                                                </textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="login-btn-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3"></div>
                                                            <div class="col-lg-9">
                                                                <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                    <button class="btn btn-sm btn-primary login-submit-cs"
                                                                            type="submit">Save
                                                                    </button>
                                                                    <button class="btn btn-white" type="reset">Reset
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <!-- summernote JS
    ============================================ -->
    <script src="/js/summernote/summernote.min.js"></script>
    <script src="/js/summernote/summernote-active.js"></script>
    <script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>
    <script type="text/javascript">
        var myWidget = cloudinary.createUploadWidget(
            {
                cloudName: 'nmq126',
                uploadPreset: 'jkyvknsj'
            },
            function (error, result) {
                if (!error && result && result.event === "success") {
                    console.log('Done! Here is the image info: ', result.info.secure_url);
                    document.forms['template-form']['image'].value += result.info.secure_url + ',';
                    var imgTag = document.getElementById('preview-img');
                    imgTag.innerHTML += `<img style="width: 150px" src="${result.info.secure_url}" alt="" class="img-thumbnail mr-2">`;
                }
            }
        )
        document.getElementById("thumbnail_upload_widget").addEventListener("click", function () {
            myWidget.open();
        }, false);
    </script>

@endsection
