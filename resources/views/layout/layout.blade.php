<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="author"
         content="Navalha Digital">
        <meta name="description" content="Sobracom - Associação de Ortopedia e Odontologia">
        
        <!-- Favicon -->
        {{Html::favicon('images/icons/favicon.ico')}}
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core CSS -->
        {{ Html::style('assets/plugins/bootstrap/css/bootstrap.css') }}

        <!-- Waves Effect CSS -->
        {{ Html::style('assets/plugins/node-waves/waves.css') }}

        <!-- Animation CSS -->
        {{ Html::style('assets/plugins/animate-css/animate.css') }}

        <!-- Morris CSS -->
        {{ Html::style('assets/plugins/morrisjs/morris.css') }}

        <!-- Colorpicker CSS -->
        {{ Html::style('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}

        <!-- Dropzone CSS -->
        {{ Html::style('assets/plugins/dropzone/dropzone.css') }}

        <!-- Multi Select CSS -->
        {{ Html::style('assets/plugins/multi-select/css/multi-select.css') }}

        <!-- Bootstrap Spinner CSS -->
        {{ Html::style('assets/plugins/jquery-spinner/css/bootstrap-spinner.css') }}

        <!-- Bootstrap Tagsinput CSS -->
        {{ Html::style('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}

        <!-- Bootstrap Select CSS -->
        {{ Html::style('assets/plugins/bootstrap-select/css/bootstrap-select.css') }}

        <!-- noUISlider CSS -->
        {{ Html::style('assets/plugins/nouislider/nouislider.min.css') }}

        <!-- Custom CSS -->
        {{ Html::style('assets/css/style.css') }}

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        {{ Html::style('assets/css/themes/all-themes.css') }}

        <!-- DataTables -->
        {{ Html::style('assets/plugins/datatables/jquery.dataTables.min.css') }}
        {{ Html::style('assets/plugins/datatables/buttons.bootstrap.min.css') }}
        {{ Html::style('assets/plugins/datatables/fixedHeader.bootstrap.min.css') }}
        {{ Html::style('assets/plugins/datatables/responsive.bootstrap.min.css') }}
        {{ Html::style('assets/plugins/datatables/scroller.bootstrap.min.css') }}
        {{ Html::style('assets/plugins/datatables/dataTables.colVis.css') }}
        {{ Html::style('assets/plugins/datatables/dataTables.bootstrap.min.css') }}
        {{ Html::style('assets/plugins/datatables/fixedColumns.dataTables.min.css') }}

        <!-- SweetAlert js -->
        {{ Html::script('assets/js/sweetalert2.all.min.js') }}
        
        <!-- Notification css (Toastr) -->
        {{ Html::style('assets/plugins/toastr/toastr.min.css') }}


    </head>

    <body class="theme-light-blue">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-cyan">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Carregando...</p>
            </div>
        </div>
        <!-- / Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>

        @include('_partials.navbar')

        @include('_partials.menu')

        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
            
        <!-- Jquery Core Js -->
        {{ Html::script('assets/plugins/jquery/jquery.min.js') }}

        <!-- Bootstrap Core Js -->
        {{ Html::script('assets/plugins/bootstrap/js/bootstrap.js') }}

        <!-- Select Plugin Js -->
        {{ Html::script('assets/plugins/bootstrap-select/js/bootstrap-select.js') }}

        <!-- Slimscroll Plugin Js -->
        {{ Html::script('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}

        <!-- Waves Effect Plugin Js -->
        {{ Html::script('assets/plugins/node-waves/waves.js') }}
        
        <!-- Colorpicker Css -->
        {{ Html::script('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}

        <!-- Dropzone Css -->
        {{ Html::script('assets/plugins/dropzone/dropzone.js') }}


        {{ Html::script('assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}

        <!-- Multi Select Css -->
        {{ Html::script('assets/plugins/multi-select/js/jquery.multi-select.js') }}

        <!-- Bootstrap Spinner Css -->
        {{ Html::script('assets/plugins/jquery-spinner/js/jquery.spinner.js') }}

        <!-- Bootstrap Tagsinput Css -->
        {{ Html::script('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}

        {{ Html::script('assets/js/admin.js') }}
        {{ Html::script('assets/js/demo.js') }}

        <!-- Toastr js -->
        {{ Html::script('assets/plugins/toastr/toastr.min.js') }}
        {{ Html::script('assets/js/toastr.js') }}
                
        {{ Html::script('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>

        @yield('scripts')
        
    </body>
</html>