@extends('~layouts.datatable.actions')

@section('actions-items')

	<li class="input-bg"><a href="{{URL::route('banca_produse', ['id' => 'banca_produse', 'id_filter' => $record->id])}}">Produse</a></li>
	<li class="input-bg"><a href="{{URL::route('documente_necesare_index', ['id' => 'documente_necesare', 'id_filter' => $record->id, 'type' => '1',])}}">Documente necesare</a></li>
	<li class="input-bg"><a href="{{URL::route('documente_necesare_index', ['id' => 'documente_necesare', 'id_filter' => $record->id, 'type' => '2',])}}">Manuale</a></li>
	<li class="input-bg"><a href="{{URL::route('documente_necesare_index', ['id' => 'documente_necesare', 'id_filter' => $record->id, 'type' => '3',])}}">Instructiuni de lucru</a></li>

	<li class="divider"></li>

	<li class="action-update-record" data-id="{{$record->id}}"><a href="#"><i class="fa fa-edit">
	</i> <span>Editare</span></a></li>

	<li class="action-delete-record" data-id="{{$record->id}}"><a href="#"><i class="fa fa-eraser text-red">
	</i> <span class="text-red">Ştergere</span></a></li>
@stop