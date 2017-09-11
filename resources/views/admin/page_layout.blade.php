@extends('admin.layout')

@section('content')
	<div class="section left">
	                
	    @include('admin.partials.sidebar')

	</div>

	<div class="section right">
	    
	    @include('admin.partials.header')

	    <div class="page">
	        
	        @yield('page')

	    </div>

	    @include('admin.partials.footer')

	</div>

	@yield('script')

@endsection