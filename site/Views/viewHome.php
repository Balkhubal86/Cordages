<?php
	class viewHome
	{
		public function __construct()
		{
			$this->displayWelcome();
			// $this->displayHistory();
			// $this->displayValues();
			// $this->displayMission();
            $this->displayAbout();
			$this->displayTeam();
            $this->displayPartner();
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
				<div class="container shadow">
					<div class="row"></div>
                		<div class="col text-center">
                    		<br><br><h3 class="mb-3">Présentation</h3>
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

		public function displayHistory()
		{
			?>
			<br>
			<!-- Partie Histoire -->
			<section id="history" class="section">
    			<div class="container">
        			<div class="row">
        				<div class="col-6">
            				<h3 class="mb-3">Notre Histoire </h3>
                            
        				</div>
        			</div>
        		</div>
			</section>
    		<!-- Fin Histoire -->

			<?php
		}

		public function displayValues()
		{
			?>
			<br><br>
			<!-- Partie Valeurs -->
			<section id="values" class="section">
        		<div class="container">
            		<div class="row"></div>
                		<div class="col-6">
                    		<h3 class="mb-3">Nos Valeurs</h3>
                		</div>
            		</div>
        		</div>
    		</section>
    <!-- Fin Valeurs -->

			<?php
		}

		public function displayMission()
		{
			?>
			<br><br>
			<!-- Partie Missions -->
			<section id="mission" class="section">
        		<div class="container">
            		<div class="row">
                		<div class="col-6">
                    		<h3 class="mb-3">Nos Missions</h3>
                		</div>
            		</div>
        		</div>
    		</section>

			<?php

		}

        public function displayAbout()
        {
            ?>
            <br>
            <section>
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <img src="public/img/logo point d'interrogation.jpg" alt="" class="shadow-lg p-3 mb-5 bg-white rounded" style="width: 50%;"><br>
                            <h4>Nos valeurs</h4><br>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis molestiae id, rem debitis impedit ea tempora nam nulla quam suscipit esse. Odit voluptate, nesciunt a iure consectetur fugiat exercitationem perspiciatis.</p><br>
                            <a href="index.php?view=value">En savoir plus</a>
                        </div>

                        <div class="col">
                            <img src="public/img/logo point d'interrogation.jpg" alt="" class="shadow-lg p-3 mb-5 bg-white rounded" style="width: 50%;"><br>
                            <h4>Notre histoire</h4><br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt rem dolorem reprehenderit iusto repellendus sapiente molestiae hic eligendi eos aut quasi quibusdam cumque, repudiandae voluptatibus eaque, nihil fugiat dicta aspernatur!</p><br>
                            <a href="index.php?view=history">En savoir plus</a>
                        </div>

                        <div class="col">
                            <img src="public/img/logo point d'interrogation.jpg" alt="" class="shadow-lg p-3 mb-5 bg-white rounded" style="width: 50%;"><br>
                            <h4>Nos Missions</h4><br>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus facere harum unde dignissimos laudantium fuga eaque iure maiores voluptatum. Consectetur architecto, voluptatibus repellendus non ab nam quibusdam veritatis. Illum, sint.</p><br>
                            <a href="index.php?view=mission">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </section>

            <?php
        }

		public function displayTeam()
		{
			?>
			<br>
			<!-- Partie Equipe -->
    <section id="team" class="pt-5 pb-5 bg-team">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3 text-white">Notre Equipe</h3>
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-light mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-light mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card shadow rounded" style="width: 25rem;">
                                        <img class="img-fluid" alt="100%x280" src="public/img/jhon doe.avif">
                                        <div class="card-body">
                                            <h4 class="card-title">Nom Prénom Personne 1</h4>
                                            <p class="card-text">Intitulé Poste</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow rounded" style="width: 25rem;">
                                        <img class="img-fluid" alt="100%x280" src="public/img/jhon doe.avif">
                                        <div class="card-body">
                                            <h4 class="card-title">Nom Prénom Personne 2</h4>
                                            <p class="card-text">Intitulé Poste</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow rounded" style="width: 25rem;">
                                        <img class="img-fluid" alt="100%x280" src="public/img/jhon doe.avif">
                                        <div class="card-body">
                                            <h4 class="card-title">Nom Prénom Personne 3</h4>
                                            <p class="card-text">Intitulé Poste</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card shadow rounded" style="width: 25rem;">
                                        <img class="img-fluid" alt="100%x280" src="public/img/jhon doe.avif">
                                        <div class="card-body">
                                            <h4 class="card-title">Nom Prénom Personne 4</h4>
                                            <p class="card-text">Intitulé Poste</p>

                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <div class="card shadow rounded" style="width: 25rem;">
                                        <img class="img-fluid" alt="100%x280" src="public/img/jhon doe.avif">
                                        <div class="card-body">
                                            <h4 class="card-title">Nom Prénom Personne 5</h4>
                                            <p class="card-text">Intitulé Poste</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow rounded" style="width: 25rem;">
                                        <img class="img-fluid" alt="100%x280" src="public/img/jhon doe.avif">
                                        <div class="card-body">
                                            <h4 class="card-title">Nom Prénom Personne 6</h4>
                                            <p class="card-text">Intitulé Poste</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card shadow rounded" style="width: 25rem;">
                                        <img class="img-fluid" alt="100%x280" src="public/img/jhon doe.avif">
                                        <div class="card-body">
                                            <h4 class="card-title">Nom Prénom Personne 7</h4>
                                            <p class="card-text">Intitulé Poste</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow rounded" style="width: 25rem;">
                                        <img class="img-fluid" alt="100%x280" src="public/img/jhon doe.avif">
                                        <div class="card-body">
                                            <h4 class="card-title">Nom Prénom Personne 8</h4>
                                            <p class="card-text">Intitulé Poste</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow rounded" style="width: 25rem;">
                                        <img class="img-fluid" alt="100%x280" src="public/img/jhon doe.avif">
                                        <div class="card-body">
                                            <h4 class="card-title">Nom Prénom Personne 9</h4>
                                            <p class="card-text">Intitulé Poste</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="index.php?view=team" class="link-light">En savoir plus</a>
    </div>
</section>
<?php
		}

        public function displayPartner()
        {
            ?>
            <br>
            <h4 class="text-center">Ils nous soutiennent</h4>
            <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="lc-block">
                    <div id="carouselLogos" class="carousel slide pt-5 pb-4" data-bs-ride="carousel">

                        <div class="carousel-inner px-5">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-6 col-lg-2 align-self-center">
                                        <img class="d-block w-100 px-3 mb-3" src="https://cdn.livecanvas.com/media/logos/11.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/2.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/3.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/12.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/5.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/6.png" alt="">
                                    </div>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-6 col-lg-2 align-self-center">
                                        <img class="d-block w-100 px-3 mb-3" src="https://cdn.livecanvas.com/media/logos/11.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/2.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/3.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/12.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/5.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/6.png" alt="">
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!--
	<ol class="carousel-indicators list-unstyled position-relative mt-3">
		<li data-bs-target="#carouselLogos" data-bs-slide-to="0" class="active bg-dark carousel-control-prev-icon"></li>
		<li data-bs-target="#carouselLogos" data-bs-slide-to="1" class="bg-dark"></li>
	</ol>
	-->

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