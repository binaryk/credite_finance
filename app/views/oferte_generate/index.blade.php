@extends('~layouts.datatable.index')
@section('content')
@parent  

@stop
@section('datatable-specific-page-jquery-initializations')

    $(document).on('click', '.action-delete-oferte-documents', function(){
    $.ajax({
    'url'    : "{{URL::route('delete_oferta_generata')}}",
    'type'   : 'post',
    dataType : 'json',
    data     : {'id' : $(this).attr('data-id') },
    success  : function(result)
    {
    if(result.success)
    {
    dt.draw(false);
    }
    }
    });
    });


@stop
