<ul class="page-breadcrumb">

	<li>
		<i class="fa fa-home"></i>
		<a href="index.html">Home</a>
	@if( isset($breadcrumbs) )
		<i class="fa fa-angle-right"></i>
	</li>
		@foreach($breadcrumbs as $key => $breadcrumb)
			<li>
				<a href="{{ URL::route($breadcrumb['route']) }}">{{$breadcrumb['name']}}</a>
				@if( $key < count($breadcrumbs) - 1 )
					<i class="fa fa-angle-right"></i>
				@endif
			</li>
		@endforeach
	@endif
</ul>