<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Alumni Program Studi Akuntansi UMMI</title>

		{{-- Memanggil CSS --}}
		<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('foundation/css/foundation.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/admin-nav.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('font-awesome/css/font-awesome.css') }}">

		{{-- Jika browser IE --}}
		<!--[if lt IE 9]>
		<script scr="{{ asset('js/html5shiv_3_7_2.min.js') }}"></script>
		<script scr="{{ asset('js/respond_1_4_2.min.js') }}"></script>
		<![endif]-->
	</head>
	<body>
		<div class="row full">
			{{--navbar--}}
		 	@include('admin-navbar')
		 	{{--sidebar--}}
		 	@include('admin-side-nav')

			<div class="content medium-12 large-9 columns">
			 	{{--breadcrum--}}
			 	@include('admin-breedcrum')
			 	{{--info--}}
			 	@include('admin-info')
			 	{{--index--}}
			 	@yield('main')
            </div>
    	</div>
		
			@yield('footer')

		{{-- Memanggil JS --}}
		<script src="{{ asset('foundation/js/vendor/jquery.js') }}"></script>
		<script src="{{ asset('foundation/js/vendor/what-input.min.js') }}"></script>
		<script src="{{ asset('foundation/js/vendor/foundation.min.js') }}"></script>
		<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
		<script>
			$ (document) .foundation();
		</script>
	</body>
</html>