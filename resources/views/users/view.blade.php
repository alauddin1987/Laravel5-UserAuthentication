@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">User Home</div>

				<div class="panel-body">
				<h1>{{ Auth::user()->name }}</h1>
				<h2>{{ Auth::user()->email }}</h2>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
