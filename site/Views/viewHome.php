<?php
	class viewHome
	{
		public function __construct()
		{
			
		}

        // Ces templates sont à utiliser pour réaaliser les sections en fonction de la BD 

		public function displayWelcome()
		{
			?>

			<!-- Première Section avec l'image en fond et le texte par dessus -->
			<section id="welcome" class="section ">
				<div class="img shadow">
					<div class="text">
						<h2>Bienvenue sur le site de l'association des Ateliers Cord'âges </h2>
					</div>
				</div>
				<br>
				<div class="container-xxl shadow animated-element">
					<div class="row"></div>
                		<div class="col text-center">
                    		<br><h3 class="mb-3">Présentation</h3>
                		</div>
						<p>Nous sommes une association reconnue <b>d’intérêt général dédiée à la lutte contre l’isolement</b>. Unique en France, notre mission est de cultiver le <b>lien social</b>, <b>la bienveillance</b> et <b>la tolérance</b> au cœur de notre action. À travers nos ateliers et nos initiatives, nous œuvrons chaque jour pour créer un environnement où chacun se sent <b>accueilli</b>, <b>soutenu</b> et <b>valorisé</b>. 
						Que vous soyez une personne âgée, en situation de handicap ou simplement en quête de compagnie, nous sommes là pour vous offrir un espace où vous pourrez vous <b>épanouir</b>, <b>échanger</b> et <b>tisser des liens durables</b>. <br><br>
						Rejoignez-nous dans cette belle aventure de solidarité et de partage. Ensemble, faisons de chaque jour une occasion de construire un monde où personne ne se sentira seul. Explorez notre site pour en savoir plus sur nos activités, nos événements à venir et comment vous pouvez vous impliquer. </p><br><br>
            		</div>
				</div>
    		</section><br>
    		<!-- Fin Première Section -->
			
			
			<?php
		}

        // Section Valeurs / Histoire / Missions
        public function displayAbout()
        {
            ?>
            <br>
            <section>
                <div class="container-xxl text-center ">
                    <div class="row">

                    <div class="col-sm animated-element">
                            <img src="public/img/histoire.png" alt="" class="shadow-lg p-3 mb-5 bg-white rounded" style="width: 50%;"><br>
                            <h4>Notre histoire</h4><br>
                            <p><b>En 2015</b>, Marie et Véronique décident de fonder l'association les Ateliers Cord’âges et de concrétiser un projet qu'elles avaient mûrement réfléchi : la création d’une maison de rencontres, de loisirs et de stimulations innovant, centré sur la citoyenneté et le vivre-ensemble...</p><br>
                            <a href="index.php?view=history&action=display">En savoir plus</a>
                        </div>

                        <div class="col-sm animated-element">
                            <img src="public/img/valeurs.PNG" alt="" class="shadow-lg p-3 mb-5 bg-white rounded" style="width: 50%;"><br>
                            <h4>Nos valeurs</h4><br>
                            <p><b>Des solutions adaptées </b>: bien plus qu'une maison, un lieu de vie où une famille XXL vous acceuille chaleureusement, nourissant le réconfort à travers l'entraide et la convivialité...</p><br>
                            <a href="index.php?view=value&action=display">En savoir plus</a>
                        </div>

                        <div class="col-sm animated-element">
                            <img src="public/img/missions.png" alt="" class="shadow-lg p-3 mb-5 bg-white rounded" style="width: 50%;"><br>
                            <h4>Nos Missions</h4><br>
                            <p><b>Les Ateliers Cord'âges</b> ont pour mission de promouvoir le bien-être et la socialisation de leurs adhérents en proposant une variété d'activités. Ces activités comprennent des loisirs créatifs, des jeux de société, des sorties culturelles… Offrant ainsi un espace convivial où les participants peuvent se rencontrer, échanger et tisser des liens sociaux...</p><br>
                            <a href="index.php?view=mission&action=display">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </section>

            <?php
        }

        // Section Equipe 
		public function displayTeam()
		{
			?>
			<br>
			<!-- Partie Equipe -->

            <section id="team" class="pt-5 pb-5 bg-team">
                <h3 class="text-center text-light"><u><b>Notre équipe</b></u></h3><br>
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-3 g-4">

                        <div class="col">
                            <div class="card h-100">
                                <img src="public/img/team playing.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Salarié</h5>
                                    <p class="card-text">L'équipe salariée des Ateliers Cord'âges assure la mise en œuvre quotidienne de nos projets, garantissant des activités de qualité et un impact positif sur la communauté.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <img src="public/img/travail bénévole.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Bénévole</h5>
                                    <p class="card-text">Nos bénévoles, au cœur de notre action, apportent énergie et créativité, enrichissant nos projets et tissant des liens intergénérationnels précieux.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <img src="public/img/travail équipe.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Conseil d'administration</h5>
                                    <p class="card-text">Le conseil d'administration dirige stratégiquement l'association, assurant une gestion efficace et pérenne, tout en orientant nos actions vers une mission de solidarité intergénérationnelle.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>
                    <a href="index.php?view=team&action=display" class="text-decoration-none text-end text-light"><h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5"/>
                    </svg>    
                    <u>Et plus encore...</u></h5></a>
                </div>
            </section>
            <?php
		}

        public function displayPartner($listLogo)
        {
            $logos = explode('|', $listLogo);

            // On créer une liste avec les chemins des logos directement via le conteneurs logos
            $partners = array();
            for ($i = 1; $i < count($logos); $i += 4) {
                $partners[] = array('logo_path' => $logos[$i + 1]);
            }

            ?>
            <br><br>
            <h4 class="text-center"><a href="index.php?view=partner&action=display" class="link-dark text-decoration-none"><i><u>Ils nous soutiennent !</u></i></a></h4>
            <div class="container-xxl">
        <div class="row">
            <div class="col-md-12">
                <div class="lc-block">
                    <div id="carouselLogos" class="carousel slide pt-5 pb-4" data-bs-ride="carousel">

                        <div class="carousel-inner px-5">
                        <!-- Boucle séparant par groupe de 6 logo pour l'affichage -->
                        <?php $i = 0; ?>
                        <?php foreach ($partners as $partner) { ?>
                            <?php if ($i % 6 == 0) { ?>
                                <div class="carousel-item <?= $i == 0 ? 'active' : '' ?>">
                                    <div class="row">
                            <?php } ?>
                                <div class="col-6 col-lg-2 align-self-center">
                                    <img class="d-block w-100 px-3 mb-3" src="<?= $partner['logo_path'] ?>" alt="">
                                </div>
                            <?php if (($i + 1) % 6 == 0 || $i == count($partners) - 1) { ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php $i++; ?>
                        <?php } ?>
                            </div>

                        <div class="w-100 px-3 text-center mt-4">
                            <a class="carousel-control-prev position-relative d-inline me-4" href="#carouselLogos" data-bs-slide="prev">
                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="text-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                                </svg>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next position-relative d-inline" href="#carouselLogos" data-bs-slide="next">
                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="text-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                </svg>
                                <span class="visually-hidden">Next</span>
                            </a>





                        </div>


                    </div>
                </div><!-- /lc-block -->
            </div><!-- /col -->
        </div>
    </div>

    

            <?php
        }

	}
?>