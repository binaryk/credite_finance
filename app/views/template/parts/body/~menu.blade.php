<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
	<li class="sidebar-toggler-wrapper">
		<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
		<div class="sidebar-toggler">
		</div>
		<!-- END SIDEBAR TOGGLER BUTTON -->
	</li>
	<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
	<li class="sidebar-search-wrapper">
		<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
		<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
		<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
		<form class="sidebar-search " action="extra_search.html" method="POST">
			<a href="javascript:;" class="remove">
			<i class="icon-close"></i>
			</a>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
				<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
				</span>
			</div>
		</form>
		<!-- END RESPONSIVE QUICK SEARCH FORM -->
	</li>
	<li class="start active open">
		<a href="javascript:;">
		<i class="icon-home"></i>
		<span class="title">Pagina principala</span>
		<span class="selected"></span>
		<span class="arrow open"></span>
		</a>
		<ul class="sub-menu">
			<li class="active">
				<a href="{{URL::route('imobile-index')}}">
				<i class="icon-bar-chart"></i>
				Lista de imobile</a>
			</li>
			<li>
				<a href="{{ URL::route('cautare-date') }}">
				<i class="icon-bulb"></i>
				Cautare date</a>
			</li>
			<li>
				<a href="{{ URL::route('verificare-presa') }}">
				<i class="icon-graph"></i>
				Verificare presa</a>
			</li>
		</ul>
	</li>
</ul>