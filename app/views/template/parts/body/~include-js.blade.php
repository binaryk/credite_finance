{{ HTML::script("assets/global/plugins/jquery.min.js") }}
@yield('after-jq')
{{ HTML::script("assets/global/plugins/bootstrap/js/bootstrap.min.js") }}
{{ HTML::script("assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js") }} 
{{ HTML::script("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js") }} 

{{ HTML::script("assets/global/scripts/metronic.js") }}
{{ HTML::script("assets/admin/layout/scripts/layout.js") }} 

{{ HTML::script('packages/numeral/numeral.js')}}
{{ HTML::script('packages/numeral/languages/ro.js')}}
{{ HTML::script('packages/moment/moment.js')}}
{{ HTML::script('sweetalert/dist/sweetalert.min.js')}}

{{ HTML::script('components/angular/angular.min.js')}}
{{ HTML::script('custom/js/angular/~config.js')}}
{{ HTML::script('custom/js/angular/controllers/MainCtrl.js')}}
<script type="text/javascript" src ="{{asset( 'packages/inputmask/js/jquery.inputmask.js') }}"></script>
<script type="text/javascript" src ="{{asset( 'packages/inputmask/js/jquery.inputmask.numeric.extensions.js') }}"></script>
<script src="{{ asset('custom/js/utils/Format.js')  }}"></script>
<script>
	numeral.language('ro');
	numeral.defaultFormat('(0,0.0000)');
	moment.locale('ro');
	var _config = {};
</script>
@yield('custom-scripts')
<script>
jQuery(document).ready(function() {Metronic.init(); Layout.init();});
</script>