<?php
    class viewTeam
    {
        public function __construct(){}

        public function displayTeam()
        {
            ?>
            <!-- Première Section avec l'image en fond et le texte par dessus -->
			<section id="welcome" class="section ">
				<div class="img">
					<div class="text">
						<h2>Notre Equipe</h2>
					</div>
				</div>
				<br>
    		</section>  
    		<!-- Fin Première Section -->

			<section>
				<div class="container text-center">
				<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  					<div class="carousel-inner shadow">

						<!-- -->
    					<div class="carousel-item active" data-interval="10000">
							<div class="card text-center" style="display: flex; justify-content: center; align-items: center;">
  								<img class="card-img-top " src="public/img/travail équipe.png" alt="Equipe" style="width:25%;">
  								<div class="card-body">
								  	<h5 class="card-title">Équipe Salarié</h5>
    								<p class="card-text text-justify">L'équipe salariée des Ateliers Cord'âges est le moteur opérationnel de notre association. Composée de professionnels engagés et compétents, elle assure la mise en œuvre quotidienne de nos projets et événements. Grâce à leur expertise en gestion de projets, en animation et en communication, nos salariés veillent à la qualité et à l'impact de nos initiatives. Leur dévouement et leur dynamisme sont essentiels pour garantir le bon fonctionnement de l'association et pour offrir des activités enrichissantes et inclusives à notre communauté.</p>
  								</div>
							</div>
    					</div>

						<!-- -->
    					<div class="carousel-item" data-interval="2000">
							<div class="card text-center" style="display: flex; justify-content: center; align-items: center;">
  								<img class="card-img-top" src="public/img/travail bénévole.png" alt="Equipe" style="width:25%;">
  								<div class="card-body">
								  	<h5 class="card-title">Bénévole</h5>
    								<p class="card-text text-justify">Nos bénévoles sont le cœur battant des Ateliers Cord'âges. Ils apportent une diversité de compétences et de perspectives, enrichissant nos projets et nos événements. Que ce soit en animant des ateliers, en participant à l'organisation d'événements ou en soutenant les tâches administratives, les bénévoles jouent un rôle crucial dans la réalisation de notre mission. Leur engagement et leur générosité sont indispensables pour créer des liens intergénérationnels solides et pour faire vivre notre association au quotidien.</p>
  								</div>
							</div>
    					</div>

						<!-- -->
    					<div class="carousel-item">
							<div class="card text-center" style="display: flex; justify-content: center; align-items: center;">
  								<img class="card-img-top" src="public/img/travail équipe.png" alt="Equipe" style="width:25%;">
  								<div class="card-body">
								  	<h5 class="card-title">Conseil d'Administration</h5>
    								<p class="card-text text-justify">L'administration des Ateliers Cord'âges est composée de membres expérimentés et dévoués, qui assurent la gouvernance et la direction stratégique de l'association. Sous la direction de notre présidente, Marie Dupont, et avec le soutien de notre trésorier, secrétaire et autres membres du conseil d'administration, l'équipe veille à la bonne gestion de nos ressources et à la pérennité de nos actions. Leur vision et leur leadership permettent de définir les orientations de l'association et de garantir la réalisation de notre mission dans le respect de nos valeurs et de nos objectifs.</p>
  								</div>
							</div>
    					</div>

  					</div>
  					<a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    					<span class="visually-hidden">Previous</span>
  					</a>
  					<a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    					<span class="carousel-control-next-icon" aria-hidden="true"></span>
    					<span class="visually-hidden">Next</span>
  					</a>
				</div>
				</div>
			</section>
            <?php
        }
    }