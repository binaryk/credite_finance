@extends('~layouts.datatable.actions')

@section('actions-items')

	<li class="input-bg"><a href="{{URL::route('conditii_eligibilitate', ['id' => 'conditii_eligibilitate', 'id_filter' => $record->id])}}">Condiții de eligibilitate</a></li>
	<li class="input-bg"><a href="{{URL::route('dobanzi_comisioane', ['id' => 'dobanzi_comisioane', 'id_filter' => $record->id])}}">Dobânzi și comisioane</a></li>
	<li class="input-bg"><a href="{{URL::route('documente_necesare_index', ['id' => 'documente_necesare', 'id_filter' => $record->id, 'type' => '4'])}}">Acte necesare</a></li>

	<li class="divider"></li>

	<li class="action-update-record" data-id="{{$record->id}}"><a href="#"><i class="fa fa-edit">
	</i> <span>Editare</span></a></li>

	<li class="action-delete-record" data-id="{{$record->id}}"><a href="#"><i class="fa fa-eraser text-red">
	</i> <span class="text-red">Ştergere</span></a></li>
@stop