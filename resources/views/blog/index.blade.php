@extends('layouts.app')
@section('content')


<main class='container'>

	<div class='container-fluid'>
		<div class='col-sm-6 text-center justify-content-sm-center'>
			<div class='jumbotron text-align-center'>
				<h1>Latest Blog Posts</h1>
			</div>
		</div>
	</div>
	<div class='row'>
		<div class='col-sm-12'>
			@foreach ($blogs as $blog) 
				<section>
				<h3>{{ $blog->title }}</h3>
				<p>{{ $blog->body }}</p>
				<hr>
				</section>
			@endforeach
		</div>
	</div>

</main>


@endsection