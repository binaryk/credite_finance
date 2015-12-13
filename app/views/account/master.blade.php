<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.6.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Credite - CreditFin</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{ asset('assets/global/plugins/select2/select2.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/admin/pages/css/login-soft.css') }}" rel="stylesheet" />
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="{{ asset('assets/global/css/components.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/global/css/plugins.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/admin/layout/css/layout.css') }}" rel="stylesheet" />
<link id="style_color" href="{{ asset('assets/admin/layout/css/themes/darkblue.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/admin/layout/css/custom.css') }}" rel="stylesheet" />
<link href="{{ asset('custom/css/login/main.css') }}" rel="stylesheet" />
<link href="{{ asset('custom/css/main.css') }}" rel="stylesheet" />
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>

    <style type="text/css">
    .social-icons li .twitter{
        background: url("{{asset('assets/global/img/social/twitter.png')}}") no-repeat;
    }
    .social-icons li .facebook{
        background: url("{{asset('assets/global/img/social/facebook.png')}}") no-repeat;
    }
    .social-icons li .googleplus{
        background: url("{{asset('assets/global/img/social/googleplus.png')}}") no-repeat;
    }
    .social-icons li .linkedin{
        background: url("{{asset('assets/global/img/social/linkedin.png')}}") no-repeat;
    } 
    </style>
    {{ HTML::style('css/frontend.css') }}

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
@include('includes.partials.messages')
@yield('content')


</div>
<!-- END LOGIN -->



@include('account.footer')