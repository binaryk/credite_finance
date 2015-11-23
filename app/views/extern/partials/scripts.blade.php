<script type="text/javascript" src="{{ asset('admin/js/libraries/form/dtform.js') }}"></script>
<script type="text/javascript" src="{{ asset('packages/fileinput/js/fileinput.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/global/plugins/icheck/icheck.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/pages/scripts/form-icheck.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/select2/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/pages/scripts/components-pickers.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/pages/scripts/portlet-draggable.js') }}"></script>
<script type="text/javascript">
	var upload_document = '';
	var __config = {};
	// __config['file_upload_client'] = "{{URL::route('upload-client-documents')}}";

	var form = new DTFORM(
		"prima-casa", 
		"{{URL::route('datatable-load-form', ['id' => 'prima-casa'])}}", 
		'{{ $model }}', 
		"{{URL::route('datatable-do-action', ['id' => 'prima-casa'])}}",
		'prima-casa', 
		"{{URL::route('upload-client-documents')}}");
	form.refresh = 1;

	form.afterEmptyControls = function(record, action){
		$('.btn-do-action').removeAttr('disabled');
	}

 	if (jQuery().datepicker) {
        $('.datepicker').datepicker(
            {
                language: "ro",
                format: "yyyy-mm-dd",
                autoclose: true,
                rtl: Metronic.isRTL(),
                orientation: "left",
                autoclose: true,
                todayBtn: 'linked',
                clearBtn: true
            }).on(
                'changeDate', function(e)
            {});
    }
	$('#istoric_credit').on('ifChecked', function(event){
	  $('.istoric').show();
	});	
	$('#istoric_credit').on('ifUnchecked', function(event){
	  $('.istoric').hide();
	});
	$('#co_platitor').on('ifChecked', function(event){
	  $('.co_platitor_form').show();
	});
	$('#co_platitor').on('ifUnchecked', function(event){
	  $('.co_platitor_form').hide();
	});

		

</script> 

@section('after-jq')
<script type="text/javascript">
	@if(Request::is('confirm-link/*'))
		$('.page-sidebar-wrapper').remove();
		$('body').addClass('page-sidebar-closed')
	@endif
</script>
@stop