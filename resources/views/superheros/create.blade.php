@extends('app')

@section('content')
<div class="container">
	<div class="content">
		<div class="title little-title">Superheros Database</div>
		<!-- <div class="quote">{{ Inspiring::quote() }}</div> -->
		<div class="sections">
			<ul>
				<li><a href="{{ url('/') }}">Home</a></li>
				<li><a href="{{ url('/superheros') }}">List</a></li>
				<li><a href="{{ url('/superheros/create') }}">Create</a></li>
				<li><a href="{{ url('/about') }}">About</a></li>
			</ul>
		</div>
		<div class="panel-body">
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<style>
			form label{
				float: left;
				font-size: 18px;
				font-weight: bold;
			}
			form input{
				font-weight: bold;
				font-size: 16px;
				color: #CCC;
			}
			form .btn-primary {
				font-weight: bold;
			}
			</style>
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/superheros') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label class="col-md-4 control-label">Nickname</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name" value="{{ old('nickname') }}">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Real name</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="real_name" value="{{ old('real_name') }}">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Origin</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="origin_description" value="{{ old('origin_description') }}">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Superpowers</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="superpowers" value="{{ old('superpowers') }}">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Catch phrase</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="catch_phrase" value="{{ old('catch_phrase') }}">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Photos</label>
					<div class="col-md-6">
						<input type="file" accept="image/*" class="form-control" name="photos[]" multiple>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-primary">
							Agregar
						</button>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>
@endsection
