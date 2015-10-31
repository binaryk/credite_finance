@extends('~layouts.datatable.index')
	
 
 @section('custom-styles')
 	<link rel="stylesheet" type="text/css" href="{{ asset('custom/css/fisa-informatii.css') }}">
 @stop

@section('datatable-specific-page-jquery-initializations')
	form.aftershow = function(record,action){
		if (action == 'insert')
		{
			$('input').iCheck('uncheck');
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
 			swal("Copiază link-ul:",response, "success"); 

 		});
 	}) 

 	FormiCheck.init();
@stop 