@extends('~layouts.datatable.actions')

@section('actions-items')

	<li class="input-bg"><a href="{{URL::route('client-documents', ['id' => 'client-docs', 'id_client' => $record->id])}}">Adaugă documente</a></li>
		
	<li class="divider"></li>
	@if(isset($record->has_data_scadentei) && $record->has_data_scadentei == 1)
		<li class="action-simulation" data-time="5" data-id="{{$record->id}}"><a href="#"><i class="fa fa-calendar">
		</i> <span>Simulare 5 zile</span></a></li>
		<li class="action-simulation" data-time="1" data-id="{{$record->id}}"><a href="#"><i class="fa fa-calendar">
		</i> <span>Simulare 1 zi</span></a></li>
		<li class="divider"></li>
	@endif

	<li><a href="{{ URL::route('oferte_generate',['id' => 'oferte_generate','client_id' => $record->id])  }}"><i class="fa fa-bar-chart">
	</i> <span>Ofertele clientului</span></a></li>

	<li class="action-update-record" data-id="{{$record->id}}"><a href="#"><i class="fa fa-edit">
	</i> <span>Fișa clientului</span></a></li>

	<li class="divider"></li>

	<li class="action-delete-record" data-id="{{$record->id}}"><a href="#"><i class="fa fa-eraser text-red">
	</i> <span class="text-red">Ştergere</span></a></li>
@stop