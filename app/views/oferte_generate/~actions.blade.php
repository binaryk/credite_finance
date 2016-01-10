@extends('~layouts.datatable.actions')

@section('actions-items')

<li class="action-download-oferta-document" data-id="{{$record->id}}"><a href="{{URL::route('download_oferta_generata', ['id' => $record->id])}}"><i class="fa fa-download"></i> <span>Descarcă fişier</span></a></li>
<li class="divider"></li>
<li class="action-delete-oferte-documents" data-id="{{$record->id}}"><a href="#"><i class="fa fa-eraser text-red"></i> <span class="text-red">Şterge fişier</span></a></li>
@stop