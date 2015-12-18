@extends('template.layout')
@section('body-attributes')
    ng-controller="OfertaCtrl"
@endsection
@section('content')
    {{ $form->showForm()  }}
@stop
@section('custom-scripts')
    <script src="{{ asset('custom/js/angular/services/OfertaService.js')  }}"></script>
    <script src="{{ asset('custom/js/angular/controllers/OfertaCtrl.js')  }}"></script>
    <script src="{{ asset('custom/js/utils/Format.js')  }}"></script>
    <script type="text/javascript" src ="{{asset( 'packages/inputmask/js/jquery.inputmask.js') }}"></script>
    <script type="text/javascript" src ="{{asset( 'packages/inputmask/js/jquery.inputmask.numeric.extensions.js') }}"></script>
    <script>
        _config['r_post_oferte_template'] = "{{ route('r_post_oferte_template')  }}";
        _config['r_post_oferte_pdf']      = "{{ route('r_post_oferte_pdf')  }}";
    </script>
@endsection