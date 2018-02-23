@extends('layouts.app')
@section('content')


<main class='container'>

	<div class='container-fluid'>
		<div class='col-sm-6 text-center align-self-center container-fluid'>
			<div class='jumbotron text-align-center'>
				<h1>{{ $blog->title }}</h1>
			</div>
		</div>
	</div>
	<div class='row'>
		<div class='col-sm-12'>
				<section>
				<p>{{ $blog->body }}</p>
				</section>
		</div>
	</div>

</main>


@endsection