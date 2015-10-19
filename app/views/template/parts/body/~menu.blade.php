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
				<i class="icon-home"></i> Credite imobiliare <span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="#">
						Prima Casa</a>
					</li>
					<li>
						<a href="#">
						Credit de achizitie</a>
					</li>
					<li>
						<a href="#"> 
						Credit nevoi personale cu ipoteca</a>
					</li>
					<li>
						<a href="#"> 
						Credit constructie</a>
					</li>
					<li>
						<a href="#">
						Credit de renovari/amenajari</a>
					</li>
					<li>
						<a href="#">
						Refinantari</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="javascript:;">
				<i class="icon-wallet"></i> Credite de consum <span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="#">
						Nevoi personale</a>
					</li>
					<li>
						<a href="#">
						Credite medicale/studii/vacanta</a>
					</li>
					<li>
						<a href="#">
						Leasing</a>
					</li>
					<li>
						<a href="#">
						Refinantari</a>
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
		<i class="icon-briefcase"></i>
		<span class="title">Persoane Juridice</span>
		<span class="arrow "></span>
		</a>
	</li>	
</ul>