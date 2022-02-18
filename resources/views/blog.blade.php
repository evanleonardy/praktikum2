<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
</head>
<body>

	<header>

		<h2>HAI</h2>
		<nav>
			<a href="/blog">HOME</a>
			|
			<a href="/blog/tentang">TENTANG</a>
			|
			<a href="/blog/kontak">KONTAK</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>

	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>


	<!-- bagian konten blog -->
	@yield('konten')


	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="#">Anda Ganteng</a>. 2022-2030</p>
	</footer>

</body>
</html>
