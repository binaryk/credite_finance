<ul class="page-sidebar-menu page-sidebar-menu-closed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	<li class="sidebar-toggler-wrapper"><div class="sidebar-toggler"></div></li>
	<li class="sidebar-search-wrapper">@include('template.parts.body.~search-form')</li>
	<li>
		<a href="javascript:;">
			<i class="icon-folder"></i>
			<span class="title">Persoane Fizice</span>
			<span class="arrow "></span>
		</a>
		<ul class="sub-menu">
			<li>
				<a href="javascript:;">
				<i class="icon-home"></i> Credite imobiliare <span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="{{ URL::route('clienti-index', ['type' => '1']) }}">
						Prima Casă</a>
					</li>
					<li>
						<a href="{{ URL::route('clienti-index', ['type' => '2']) }}">
						Credit de achiziție</a>
					</li>
					<li>
						<a href="{{ URL::route('clienti-index', ['type' => '3']) }}"> 
						Credit nevoi personale cu ipotecă</a>
					</li>
					<li>
						<a href="{{ URL::route('clienti-index', ['type' => '4']) }}"> 
						Credit construcție</a>
					</li>
					<li>
						<a href="{{ URL::route('clienti-index', ['type' => '5']) }}">
						Credit de renovări/amenajări</a>
					</li>
					<li>
						<a href="{{ URL::route('clienti-index', ['type' => '6']) }}">
						Refinanțări</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="javascript:;">
				<i class="icon-wallet"></i> Credite de consum <span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="{{ URL::route('clienti-index', ['type' => '7']) }}">
						Nevoi personale</a>
					</li>
					<li>
						<a href="{{ URL::route('clienti-index', ['type' => '8']) }}">
						Credite medicale/studii/vacanțe</a>
					</li>
					<li>
						<a href="{{ URL::route('clienti-index', ['type' => '9']) }}">
						Leasing</a>
					</li>
					<li>
						<a href="{{ URL::route('clienti-index', ['type' => '10']) }}">
						Refinanțări</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
				<i class="icon-bar-chart"></i>
				Imobile </a>
			</li>
			<li>
				<a href="{{URL::route('clienti-index')}}">
				<i class="icon-users"></i>
				Clienți </a>
			</li>
		</ul>
	</li>
	<li>
		<a href="javascript:;">
			<i class="icon-briefcase"></i>
			<span class="title">Persoane Juridice</span>
			<span class="arrow "></span>
		</a>
	</li>
	<li class="start">
		<a href="javascript:;"><i class="icon-user"></i>
			<span class="title">Date de bază</span>
			<span class="arrow"></span>
		</a>
		<ul class="sub-menu">
			<li>
				<a href="{{ URL::route('grid-utilizatori') }}"><i class="icon-users"></i>Listă utilizatori</a>
			</li>
			<li>
				<a href="{{ URL::route('grid_banci') }}"><i class="icon-users"></i>Bănci</a>
			</li>
			<li>
				<a href="{{ URL::route('ofertare') }}"><i class="icon-users"></i>Ofertare</a>
			</li>
		</ul>
	</li>
		
</ul>