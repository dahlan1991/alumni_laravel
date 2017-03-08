@extends('template')

@section('main')
	<div id="home">
		<h2>Home</h2>
		<p>Selamat datang di halaman pencarian Alumni.</p>
		<p class="text-justify">Website ini merupakan Sistem Informasi Alumni. Diharapkan para alumni untuk selalu mengupdate data-data profil pribadi. Carilah data Anda dengan mencari nama Anda berikut ini :</p>
		{!! Form::open(['url' => 'cari']) !!}
			<div class="row menu-centered">
				<ul class="menu">
						<li>{!! Form::text('q', 'search') !!}</li>
			      		<li>{!! Form::submit('Search', ['class' => 'button']) !!}</li>
		      	</ul>
	      	</div>
	    {!! Form::close() !!}
	    </form>
	</div>

@stop

