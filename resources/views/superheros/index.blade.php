@extends('app')
@section('content')
<div class="container">
	<div class="content">
		<style>
			.superhero-list {
				background: white;
				padding:2em;
				border-radius: 2em;
			}
			.superhero-item {
				vertical-align: middle;
				margin-bottom: .5em #555;
			}
			.superhero-item img {
				width: 5em;
				height: 5em;
			}
			.superhero-item span {
				padding: 1em;
				font-size: 24px;
				color: black;
				word-wrap: normal;
			}
		</style>
		<div class="title little-title">Superheros Database</div>
		<div class="sections">
			<ul>
				<li><a href="{{ url('/') }}">Home</a></li>
				<li><a href="{{ url('/superheros') }}">List</a></li>
				<li><a href="{{ url('/superheros/create') }}">Create</a></li>
				<li><a href="{{ url('/about') }}">About</a></li>
			</ul>
		</div>
		<div class="superhero-list">
			<?php foreach ($superheros as $sh): ?>
				<div class="superhero-item">
					<a href='{{ url("/superheros/{$sh->id}") }}'>
						<img src="https://www.google.com/images/srpr/logo11w.png" />
						<span><?php echo $sh->nickname; ?></span>
						<span class="superhero-img" />
					</a>
				</div>
			<?php endforeach; ?>
		</div>
		<?php if (method_exists($superheros,'render')) echo $superheros->render(); ?>
	</div>
</div>
@endsection
