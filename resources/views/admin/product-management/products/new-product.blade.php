<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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

    <!-- JQuery DataTable Css -->
    <link href="{{asset('public/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{asset('public/admin/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('public/admin/css/themes/all-themes.css')}}" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{asset('public/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="{{asset('public/admin/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css')}}" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="{{asset('public/admin/plugins/waitme/waitMe.css')}}" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="{{asset('public/admin/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

    <!-- Image Upload and Preview Css -->
    <link href="{{asset('public/admin/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
    <link href="{{asset('public/admin/plugins/multi-select/css/multi-select.css')}}" rel="stylesheet">
    
    {{-- <link rel="stylesheet" href="{{asset('public/admin/plugins/select2/select2.css')}}" /> --}}
    <style>
        .bootstrap-select{
            /* display: none; */
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
                <h2>NEW PRODUCT</h2>
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
            <form action="{{ route('ds.product-management.new-product-action') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Exportable Table -->
                <div class="row clearfix">
                    <!-- Left Content -->
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <!-- Product Basics -->
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>Product Basics</h2>
                                    </div>
                                    <div class="body">
                                        <div class="row clearfix">
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <label for="p_name">Product</label>
                                                        <input type="text" value="" name="p_name" class="form-control" placeholder="product name"/>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <label for="price">Price</label>
                                                        <input type="text" value="" name="price" class="form-control" placeholder="price"/>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <label for="sale_price">Sale Price</label>
                                                        <input type="number" value="" name="sale_price" class="form-control" placeholder="Sale price"/>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <label for="price">From</label>
                                                        <input type="date" name="from" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <label for="price">To</label>
                                                         <input type="date" name="to" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                           
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <label for="p_detail">Detail</label>
                                                        <textarea  name="p_detail" id="p_detail" class="form-control" cols="100" rows="5" placeholder="product detail"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #END# Product Basics -->

                        <!-- Product Data -->
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>Product Data</h2>
                                        {{-- <ul class="header-dropdown m-r--5" style="width:50%;">
                                            <select name="p_type" id="p_type" class="form-control">
                                                <option value="basic product">Simple Product</option>
                                                <option value="advance product">Variable Product</option>
                                            </select>
                                        </ul> --}}
                                    </div>
                                    <div class="body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                            <li role="presentation" class="active"><a href="#general" data-toggle="tab">General</a></li>
                                        </ul>
            
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="general">
                                                <div class="row">
                                                    <a   data-id="" href="#" class="btn btn-primary editCoupon"><i  class="material-icons" data-toggle="modal"   data-target="#couponModal">edit</i></a>
                                                    <div class="col-sm-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingOne_1">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1">
                                                                        Color
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
                                                                <div class="panel-body">
                                                                    <div class="row clearfix" style="padding: 10px;">
                                                                        <div class="col-sm-12"  style="background: #eaf0f08c;border-radius: 4px;">
                                                                            <table class="table">
                                                                                <tr>
                                                                                    <td>Add Values for the Color Attribute</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        @php
                                                                                            $values = \App\Color::all();
                                                                                        @endphp
                                                                                        <select name="color_attribute_values[]" id="color-attribute-values" class="form-control show-tick select2" multiple="multiple">
                                                                                            <option disabled>Select Values</option>
                                                                                            @if ($values)
                                                                                                @foreach($values as $value)
                                                                                                    <option value="{{ $value->id }}" style="background:{{ $value->code}};">{{ $value->code}}</option>
                                                                                                @endforeach
                                                                                            @endif
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                              

                                                {{-- variable product section --}}
                                                <div class="row clearfix" id="variable-product-section">
                                                    <div class="col-lg-12" style="background: #eaf0f08c;border-radius: 4px;">
                                                        <div class="row" id="size-variation-section">
                                                            <button class="btn btn-success add_field_button" style="margin-bottom: 10px; margin-top:20px;margin-left:10px;">Add More Fields</button>
        <table class="table table-bordered" id="table1">
                                 <tr>
                                         <th>Size</th>
                                        
                                     <th>Quantity</th>

                                        <th>Action</th>
                                    </tr>
                             <tr>
                    <td><input type="text" name="size[]" class="form-control" placeholder="size"></td>
                    <td><input type="number" name="quantity[]" class="form-control" placeholder="quantity"></td>
                
                    <td></td>
            </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- variable product section end --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #END# Product Data -->

                        <!-- Product Description -->
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>Description</h2>
                                    </div>
                                    <div class="body">
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <label for="p_description">Short Description</label>
                                                        <textarea class="form-control" name="p_description" id="p_description" cols="100" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #END# Product Description -->
                    </div>
                    <!-- #END# Left Content -->
                    <!-- Right Content -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <!-- Categories -->
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>
                                            Categories
                                        </h2>
                                    </div>
                                    <div class="body">
                                        <div class="row clearfix">
                            <div class="col-sm-12">
                                {{-- <div class="form-group"> --}}
                                    {{-- <div class="form-line"> --}}
                                        <label for="category">Select Category:</label>
                                        <select name="cat_id"  class="form-control show-tick ms category" id="category" required>
                                            @if($categories)

                                                <option value="" disabled selected>Select Category</option>
                                                @foreach($categories as $cat)
                                             
                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                @endforeach
                                             @endif
                                             </select>
                                    {{-- </div> --}}
                                {{-- </div> --}}
                            </div>

                        </div>
                         <div class="row clearfix">
                            <div class="col-sm-12">
                                 <div class="form-group"> 
                                    {{-- <div class="form-line"> --}}
                                        <label for="category">Select SubCategory:</label>
                                        <select name="subcategory_id"  class="form-control show-tick ms subcategory" required>
                                            @if($subcategories)

                                                <option  value="" class="disabled" disabled selected>Select Subcategory</option>
                                                @foreach($subcategories as $subcat)
                                             
                                                <option id="subcategoryOption" value="{{$subcat->id}}">{{$subcat->name}}</option>
                                                @endforeach
                                             @endif
                                             </select>
                                    {{-- </div> --}}
                                </div>
                            </div>
<div id="wait" style="display:none;width:69px;height:89px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;"><img src='https://media1.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif?cid=ecf05e47fwx7u0gjt32cptghk62ieoo3ea3a57ho8uwzcc2m&rid=giphy.gif' width="64" height="64" /><br>Loading..</div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                 <div class="form-group"> 
                                    {{-- <div class="form-line"> --}}
                                        <label for="category">Select Brand:</label>
                                        <select name="brand_id"  class="form-control show-tick ms  select2 brand" required>
                                            @if($brand)

                                                <option  value="" class="disabled" disabled selected>Select Subcategory</option>
                                                @foreach($brand as $b)
                                             
                                                <option id="subcategoryOption" value="{{$b->id}}">{{$b->name}}</option>
                                                @endforeach
                                             @endif
                                             </select>
                                    {{-- </div> --}}
                                </div>
                            </div>

                        </div>
                                       <!--  <div class="row">
                                            <div class="col-lg-12" style="height: 170px;overflow: auto;">
                                                <label>Category</label>
                                               <select class="select-options">
                                               <option >Select Category</option>

                                                @foreach ($categories as $cat=>$category)
                                                   <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                               </select>
                                                <label>Subcategory</label>
                                               <select class="select-options">
                                               <option >Select Category</option>

                                                @foreach ($brand as $cat=>$brands)
                                                   <option value="{{$brands->id}}">{{$brands->name}}</option>
                                                @endforeach
                                               </select>
                                                <label>Brand</label>

                                               
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="footer">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                {{-- <a href="">+ Add New Category</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Categories End -->

                        <!-- Product Thumbnail -->
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>
                                            Product Thumbnail
                                            {{-- <small>New Product</small> --}}
                                        </h2>
                                    </div>
                                    <div class="body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <div class="custom-file-container" data-upload-id="p_thumbnail">
                                                            <label style="color: #555;">Product Thumbnail:<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"></a></label>
                                                            <label class="custom-file-container__custom-file" >
                                                                <input type="file" name="p_thumbnail" class="custom-file-container__custom-file__custom-file-input">
                                                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                            </label>
                                                            <div class="custom-file-container__image-preview"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Thumbnail End -->
                        <!-- Product Gallery -->
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>
                                            Product Gallery
                                            {{-- <small>New Product</small> --}}
                                        </h2>
                                    </div>
                                    <div class="body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <div class="custom-file-container" data-upload-id="p_gallery">
                                                            <label style="color: #555;">Product Gallery:<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"></a></label>
                                                            <label class="custom-file-container__custom-file" >
                                                                <input type="file" name="p_gallery[]" class="custom-file-container__custom-file__custom-file-input" multiple>
                                                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                            </label>
                                                            <div class="custom-file-container__image-preview"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Gallery End -->
                        <button type="submit" class="btn btn-success" style="width: 100%; margin-bottom:30px;">Submit</button>
                    </div>
                    <!-- #END# Right Content -->
                </div>
                <!-- #END# Exportable Table -->
            </form>
        </div>

<div class="modal fade" id="couponModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Product Management
                                <small>New Value</small>
                            </h2>
                        </div>
                        <div class="body">
                            <form action="{{route('ds.product-management.color_action')}}" method="POST">
                                @csrf
                               
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="value">Value Name:</label>
                                                
                                                    <input name="code" id="code" placeholder="enter value" type="color" class="form-control">
                                                
                                                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button"  class="btn btn-default add-color">Submit</button>
                              </form>
                        </div>
                    </div>
                </div>

 </div>


            </div>
            <!-- #END# Exportable Table -->
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
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('public/admin/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('public/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('public/admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('public/admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('public/admin/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('public/admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('public/admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    {{-- <script src="{{asset('public/admin/plugins/jquery-datatable/extensions/export/buttons.html')}}5.min.js')}}"></script> --}}
    <script src="{{asset('public/admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('public/admin/js/admin.js')}}"></script>
    <script src="{{asset('public/admin/js/pages/tables/jquery-datatable.js')}}"></script>
    <!-- Demo Js -->
    <script src="{{asset('public/admin/js/demo.js')}}"></script>
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    {{-- <script src="{{asset('public/admin/js/pages/forms/basic-form-elements.js')}}"></script> --}}

    <!-- Autosize Plugin Js -->
    <script src="{{asset('public/admin/plugins/autosize/autosize.js')}}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{asset('public/admin/plugins/momentjs/moment.js')}}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{asset('public/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="{{asset('public/admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>

    <!-- Image upload and preview Js -->
    <script src="{{asset('public/admin/plugins/file-upload/file-upload-with-preview.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="{{asset('public/admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
    {{-- <script src="{{asset('public/admin/js/pages/forms/advanced-form-elements.js')}}"></script> --}}
    <script src="{{asset('public/admin/plugins/multi-select/js/jquery.multi-select.js')}}"></script>
    {{-- <script src="{{asset('public/admin/plugins/select2/select2.min.js')}}"></script> <!-- Select2 Js --> --}}
    <script>
        var p_thumbnail = new FileUploadWithPreview('p_thumbnail')
        var p_gallery = new FileUploadWithPreview('p_gallery')
    </script>
    <script>
        $(document).ready(function(){
            // $('#simople-product-section').show();
            // $('#variable-product-section').hide();
            $('#select2').select2();
            CKEDITOR.replace('p_detail');
            // $('#div-schedule').hide();
            // $('#size-variation-section').hide();
            // $('#product-type').change(function(e){
            //     var type = $('#product-type').val();
            //     if(type == 'simple product'){
            //         $('#simple-product-section').show();
            //         $('#variable-product-section').hide();
            //         $('#size-variation-section').hide();
            //         $('#size-simple-section').show();
            //     }
            //     if(type == 'variable product'){
            //         $('#simple-product-section').hide();
            //         $('#variable-product-section').show();
            //         $('#size-simple-section').hide();
            //         $('#size-variation-section').show();
            //     }
            // });
            // toogle schedule div
            $('#btn-schedule').on('click', function(e){
                e.preventDefault();
                $('#div-schedule').toggle();
            });

            // Table 1
            var max_fields      = 20;
            var add_button      = $(".add_field_button");
            var x = 1; //initlal text box count
            $(add_button).click(function(e){
                e.preventDefault();
                if(x < max_fields){ 
                    x++;
                    $('#table1').append('<tr id="row'+x+'"><td><input type="text" class="form-control" name="size[]" placeholder="size"/></td></td><td><input type="text" class="form-control" name="quantity[]" placeholder="quantity"/></td><td><button id="'+x+'" class="btn btn-danger remove_field">Remove</a></td></tr>'); //add input box
                }
            });

            $(document).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); 
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
                x--;
            })
        });

            $('.category').on('change', function() {
              var cat_id=this.value;
              $.ajax({
            type:'get',
            url:'{{route("ds.getSubcategoriesByCategory")}}',
            data: {id:cat_id},
           dataType: "json",
            success:function(response){
                
             $('.subcategory option').remove();
             $(".subcategory").append('<option  value="" class="disabled" disabled selected>Select Subcategory</option>');
            
             $.each(response,function(key, value)
                {
                    $(".subcategory").append('<option id="subcategoryOption" value=' + value.id + '>' + value.name + '</option>');
                });
        }
    });
            });
              $('.subcategory').on('change', function() {
              var cat_id=this.value;
              $.ajax({
            type:'get',
            url:'{{route("ds.product-management.getAllBrands")}}',
            data: {id:cat_id},
           dataType: "json",
            success:function(response){
                
             $('.brand option').remove();
             $(".brand").append('<option  value="" class="disabled" disabled selected>Select Brand</option>');
            
             $.each(response,function(key, value)
                {
                    $(".brand").append('<option id="brandOption" value=' + value.id + '>' + value.name + '</option>');
                });
        }
    });
            });

              /////////////////add Color////
       $(document).on("click",".add-color", function(e){ 
         var code=$('#code').val();
       $.ajax({
            type:'post',
            url:"{{route('ds.product-management.color_action')}}",
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
             data:{code:code},
            success:function(response){
                console.log(response);
                $("#couponModal").modal('hide');
             $('#color-attribute-values').append( '<option value='+response.id+' style="background:'+response.code+'">'+response.code+'</option>');
             $('.inner').append('<li data-original-index=""><a tabindex="0" class="" style="background: '+response.code+';" data-tokens="null"><span class="text">'+response.code+'</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>')
        }

  });

  });

              $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
  });
  $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
  });
    </script>
</body>

</html>
