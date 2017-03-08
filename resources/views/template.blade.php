<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Alumni Program Studi Akuntansi UMMI</title>

		{{-- Memanggil CSS --}}
		<link rel="stylesheet" type="text/css" href="{{ asset('foundation/css/foundation.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/main1.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('font-awesome/css/font-awesome.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

		{{-- Jika browser IE --}}
		<!--[if lt IE 9]>
		<script scr="{{ asset('js/html5shiv_3_7_2.min.js') }}"></script>
		<script scr="{{ asset('js/respond_1_4_2.min.js') }}"></script>
		<![endif]-->
	</head>
	<body>
		<div class="root">
			<div class="vbox wb_container" id="wb_header">
				{{-- judul --}}
				@include('header')
				
				{{-- logo --}}
				@include('logo')
			</div>
			
			{{-- main body--}}
			<div class="vbox wb_container" id="wb_main">
				{{-- menu menu --}}
				@include('navbar')	
				@include('side-nav')
				
				{{-- spasi/body--}}
				@include('space-body')

				{{-- main body --}}
				@yield('main')
			</div><!-- .container-->
				{{-- footer --}}
				@include('footer')
		</div>

		{{-- Memanggil JS --}}
		<script src="{{ asset('foundation/js/vendor/jquery.js') }}"></script>
		<script src="{{ asset('foundation/js/vendor/what-input.min.js') }}"></script>
		<script src="{{ asset('foundation/js/vendor/foundation.min.js') }}"></script>
		<script src="{{ asset('/js/style.js') }}"></script>

		<script>
			$ (document) .foundation();
		</script>
	</body>
</html>