<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>CannonFoam | Admin Panel</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('public/admin/favicon.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('public/admin/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('public/admin/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('public/admin/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{asset('public/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="{{asset('public/admin/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css')}}" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="{{asset('public/admin/plugins/waitme/waitMe.css')}}" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="{{asset('public/admin/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('public/admin/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('public/admin/css/themes/all-themes.css')}}" rel="stylesheet" />

    <!-- Image Upload and Preview Css -->
    <link href="{{asset('public/admin/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />
    <style>
        .custom-file-container__image-preview {
            box-sizing: border-box;
            transition: all 0.2s ease;
            margin-top: 30px;
            margin-bottom: 30px;
            height: 100px;
            width: 100%;
            border-radius: 4px;
            background-size: contain;
            background-position: center center;
            background-repeat: no-repeat;
            background-color: #fff;
            overflow: auto;
            padding: 10px;
        }
    </style>
</head>

<body class="theme-indigo">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    @include('admin.layout.top-bar')
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        @include('admin.layout.left-sidebar')
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        @include('admin.layout.right-sidebar')
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>LOGO SETTING</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="" style="margin-bottom: 20px;">
                            @include('admin.layout.messages')
                        </div>
                    </div>
                </div>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Theme Settings
                                <small>Logo Setting</small>
                            </h2>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#imageLogo" data-toggle="tab">Image Logo</a></li>
                                <!--<li role="presentation"><a href="#textLogo" data-toggle="tab">Text Logo</a></li>-->
                            </ul>

                            <!-- Tab panes -->
                            <form action="{{ route('ds.theme-setting.logo-setting-action') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="imageLogo" style="margin-top: 20px;">
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <div class="custom-file-container" data-upload-id="hd_logo">
                                                            <label style="color: #555;">Website Image Logo:<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"></a></label>
                                                            <label class="custom-file-container__custom-file" >
                                                                <input type="file" name="hd_logo" class="custom-file-container__custom-file__custom-file-input">
                                                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                            </label>
                                                            <div class="custom-file-container__image-preview"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <label for="hd_txt_logo">Logo:</label>
                                                        <img src="{{ asset('public/theme').'/'.$row->hd_img_logo }}" alt="No Logo Uploaded" class="form-control" style="width:130px;">
                                                        @if($row->hd_img_logo) 
                                                            <a href="{{ route('ds.theme-settings.remove-logo') }}">Remove logo</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div role="tabpanel" class="tab-pane fade" id="textLogo" style="margin-top: 20px;">-->
                                    <!--    <div class="row clearfix">-->
                                    <!--        <div class="col-sm-6">-->
                                    <!--            <div class="form-group">-->
                                    <!--                <div class="form-line">-->
                                    <!--                    <label for="hd_txt_logo">Website Text Logo:</label>-->
                                    <!--                    <input type="text" value="{{ $row->hd_txt_logo }}" name="hd_txt_logo" class="form-control" placeholder="Website Text Logo"/>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="col-sm-6">-->
                                    <!--            <div class="form-group">-->
                                    <!--                <div class="form-line">-->
                                    <!--                    <label for="hd_txt_logo_tagline">Website Text Logo Tagline:</label>-->
                                    <!--                    <input type="text" value="{{ $row->hd_txt_logo_tagline }}" name="hd_txt_logo_tagline" class="form-control" placeholder="Website Text Logo Tagline"/>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="{{asset('public/admin/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('public/admin/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{asset('public/admin/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('public/admin/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('public/admin/plugins/node-waves/waves.js')}}"></script>

    <!-- Autosize Plugin Js -->
    <script src="{{asset('public/admin/plugins/autosize/autosize.js')}}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{asset('public/admin/plugins/momentjs/moment.js')}}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{asset('public/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="{{asset('public/admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('public/admin/js/admin.js')}}"></script>
    <script src="{{asset('public/admin/js/pages/forms/basic-form-elements.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('public/admin/js/demo.js')}}"></script>

    <!-- Image upload and preview Js -->
    <script src="{{asset('public/admin/plugins/file-upload/file-upload-with-preview.min.js')}}"></script>
    <script>
        var hd_logo = new FileUploadWithPreview('hd_logo')
    </script>
</body>
</html>
