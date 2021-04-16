<!DOCTYPE html>
<html>
<head>
	<title>Portfolio</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>




</head>

<body>
	<main>
		<section id="first">
			<div id="name">
				Abdallah Nabil <br /> Developpeur Web 
				<br/>
				<br/>
				<p id="info">Actuellement en formation à LaPlateforme_, actuellement a la rechercher  d'une alternance</p>
				<br/>
				

			</div>

			<div>
				
			</div>
		</section>
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
			
			<div class="collapse show navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#competences">Competences</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#projets">Projets</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
					</li>
					
				</ul>
			</div>
		</nav>

		<br />

		
		<div id="titleCompetence" class="reveal">
			<div class="title">
				Mes competences
			</div>
			
			<br />
		</div>

		<section id="competences">
			<div>
				<img src="img/html.png" width="200">
			</div>

			<div>
				<img src="img/css.png" width="150">
			</div>

			<div>
				<img src="img/php.png" width="200">
			</div>

			<div>
				<img src="img/mysql.png" width="200">
			</div>

			
		</section>

		<div id="titleProjet" class="reveal">
			<div class="title">
				Mes Projets
			</div>
			
		</div>

		

		<section id="projets">
			

			<div class="myProjets reveal">
				<img src="projet/videotheque/index.PNG" class="img">
				<div class="nameProjet reveal">
					<div class="textHover">
						<a href="projet/videotheque/videotheque.html"  target=" ">
							Videotheque
							
						</a>
					</div>
					
				</div>
			</div>
			

			<br />

			<div class="myProjets reveal">
				<img src="projet/fansite/index.PNG" class="img">
				<div class="nameProjet reveal ">
					<div class="textHover">
						<a href="projet/fansite/fansite.html"  target=" ">
							FanSite							
						</a>
					</div>
					
				</div>
			</div>

			
			
			<br />

			<div class="myProjets reveal">
				<img src="projet/forum/index.PNG" class="img">
				<div class="nameProjet reveal ">
					<div class="textHover">
						<a href="projet/forum/index.php" target=" ">
							Anime Forum
						</a>
					</div>
					

				</div>
			</div>

			

			<br />

			<div class="myProjets reveal">
				<img src="projet/camping/index.PNG" class="img">
				<div class="nameProjet reveal">
					<div class="textHover">
						<a href="projet/camping/index.php" target=" ">
							Les Happy Sardines
						</a>
					</div>
					

				</div>
			</div>

			

			<br />

			<div class="myProjets reveal" >
				<img src="projet/reservation-salle/index.PNG" class="img">
				<div class="nameProjet reveal">
					<div class="textHover">
						<a href="projet/reservation-salle/index.php" target=" ">
							Réservation Salle
						</a>
					</div>

					


				</div>
			</div>


			<br />

			<div class="myProjets reveal">
				<img src="projet/boutique/boutique.PNG" class="img">
				<div class="nameProjet reveal ">
					<div class="textHover">
						<a href="projet/boutique/index.php" target=" ">
							Unlucky Market
						</a>
					</div>

					

				</div>
			</div>

			<br />

		</section>
		<br />

		<div id="titleContact" class="reveal">
			<div class="title">
				Me contacter
			</div>


		</div>

		<section id="contact">
			<div id="infoContact">
				<div>
					<img src="img/telephone.png" width="20">06-56-71-62-40
					<img src="img/mail.png" width="30">nabil.abdallah211@gmail.com
				</div>			
			</div>

			<section id="contactMe">
				<form method="post" action="" id="formulaireContact">
					<label>Votre e-mail</label>
					<br />
					<input type="email" name="email" required id="email">
					<br />

					<label>Sujet</label>
					<br />
					<input type="text" name="sujet" required id="sujet">
					<br />
					
					<label>Message</label>
					<br />
					<textarea name="message" style="resize: none;" rows="8" cols="25" id="message"></textarea>
					<br />
					<br />

					<input type="submit" name="send">
				</form>
				<?php
				if (isset($_POST['send'])) 
				{
					if (isset($_POST['message'])) 
					{
						$positionArobase = strpos($_POST['email'], '@');
						if ($positionArobase === false) 
						{
							echo "Votre email doit comporter un arobase";
						}
						else
						{
							$retour = mail('nabil.abdallah211@gmail.com', $_POST['sujet'], $_POST['message'], 'From: ' . $_POST['email']);
							if($retour)
							{
								echo '<p>Votre message a été envoyé.</p>';
								$_POST['email'] = '';
								$_POST['suejt'] = '';
								$_POST['message'] = '';
							}
							else
							{
								echo '<p>Erreur.</p>';
							}
						}
						
						$_POST['email'] = '';
						$_POST['suejt'] = '';
						$_POST['message'] = '';

					}
				}

				?>

				
			</section>
			
		</section>

		
	</main>
	<script>

		const ratio = .1

		const options = {
			root: null,
			rootMargin: '0px',
			threshold: ratio
		}
		const handleIntersect = function (entries, observer) {
			entries.forEach(function (entry) {
				if (entry.intersectionRatio > ratio) {
					entry.target.classList.add('revealVisible')
					observer.unobserve(entry.target)
				}
				else
				{

				}

			})

		}


		const observer = new IntersectionObserver(handleIntersect, options);

		document.querySelectorAll('.reveal').forEach(function (r) {
			observer.observe(r)
		})

	</script>

</body>
</html>