<div class="col-md-4"></div>
<div class="col-md-4">
	<center><h2>Promoções</h2></center>
</div>
<div class="col-md-4"></div>
<div class="row">
	<?php
		$i = 1;
		while($i<=6){
			echo "<div class='col-sm-4'>
			<div class='card' style='width: auto;'>
			<img class='card-img-top' src='https://unsplash.it/400/400?image=1' alt='Card image cap'>
			<div class='card-body'>
				<h5 class='card-title'>Nome do produto</h5>
				<p class='card-text'>A descrição do produto</p>
				<a href='#' class='btn btn-primary'>Veja mais!</a>
			</div>
		</div></div>";
		$i++;
		}
	?>
</div>
