<!DOCTYPE html>

<html>
	<?php include("PHP/head.php") ?>

	<body>
		<div class ="page">
			<?php include("PHP/navbar.php") ?>


			<header>
				<div class= "container entete">
					<div class="row justify-content-center">
						<article class="col-md-auto nomproduit">
							<h1>Nom de l'article</h1>	
						</article> 
					</div>
					
				</div>
			</header>

			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-2">
						<div class="form-group">
						    <label for="exampleFormControlSelect1">TAILLE (US)</label>
					    	<select class="form-control" id="exampleFormControlSelect1">
					      		<option value="4">4</option>
					      		<option value="4.5">4.5</option>
					      		<option value="5">5</option>
					      		<option value="5.5">5.5</option>
					      		<option value="6">6</option>
					      		<option value="6.5">6.5</option>
					      		<option value="7">7</option>
					      		<option value="7.5">7.5</option>
					      		<option value="8">8</option>
					      		<option value="8.5">8.5</option>
					      		<option value="9">9</option>
					      		<option value="9.5">9.5</option>
					      		<option value="10">10</option>
					      		<option value="10.5">10.5</option>
					      		<option value="11">11</option>
					      		<option value="11.5">11.5</option>
					      		<option value="12">12</option>
					      		<option value="12.5">12.5</option>
					      		<option value="13">13</option>
					      		<option value="13.5">13.5</option>
					      		<option value="14">14</option>
					      		<option value="14.5">14.5</option>
					      		<option value="15">15</option>
						    </select>
						</div>
					</div>
					<div class="col-md-8 photoproduit">
						<img src="logo/yeezy.jpg">
					</div>
					<div class="col-md-2">
						<div class="container boutonA-V	">
							<div class="row">
								<button type="button" class="btn btn-primary btn-block">Acheter</button>
								<button type="button" class="btn btn-primary btn-block">Vendre</button>	
							</div>
							
						</div>
					</div>
				</div>
				<div class="row">
					<h2>
						Informations sur le produits:</br>
					</h2>
				</div>
				<div class="row">
					<h3>
						Marque(s): "Nom de la/les marque(s)" </br>
						Date de sortie : "JJ/MM/AAAA"</br>
						Prix de sortie : "xxx €"</br>
						Code unique : "XXXXXXXX"

					</h3>
				</div>
					
				
			</div>

			<?php include("PHP/footer.php") ?>
				
			
		</div>
		
	
	</body>


</html>
