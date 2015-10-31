@extends('~layouts.datatable.actions')

@section('actions-items')

	<li class="input-bg"><a href="{{URL::route('client-documents', ['id' => 'client-docs', 'id_client' => $record->id])}}">Adaugă documente</a></li>
		
	<li class="divider"></li>

	<li class="action-update-record" data-id="{{$record->id}}"><a href="#"><i class="fa fa-edit">
	</i> <span>Editare</span></a></li>


	<li class="action-delete-record" data-id="{{$record->id}}"><a href="#"><i class="fa fa-eraser text-red">
	</i> <span class="text-red">Ştergere</span></a></li>
@stop