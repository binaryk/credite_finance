<div class="page-container">
		@include('template.parts.body.~sidebar')
	@if(! Request::is('confirm-link/*'))
	@endif
	<div class="page-content-wrapper">
		<div class="page-content">
		@if(! Request::is('confirm-link/*') && ! Request::is('/'))
			@include('template.parts.body.~page-header')
		@endif
			@yield('content')
		</div>
	</div>
	@include('template.parts.body.~quick-sidebar')
</div>