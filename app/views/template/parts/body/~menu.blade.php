<ul class="page-sidebar-menu page-sidebar-menu-closed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	<li class="sidebar-toggler-wrapper"><div class="sidebar-toggler"></div></li>
	<li class="sidebar-search-wrapper">@include('template.parts.body.~search-form')</li>
	<li>
		<a href="javascript:;">
			<i class="icon-users"></i>
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
			<span class="title">Persoane Juridice - [in dezvoltare]</span>
			<span class="arrow "></span>
		</a>
	</li>
	<li>
		<a href="javascript:;">
			<i class="icon-calculator"></i>
			<span class="title">Ofertarea</span>
			<span class="arrow "></span>
		</a>
		<ul class="sub-menu">
			<li>
				<a href="{{ URL::route('ofertare') }}"><i class="icon-users"></i>Genereaza oferta</a>
			</li>
			<li>
				<a href="{{ URL::route('oferte_generate',['id' => 'oferte_generate']) }}"><i class="icon-users"></i>Oferte generate</a>
			</li>
		</ul>
	</li>
	<li class="start">
		<a href="javascript:;"><i class="icon-calendar"></i>
			<span class="title">Scadenta</span>
			<span class="arrow"></span>
		</a>
		<ul class="sub-menu">
			<li>
				<a href="{{ URL::route('clienti-index', ['type' => 'scadenta']) }}">
					<i class="icon-users"></i>Listă clienti</a>
			</li>
		</ul>
	</li>
	<li class="start">
		<a href="javascript:;"><i class="icon-layers"></i>
			<span class="title">Baza de date</span>
			<span class="arrow"></span>
		</a>
		<ul class="sub-menu">
			<li>
				@if( Sentry::getUser() &&  Sentry::getUser()->inGroup(Sentry::findGroupByName('Admins')))
					<a href="{{ URL::route('grid-utilizatori') }}"><i class="icon-users"></i>Listă utilizatori</a>
				@endif
			</li>
			<li>
				<a href="{{ URL::route('grid_banci') }}"><i class="icon-wallet"></i>Bănci</a>
			</li>
		</ul>
	</li>
		
</ul>