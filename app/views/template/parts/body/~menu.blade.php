<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	<li class="sidebar-toggler-wrapper"><div class="sidebar-toggler"></div></li>
	<li class="sidebar-search-wrapper">@include('template.parts.body.~search-form')</li>



	<li class="start">
		<a href="javascript:;"><i class="icon-user"></i>
			<span class="title">Utilizatori</span>
			<span class="arrow"></span>
		</a>
		<ul class="sub-menu">
			<li>
				<a href="{{ URL::route('grid-utilizatori') }}"><i class="icon-users"></i>Lista utilizatori</a>
			</li>
		</ul>
		<a href="javascript:;">
		<i class="icon-folder"></i>
		<span class="title">Persoane Fizice</span>
		<span class="arrow "></span>
		</a>
		<ul class="sub-menu">
			<li>
				<a href="javascript:;">
				<i class="icon-settings"></i> Credite imobiliare <span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="#"><i class="icon-camera"></i> Prima Casa</a>
					</li>
					<li>
						<a href="#"><i class="icon-link"></i> Credit de achizitie</a>
					</li>
					<li>
						<a href="#"><i class="icon-pointer"></i> Credit nevoie personale cu ipoteca</a>
					</li>
					<li>
						<a href="#"><i class="icon-camera"></i> Credit constructie</a>
					</li>
					<li>
						<a href="#"><i class="icon-link"></i> Credit de renovari/amenajari</a>
					</li>
					<li>
						<a href="#"><i class="icon-pointer"></i> Refinantari</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="javascript:;">
				<i class="icon-globe"></i> Credite de consum <span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="#"><i class="icon-tag"></i> Nevoi personale</a>
					</li>
					<li>
						<a href="#"><i class="icon-pencil"></i> Credite medivcale/studii/vacanta</a>
					</li>
					<li>
						<a href="#"><i class="icon-graph"></i> Leasing</a>
					</li>
					<li>
						<a href="#"><i class="icon-graph"></i> Refinantari</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
				<i class="icon-bar-chart"></i>
				Imobile </a>
			</li>
		</ul>
		<a href="javascript:;">
		<i class="icon-folder"></i>
		<span class="title">Persoane Juridice</span>
		<span class="arrow "></span>
		</a>
	</li>
	
</ul>