@extends('~layouts.datatable.index')
	
 
 @section('custom-styles')
 	<link rel="stylesheet" type="text/css" href="{{ asset('custom/css/fisa-informatii.css') }}">
 @stop
 @section('custom-scripts')
	 @parent
	 <script src="{{ asset('custom/js/utils/HelperAjax.js') }}"></script>
	 <script src="{{ asset('custom/js/Scadenta.js') }}"></script>
 @stop

@section('datatable-specific-page-jquery-initializations')
	_config['simulation'] = "{{ route('simulation') }}";
	var scadenta = new Scadenta(_config['simulation']);
	scadenta.handle();
	console.log(scadenta);
	form.aftershow = function(record,action){
		if (action == 'insert')
		{
			$('input').iCheck('uncheck');
		}
		if($('#istoric_credit').val() == 1){
			$('.istoric').show();
		}else{
			$('.istoric').hide();
		}
	}

	@if($edit)
		setTimeout(function(){
			$('li.action-update-record[data-id={{$edit}}]').find('a').trigger('click')
		},500)
	@endif
 	$('.generate-link').click(function(e){
 		e.preventDefault();
 		$.post("{{ URL::route('post_generate_link') }}",function(response){
 			console.log(response);
 			prompt("Copiază link-ul: CTRL+C", response);
 			//swal("Copiază link-ul:",response, "success"); 

 		});
 	}) 

 	FormiCheck.init();
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
@stop 