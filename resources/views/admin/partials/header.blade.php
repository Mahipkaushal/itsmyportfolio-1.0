<nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="menu-toggler">
				<i class="fa fa-bars"></i>
			</a>            
		</div>
		<ul class="nav navbar-nav">
			<li>
                <div class="title">
                    <h3>{{ $heading }}</h3>
                </div>  
            </li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::guard()->user()->username }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                	<li>
                		<a href="#">Setting</a>
                	</li>
                    <li>
                        <a href="{{ url('/admin/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
		</ul>
	</div>
</nav>