<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<title>Praktikum PWF</title>

		<link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
	</head>
	<body>
    {{-- Navbar --}}
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Website Saya</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/form') }}">Mau Kenalan?</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/profile') }}">Profil</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/pesan') }}">Pesan</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

    {{-- Content --}}
    @yield('content')
		
		<script src="{{ asset('assets/bootstrap/bootstrap.min.js') }}"></script>
	</body>
</html>