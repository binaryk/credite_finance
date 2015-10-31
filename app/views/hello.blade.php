@extends('template.layout')
@section('custom-styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/pages/css/profile-old.css')}}">
@stop
@section('content') 
	<div class="row profile">
		<div class="col-md-12">
			@include('hello_page.tabs.index')
		</div>
	</div>
@stop