<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Latest Blog Posts</h1>
	<hr>

		@foreach ($blogs as $blog) 
			<section>
			<h3>{{ $blog->title }}</h3>
			<p>{{ $blog->body }}</p>
			<hr>
			</section>
		
		@endforeach


</body>
</html>