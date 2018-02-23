@extends('layouts.app')
@section('content')


<main class='container'>

	<div class='container-fluid'>
		<div class='col-sm-6 text-center col-sm-offset-3 container-fluid'>
			<div class='jumbotron text-align-center'>
				<h1>Create a Blog Post</h1>
			</div>
		</div>
	</div>
	<div class='row'>
		<div class='col-sm-10 col-sm-offset-1'>
			{!! Form::open(['method' => 'POST', 'action' => 'BlogController@store']) !!}
				<div>
				    {!! Form::label("title", "Title:") !!}
				    {!! Form::text("title", null, ["class" => "form-control"])	!!}
				</div>
				<div>
					{!! Form::label("body", "Body:") !!}
					{!! Form::textarea("body", null, ["class" => "form-control"]) !!}
				</div>
				<div>
					{!! Form::submit("Submit Blog Post", ["class" => "btn btn-primary"]) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>

</main>


@endsection