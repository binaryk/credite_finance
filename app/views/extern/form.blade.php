@extends('template.layout')
@section('content')
<div class="row"> 
	<div class="col-md-12 data-tabs">
		@include('persoane_fizice.prima_casa.forms.tab_1')
		@include('persoane_fizice.prima_casa.forms.tab_2')
		@include('persoane_fizice.prima_casa.forms.tab_3')
		@include('persoane_fizice.prima_casa.forms.tab_4') 
	</div>
	<div class="col-md-12 photo-tabs" style="display: none;">
		@include('persoane_fizice.prima_casa.forms.tab_5') 
		<div class="clearfix"></div>
	</div>
	{{
		Form::hidden('id_organizatie', $current_org->id, ['id' => 'id_organizatie', 'class' => 'data-source', 'data-control-source' => 'id_organizatie', 'data-control-type' => 'persistent'])
	}}
	{{
		Form::hidden('client_extern', 1, ['id' => 'client_extern', 'class' => 'data-source', 'data-control-source' => 'client_extern', 'data-control-type' => 'persistent'])
	}}
	{{
		Form::hidden('client_id', -1, ['id' => 'client_id', 'class' => 'data-source', 'data-control-source' => 'client_id', 'data-control-type' => 'persistent'])
	}}
	<div class="form-actions col-md-12 data-tabs">
		<button class="btn-do-action-extern btn blue m-icon btn-do-insert pull-right client-extern" data-action="insert">Salvează <i class="m-icon-swapleft"></i></button>
	</div>

</div>


@stop
@section('custom-scripts')
	<script type="text/javascript" src="{{ asset('admin/js/libraries/form/dtform.js') }}"></script>
	<script type="text/javascript" src="{{ asset('packages/fileinput/js/fileinput.min.js') }}"></script>
	@include('extern.partials.scripts')
@stop
@section('custom-styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('packages/fileinput/css/fileinput.min.css')}} ">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/fileinput/fileinput.css')}} ">
	<script type="text/javascript" src="{{ asset('admin/js/libraries/form/dtform.js') }}"></script>
	<script type="text/javascript" src="{{ asset('packages/fileinput/js/fileinput.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js') }}"></script>
	 
@stop
