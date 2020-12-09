<nav class="navbar fixed-top navbar-expand-lg navbar-dark" id="topnav">
	<div class="topnav-centered">
		<a href="index.php">
			<img id="logonav" src="files/img/favicon/logonav.png">
		</a>
	</div>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORIAS</a>
				<form id="category_menu_list_data_request">
					<input type="hidden" name="form_action" value="category_menu_list">
				</form>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown" id="category_menu_list"></div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php#sale">SOBRE</a>
			</li>
			<?php
				if(isset($_SESSION['cd_client'])){
			?>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Olá <?php echo $_SESSION['ds_client_user']; ?>! 😉</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			<?php
					if($_SESSION['st_client_admin'] == 0){
			?>
					<a class="dropdown-item" href="client.php?page=client_data">Seus dados</a>
					<a class="dropdown-item" href="client.php?page=client_favs">Favoritos</a>
					<a class="dropdown-item" href="client.php?page=client_favs">Meus pedidos</a>
			<?php
					}
					if($_SESSION['st_client_admin'] == 1){
			?>
					<a class="dropdown-item" href="admin.php?page=admin_panel">Painel de administração</a>
					<a class="dropdown-item" href="admin.php?page=admin_data">Seus dados</a>
			<?php
					}
			?>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="php/logout.php">
						<button class="btn btn-block btn-outline-danger">Sair</button>
					</a>
				</div>
			</li>
			<?php
				}
				else{
			?>
			<li class="nav-item">
				<a class="nav-link" href="login.php">LOGIN</a>
			</li>
			<?php
				}
			?>
		</ul>
		<div class="row">
			<form class="form-inline my-2 my-lg-0" id="search">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn my-2 my-sm-0" type="submit"><img src="https://www.pinclipart.com/picdir/big/34-346187_vector-royalty-free-bottoms-clip-skirt-search-png.png"></button>
			</form>
		</div>
		<a class="nav-link" href="basket.php">
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
			</svg>
		</a>	
	</div>
</nav>
<div class="space-top">&nbsp;</div>