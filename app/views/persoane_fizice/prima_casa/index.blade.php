@extends('~layouts.datatable.index')

 

@section('datatable-specific-page-jquery-initializations')
	form.aftershow = function(record,action){
		if (action == 'insert')
		{
			$('input').iCheck('uncheck');
		}
	}
 	$('.generate-link').click(function(e){
 		e.preventDefault();
 		$.post("{{ URL::route('post_generate_link') }}",function(response){
 			console.log(response);
 			swal("Success!", "Copiază link-ul:  " + response, "success"); 

 		});
 	}) 
@stop 