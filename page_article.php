<!DOCTYPE html>

<html>
	<?php include("head.php") ?>

	<body>
		<div class ="page">
			<?php include("navbar.php") ?>


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
					      		<option>4</option>
					      		<option>4.5</option>
					      		<option>5</option>
					      		<option>5.5</option>
					      		<option>6</option>
					      		<option>6.5</option>
					      		<option>7</option>
					      		<option>7.5</option>
					      		<option>8</option>
					      		<option>8.5</option>
					      		<option>9</option>
					      		<option>9.5</option>
					      		<option>10</option>
					      		<option>10.5</option>
					      		<option>11</option>
					      		<option>11.5</option>
					      		<option>12</option>
					      		<option>12.5</option>
					      		<option>13</option>
					      		<option>13.5</option>
					      		<option>14</option>
					      		<option>14.5</option>
					      		<option>15</option>
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

			<?php include("footer.php") ?>
				
			
		</div>
		
	
	</body>


</html>
