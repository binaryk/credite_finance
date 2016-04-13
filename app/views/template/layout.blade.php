<!DOCTYPE html> 
<html lang="en" class="no-js" ng-app="app" ng-controller="MainCtrl">
@include('template.parts.~head')
<body class="page-quick-sidebar-over-content page-header-fixed page-sidebar-reversed page-sidebar-closed" @yield('body-attributes')>

    @include('template.parts.body.~top-bar')
    @include('template.parts.body.~page')
 	@include('template.parts.body.~footer')
    @include('template.parts.body.~include-js')
    @yield('modal')
</body>
</html>