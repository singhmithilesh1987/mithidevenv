<!doctype html>
<html>
<head>
	<title>{{ __('Laravel App') }}</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	@stack('css')

</head>
<body>
	<div class="container">
		<div class="row">
		    <div class="col-sm-12">
		    	<h4>@yield('title')</h4>
		    </div>
	  </div>
	  <div class="row">
	    <div class="col-sm-12">
	      @yield('content')
	    </div>
	  </div>
	</div>
	@stack('js')
</body>
</html>