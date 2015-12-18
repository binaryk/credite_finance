@if(! Request::is('confirm-link/*'))
<li class="dropdown dropdown-user">
	<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
	{{HTML::image("assets/admin/layout/img/logo_creditfin.png",null, ['width' => '40', 'height' => '15']) }}<span class="username username-hide-on-mobile"> KesInvest </span>
	<i class="fa fa-angle-down"></i></a>
	<ul class="dropdown-menu dropdown-menu-default"> 
		<li><a href="{{ URL::route('user-profile') }}"><i class="icon-user"></i> Profil utilizator </a></li>
		<li class="divider"></li>
		<li><a href="{{ URL::route('lock') }}"><i class="icon-lock"></i> Lock Screen </a></li>
		<li><a href="{{ URL::to('logout') }}"><i class="icon-key"></i> Log Out </a></li>
	</ul>
</li>
@endif