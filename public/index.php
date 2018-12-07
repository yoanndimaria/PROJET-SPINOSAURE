<?PHP $login = 1; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>MA TABLE</title>
	<?PHP require('./tpl/head.php'); ?>
</head>
<body>
	<?PHP require('./tpl/header.php'); ?>
<section id="home">
<div id="top" class="container">
    <div class="bottom">
        <div class="botright">
            <h1>Fidéliser vos clients</h1>
            <p>Ma Table, Service complet pour fidéliser vos clients</br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Accusamus consectetur temporibus voluptatibus. Culpa,
                <br> cupiditate, neque! Aliquid commodi cumque dolorum earum inventore iste <br>minus recusandae reprehenderit rerum sit. Aut, necessitatibus quis.</p>

        </div>
     </div>
</div>
	</section>
	<section id="presentation">
	    <div class="txtCenter">
	        <h1>THE RESCUE SQUAD’S ACHIEVEMENTS</h1>
	        <div class="textBottom">
	            Créez immédiatement votre compte restaurant Ma Table
Puis, en quelques clics, vous créez votre site internet personnalisé, en suivant les étapes permettant de décrire votre établissement

	        </div>
	    </div>
	</section>
	<section id="presentation2">
		<div class="containerimg">
			<div class="imgText">
			    <div class="imgPlacement">
			        <div class="imgContent Reservation"></div>
			        <!-- <span class="number"> 987 532</span> -->
			        <span class="description ">Réservation :  Suivez vos réservations en temps réel.</span>
			    </div>
			    <div class="imgPlacement">
			        <div class="imgContent Gestion"></div>
			        <!-- <span class="number"> 987 532</span> -->
			        <span class="description ">Gérez votre restaurant en toute sérénité</span>
			    </div>
			    <div class="imgPlacement">
			        <div class="imgContent Fidelisation"></div>
			        <!-- <span class="number"> 987 532</span> -->
			        <span class="description ">Fidélisation : Bienvenue !
					Profitez du programme fidélité en bénéficiant d’une réduction de -10% sur votre première création de compte</span>
			    </div>
			</div>


		</div>
	</section>
	<section id="message">
    <div id="contentLeft">
        <div id="textMessage">
            <h3>Propinqua campestrem diu sed magnis</h3>
            <p>
                Propinqua campestrem diu sed magnis quidem milite cum magnis Pamphyliam latrones deviis
                intactam et intactam inpares milite praesidiis magna cum magna populationum petivere igitur
                tramitibus magnis propinqua frequentibus caedium sed latrones Pamphyliam magna parte diu
            </p>
        </div>
    </div>
    <div id="contentRight">
        <div >
			<img id="imgMessage" src="/images/menu.svg" alt="">
        </div>
    </div>
</section>
	<section id="form">
		<h2>Ajouter votre établissement</h2>
		<div class="container">
	        <input type="text" class="placement" placeholder="Nom de l'établissement">
	        <input type="text" class="placement" placeholder="Adresse email">
	        <input type="text" class="placement" placeholder="Tagline (facultatif)">
	        <input type="text" class="placement" placeholder="Code postal">
	        <input type="text" class="placement" placeholder="Ville">
	        <input type="text" class="placement" placeholder="Nom et numéro de rue">
	        <input type="submit" class="placement" value="Envoyer">
	    </div>
	</section>
	<?PHP require('./tpl/footer.php'); ?>
</body>
</html>