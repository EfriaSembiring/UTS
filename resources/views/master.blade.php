<!DOCTYPE html>
<html>
<head>
	<title>View Master</title>
</head>
<body>
	<header>
		<h2> View </h2>
<nav>	
<a href="/home">Home</a> >
<a href="/about">About</a> >
<a href="/article">Article</a>
</nav>
</header>
<hr/>
<br/>


<h3> @yield('judulHalaman') </h3>

@section('konten')
@show
<br>
<br>
<footer>
	<p>Efria Sembiring</p>
</footer>

</body>
</html>