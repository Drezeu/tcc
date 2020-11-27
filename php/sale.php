<div class="col-md-4"></div>
<div class="col-md-4">
	<center>
		<h2>Promoções</h2>
		<button type="button" class="btn btn-outline-light border-white bg-white" data-toggle="collapse" data-target="#demo">
			<img src="https://static.wixstatic.com/media/08ec88_9d69e542e32f4367a159dd86fa8f3ad2~mv2.gif" width="80" height="70">
		</button>
	</center>
</div>
<div class="col-md-4"></div>
</div>
<br>
<div class="sale-container">
	<div id="demo" class="collapse">
		<div class="row">
			<?php
				$i = 1;
				while($i<=3){
					echo "<div class='col-sm-4'>
					<div class='card' style='width: auto;'>
					<img class='card-img-top' src='https://sephora.estatico.com.br/resize/1800x1800/catalog/product/6/5/65142431_8411061944202_skr_sweet_dream_edt_ns_80ml_2756x3543_1500px.jpg' alt='Card image cap'>
					<div class='card-body'>
					<h5 class='card-title'>Sweet Dream</h5>
					<p class='card-text'>R$80,00</p>
					<a href='#' class='btn btn-outline-dark'>Veja mais!</a>
					</div>
					</div></div>";
					$i++;
				}
			?>
		</div>
	</div>
</div>