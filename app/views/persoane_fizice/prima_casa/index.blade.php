@extends('~layouts.datatable.index')
	
 
 @section('custom-styles')
 	<link rel="stylesheet" type="text/css" href="{{ asset('custom/css/fisa-informatii.css') }}">
 @stop
 @section('custom-scripts')
	 @parent
	 <script src="{{ asset('custom/js/utils/HelperAjax.js') }}"></script>
	 <script src="{{ asset('custom/js/Scadenta.js') }}"></script>
	 <script src="{{ asset('custom/js/binaryk/ui/Modal.js') }}"></script>
	 <script src="{{ asset('custom/js/prima_casa/ModalAction.js') }}"></script>
 @stop
@section('modal')
	@parent
	{{
        App\Repositories\Ui\Modal\Modal::make(null,null)
        ->id('sync_modal')
        ->caption('Data scadenței')
        ->closable(true)
        ->lid('sync_modal_title')
        ->help('Aici completati pentru stabilirea datei scadentei')
        ->body(View::make('persoane_fizice.partials.modal')->render())
        ->footer('
        <button type="button" data-modal-action="sync" class="btn btn-default">Salvează</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Renunţă</button>')
        ->render()
    }}
@endsection
@section('datatable-specific-page-jquery-initializations')
	var modalAction = new App.ModalAction();
    modalAction.init();
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