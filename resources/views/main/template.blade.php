<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Bountiful Flowers') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style type="text/css">

.nav.nav-center {
    display: inline-block;
    left: 0;
    right: 0;
    margin:0;
    float:none;
}

.navbar-inner{
    text-align:center;
}

</style>
<body>
 	<div class="navbar">
	    <div class="navbar-inner">
	        <ul class="nav">
	            <li><a>Left</a></li>
	        </ul>
	        <ul class="nav nav-center">
	            <li><a>Center 1</a></li>
	            <li><a>Center 2</a></li>
	        </ul>
	        <ul class="nav pull-right">
	            <li><a>Right</a></li>
	        </ul>
	    </div>
	</div>

    <div id="content">
        	@yield('content')
    </div>
    <div id="footer">
    	<center>
    		&copy;Bountiful Flowers {{ date('Y')}}. This Website is Powered By: <a href="http://imanilabs.ml">IMANI Labs</a> and <a href="http://tildon.co.ke">Tildon Supplies </a>
    	</center>
    </div>
</body>
</html>