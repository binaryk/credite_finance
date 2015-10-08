<!-- BEGIN COPYRIGHT -->
<div class="copyright">
     2015 &copy; CreditFin
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="{{ asset('assets/global/plugins/respond.min.js') }}"></script>
<script src="{{ asset('assets/global/plugins/excanvas.min.js') }}"></script> 
<![endif]-->
<script src="{{ asset('assets/global/plugins/jquery.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-migrate.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.blockui.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/uniform/jquery.uniform.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.cokie.min.js')}} " type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('assets/global/plugins/backstretch/jquery.backstretch.min.js')}} " type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/select2/select2.min.js') }}"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/global/scripts/metronic.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout/scripts/layout.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout/scripts/demo.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/admin/pages/scripts/login-soft.js')}} " type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@yield('scripts')
<script>
 
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>