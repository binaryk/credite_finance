@extends('~layouts.datatable.actions')

@section('actions-items')

<li class="action-download-client-documents" data-id="{{$record->id}}"><a href="{{URL::route('download-client-documents', ['document_id' => $record->id])}}"><i class="fa fa-download"></i> <span>Descarcă fişier</span></a></li>
<li class="divider"></li>
<li class="action-delete-client-documents" data-id="{{$record->id}}"><a href="#"><i class="fa fa-eraser text-red"></i> <span class="text-red">Şterge fişier</span></a></li>
@stop