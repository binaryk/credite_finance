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
 		}).on('changeDate', function(e)
 		{});
 		}
	$('#istoric_credit').on('ifChecked', function(event){
	  $('.istoric').show();
	});	
	$('#istoric_credit').on('ifUnchecked', function(event){
	  $('.istoric').hide();
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