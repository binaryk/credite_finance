<head>
<meta charset="utf-8"/>
<title>@yield('title','Credite') {{ @$head_title  }}  </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta content="" name="proiect imobiliare">
<meta content="" name="Binaryk">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<link rel="shortcut icon" href="{{ asset('admin/img/icons/favicon.png') }}">

{{-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/> --}}
{{HTML::style("assets/global/plugins/font-awesome/css/font-awesome.min.css") }}
{{HTML::style("assets/global/plugins/simple-line-icons/simple-line-icons.min.css") }}
{{HTML::style("assets/global/plugins/bootstrap/css/bootstrap.min.css") }}
{{HTML::style("assets/global/plugins/uniform/css/uniform.default.css") }}
{{HTML::style("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css") }}
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
{{HTML::style("assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css") }}
{{HTML::style("assets/global/plugins/fullcalendar/fullcalendar.min.css") }}
{{HTML::style("assets/global/plugins/jqvmap/jqvmap/jqvmap.css") }}  
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
{{HTML::style("assets/admin/pages/css/tasks.css") }}
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
{{HTML::style("assets/global/css/components.css") }}
{{HTML::style("assets/admin/layout/css/layout.css") }}
{{HTML::style("assets/admin/layout/css/themes/light2.css") }}
{{HTML::style("sweetalert/dist/sweetalert.css") }}
{{HTML::style("custom/css/grids_actions.css") }}
{{HTML::style("admin/css/dt/dtform.css") }}  
{{HTML::style("custom/css/main.css") }}  

<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->

<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
    <script>
        var _config = {};
    </script>
@yield('custom-styles')  
@yield('custom-styles-1')  
</head>