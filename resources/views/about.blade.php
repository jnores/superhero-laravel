
@extends('app')
@section('content')
<div class="container">
	<div class="content">
		<div class="title">Superheros Database</div>
		<div class="sections">
			<ul>
				<li><a href="{{ url('/') }}">Home</a></li>
				<li><a href="{{ url('/superheros') }}">List</a></li>
				<li><a href="{{ url('/superheros/create') }}">Create</a></li>
				<li><a href="{{ url('/about') }}">About</a></li>
			</ul>
		</div>
		<div class="quote">It's a database from Superheros implemented in Laravel.</div>
	</div>
</div>
@endsection
