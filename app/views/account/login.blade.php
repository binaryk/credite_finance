@extends('account.master')

    @section('content')

        {{ Form::open(['route' => 'sessions.store', 'class' => 'form-horizontal', 'role' => 'form']) }}
        <div class="white_label_login">
            <!-- BEGIN LOGO -->
       <div class="logo">
           <span class="label"> <img src="{{ asset('assets/admin/layout/img/logo_creditfin.png') }}"> </span>
       </div>
       <!-- END LOGO -->
            <h3 class="form-title">Autentificare</h3>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>Completati campul de utilizator sau parola.</span>
            </div>
            <div class="form-group">
                	@if (Session::has('flash_message'))
            			<p style="padding:5px" class="bg-success text-success">{{ Session::get('flash_message') }}</p>
            		@endif

            		@if (Session::has('error_message'))
            			<p style="padding:5px" class="bg-danger text-danger">{{ Session::get('error_message') }}</p>
            		@endif
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Utilizator</label>
                <div class="input-icon">
                   {{ Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control', 'required' => 'required'])}}
                   {{ errors_for('email', $errors) }}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Parola</label>
                <div class="input-icon">
                  {{ Form::password('password', ['placeholder' => 'Password','class' => 'form-control', 'required' => 'required'])}}
          		  {{ errors_for('password', $errors) }}
                </div>
            </div>

            <div class="form-actions">
            
                <button type="submit" class="btn blue pull-right">
                Intra
                </button>
                
            </div> 
            <div class="forget-password">
               <h4><a href="{{ URL::to('forgot_password') }}" class="forget-password">Ai uitat parola?</a></h4>

             </div>
       </div>
             <div class="create-account">
               <p>
               Nu esti inca membru?&nbsp; <a href="{{ URL::to('register') }}">
                 Inregistreaza-te</a>
               </p>
             </div>
          </form>
        <!-- END LOGIN FORM -->

    @stop