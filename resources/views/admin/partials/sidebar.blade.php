<nav class="sidebar-menu">
	<div class="brand">
		<a class="logo">
			
		</a>
	</div>
	<ul id="side-menu" class="nav">
		<div class="clearfix"></div>
		<li>
			<a class="menu {{ Request::is('admin/dashboard') ? 'active' : '' }}" href="{{ url('admin/dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i><span> Dashboard</span></a>
		</li>
		<li>
			<a class="menu {{ Request::is('admin/about') ? 'active' : '' }}" href="{{ url('admin/about') }}"><i class="fa fa-user" aria-hidden="true"></i><span> About</span></a>
		</li>
		<li>
			<a class="menu {{ Request::is('admin/education') ? 'active' : '' }}" href="{{ url('admin/education') }}"><i class="fa fa-edit" aria-hidden="true"></i><span> Education</span></a>
		</li>
		<li>
			<a class="menu {{ Request::is('admin/experience') ? 'active' : '' }}" href="{{ url('admin/experience') }}"><i class="fa fa-briefcase" aria-hidden="true"></i><span> Experience</span></a>
		</li>
		<li>
			<a class="menu {{ Request::is('admin/skill') ? 'active' : '' }}" href="{{ url('admin/skill') }}"><i class="fa fa-code" aria-hidden="true"></i><span> Skills</span></a>
		</li>
		<li>
			<a class="menu {{ Request::is('admin/project') ? 'active' : '' }}" href="{{ url('admin/project') }}"><i class="fa fa-flag-checkered" aria-hidden="true"></i><span> Project</span></a>
		</li>
		<li>
			<a class="menu {{ Request::is('admin/testimonial') ? 'active' : '' }}" href="{{ url('admin/testimonial') }}"><i class="fa fa-quote-left" aria-hidden="true"></i><span> Testimonials</span></a>
		</li>
		<li>
			<a class="menu {{ Request::is('admin/social_link') ? 'active' : '' }}" href="{{ url('admin/social_link') }}"><i class="fa fa-anchor" aria-hidden="true"></i><span> Social Links</span></a>
		</li>
	</ul>
</nav>