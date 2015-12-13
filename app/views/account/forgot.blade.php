@extends('account.master')

    @section('content')
    <!-- BEGIN FORGOT PASSWORD FORM -->
	    {{ Form::open(['route' => 'forgot_password', 'class' => 'forget-form login-form', 'role' => 'form']) }}
	   
	         <!-- BEGIN LOGO -->
	    <div class="logo">
	        <span class="label"> <img src="{{  asset('assets/admin/layout/img/logo_creditfin.png') }}" height="60" width="100"> </span>
	    </div>
	    <!-- END LOGO -->
	       <h3>Ai uitat parola ?</h3>
	       <p>Introdu adresa ta de email mai jos pentru a reseta parola.</p>
	       <div class="form-group">
	           <div class="input-icon">
	           		{{ Form::input('email', 'email', Input::old('email'), ['class' => 'form-control', 'placeholder'=>"Email"]) }}
	           </div>
	       </div>
	       <div class="form-actions">
	           <button type="submit" class="btn blue pull-right">
	           		Trimite
	           </button>
	       </div>
	    <div class="form-out">
            <p>Esti deja membru?&nbsp; 
        		<a type="button" id="back-btn" href="{{URL::to('login')}}" class="btn btn-default">Autentificare</a>
            </p>
	    </div>
	      {{ Form::close() }}
	    <!-- END FORGOT PASSWORD FORM --> 

    @stop
@section('scripts')
<script>
jQuery(document).ready(function() { 
	$('.forget-form').show();
});
</script>
@stop
