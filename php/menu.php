<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
	<a class="navbar-brand" href="index.php">
		<img class="logo_site" src="img/icons/site_logo/android-chrome-192x192.png" alt="Tieta_perfumaria">
		<span style="font-family: 'Metamorphous', cursive;">Tieta</span>&nbsp;&nbsp;&nbsp;<span style="font-family: 'Pinyon Script', cursive;">perfumaria</span>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Cabelo</a>
					<a class="dropdown-item" href="#">Pele</a>
					<a class="dropdown-item" href="#">Corpo</a>
					<a class="dropdown-item" href="#">Unhas</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Todas as categorias</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php#sale">Promoções</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php#sobre">Sobre nós</a>
			</li>
			<?php
				if(isset($_SESSION['user'])){
			?>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">$User 😉</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="client.php?status=client_data">Seus dados</a>
					<a class="dropdown-item" href="client.php?status=client_favs">Favoritos</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="logout.php">
						<button class="btn btn-block btn-outline-danger">Sair</button>
					</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="basket.php">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
					</svg>
				</a>
			</li>
			<?php
				}
				else{
			?>
			<li class="nav-item">
				<a class="nav-link" href="login.php">
					<button class="btn btn-block btn-outline-success">Faça login</button>
				</a>
			</li>
			<?php
				}
			?>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
</nav>
<div class="space-top">&nbsp;</div>