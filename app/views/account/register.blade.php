@extends('account.master')

    @section('content')

<!-- BEGIN REGISTRATION FORM -->
  {{ Form::open(['route' => 'registration.store', 'class' => 'form-horizontal', 'role' => 'form']) }}
     <!-- BEGIN LOGO -->
<div class="logo">
    <span class="label"> <img src="{{ asset('assets/admin/layout/img/logo_creditfin.png') }}" height="60" width="100"></span>
</div>
<!-- END LOGO -->
       <h3>Înregistrează</h3>
       <div class="form-group">
           <label class="control-label visible-ie8 visible-ie9">Nume complet</label>
           <div class="input-icon">
	           {{ Form::text('prenume', null, ['placeholder' => 'Prenume', 'class' => 'form-control'])}}
	           {{ errors_for('prenume', $errors) }}
           </div>
       </div>
       <div class="form-group">
           <label class="control-label visible-ie8 visible-ie9">Nume complet</label>
           <div class="input-icon">
	           {{ Form::text('nume', null, ['placeholder' => 'Nume', 'class' => 'form-control'])}}
			   {{ errors_for('nume', $errors) }}
           </div>
       </div>
       <div class="form-group">
           <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
           <label class="control-label visible-ie8 visible-ie9">Email</label>
           <div class="input-icon">
	      		{{ Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control'])}}
	      		{{ errors_for('email', $errors) }}
           </div>
       </div> 
       <div class="form-group">
           <label class="control-label visible-ie8 visible-ie9">Parola</label>
           <div class="input-icon">
              {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control', 'id' => 'register_password'])}}
			  {{ errors_for('password', $errors) }}
           </div>
       </div>
       <div class="form-group">
           <label class="control-label visible-ie8 visible-ie9">Reintrodu parola</label>
           <div class="controls">
               <div class="input-icon">
                   {{ Form::password('password_confirmation', ['placeholder' => 'Password Confirm', 'class' => 'form-control','id' => 'password_confirmation'])}}
               </div>
           </div>
       </div>
       <div class="form-group">
       </div>
       <div class="form-actions">
           <button type="submit"  class="btn blue pull-right">
           Inscrie-te 
           </button>
       </div>
           <p class="terms">
           *Prin crearea contului accepti,<br/>
            <a href="#">termenii și conditiile platformei</a>
           </p>
		<div class="form-out reg">
		         <p>
		           Esti deja membru?&nbsp; 
		    <a type="button" id="back-btn" href="{{URL::to('login')}}" class="btn btn-default">
		        Autentificare </a></p>
		</div>
   </form>
   <!-- END REGISTRATION FORM -->

	@stop 