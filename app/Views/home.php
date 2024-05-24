<?php
	class Home
	{
		public function __construct()
		{
			$this->displayWelcome();
			// $this->displayHistory();
			// $this->displayValues();
			// $this->displayMission();
            $this->displayAbout();
			$this->displayTeam();
		}

		public function displayWelcome()
		{
			?>

			<!-- Première Section avec l'image en fond et le texte par dessus -->
			<section id="welcome" class="section ">
				<div class="img">
					<div class="text">
						<h2>Bienvenue sur le site de l'association des Ateliers Cord'âges </h2>
					</div>
				</div>
				<br>
				<div class="container">
					<div class="row"></div>
                		<div class="col-6">
                    		<h3 class="mb-3">Présentation</h3>
                		</div>
						<p>Nous sommes une association reconnue <b>d’intérêt général dédiée à la lutte contre l’isolement</b>. Unique en France, notre mission est de cultiver le <b>lien social</b>, <b>la bienveillance</b> et <b>la tolérance</b> au cœur de notre action. À travers nos ateliers et nos initiatives, nous œuvrons chaque jour pour créer un environnement où chacun se sent <b>accueilli</b>, <b>soutenu</b> et <b>valorisé</b>. 
						Que vous soyez une personne âgée, en situation de handicap ou simplement en quête de compagnie, nous sommes là pour vous offrir un espace où vous pourrez vous <b>épanouir</b>, <b>échanger</b> et <b>tisser des liens durables</b>. <br><br>
						Rejoignez-nous dans cette belle aventure de solidarité et de partage. Ensemble, faisons de chaque jour une occasion de construire un monde où personne ne se sentira seul. Explorez notre site pour en savoir plus sur nos activités, nos événements à venir et comment vous pouvez vous impliquer. </p>
            		</div>
					
				</div>
    		</section>  
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
                            <a href="">En savoir plus</a>
                        </div>

                        <div class="col">
                            <img src="public/img/logo point d'interrogation.jpg" alt="" class="shadow-lg p-3 mb-5 bg-white rounded" style="width: 50%;"><br>
                            <h4>Notre histoire</h4><br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt rem dolorem reprehenderit iusto repellendus sapiente molestiae hic eligendi eos aut quasi quibusdam cumque, repudiandae voluptatibus eaque, nihil fugiat dicta aspernatur!</p><br>
                            <a href="">En savoir plus</a>
                        </div>

                        <div class="col">
                            <img src="public/img/logo point d'interrogation.jpg" alt="" class="shadow-lg p-3 mb-5 bg-white rounded" style="width: 50%;"><br>
                            <h4>Nos Missions</h4><br>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus facere harum unde dignissimos laudantium fuga eaque iure maiores voluptatum. Consectetur architecto, voluptatibus repellendus non ab nam quibusdam veritatis. Illum, sint.</p><br>
                            <a href="">En savoir plus</a>
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
    <section id="team" class="pt-5 pb-5 bg-success">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3">Notre Equipe </h3>
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
                                    <div class="card shadow rounded" >
                                        <img class="img-fluid" alt="100%x280" src="public/img/jhon doe.avif">
                                        <div class="card-body">
                                            <h4 class="card-title">Nom Prénom Personne 1</h4>
                                            <p class="card-text">Intitulé Poste</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow rounded">
                                        <img class="img-fluid" alt="100%x280" src="public/img/jhon doe.avif">
                                        <div class="card-body">
                                            <h4 class="card-title">Nom Prénom Personne 2</h4>
                                            <p class="card-text">Intitulé Poste</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow rounded">
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
                                    <div class="card shadow rounded">
                                        <img class="img-fluid" alt="100%x280" src="public/img/jhon doe.avif">
                                        <div class="card-body">
                                            <h4 class="card-title">Nom Prénom Personne 4</h4>
                                            <p class="card-text">Intitulé Poste</p>

                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <div class="card shadow rounded">
                                        <img class="img-fluid" alt="100%x280" src="public/img/jhon doe.avif">
                                        <div class="card-body">
                                            <h4 class="card-title">Nom Prénom Personne 5</h4>
                                            <p class="card-text">Intitulé Poste</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow rounded">
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
                                    <div class="card shadow rounded">
                                        <img class="img-fluid" alt="100%x280" src="public/img/jhon doe.avif">
                                        <div class="card-body">
                                            <h4 class="card-title">Nom Prénom Personne 7</h4>
                                            <p class="card-text">Intitulé Poste</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow rounded">
                                        <img class="img-fluid" alt="100%x280" src="public/img/jhon doe.avif">
                                        <div class="card-body">
                                            <h4 class="card-title">Nom Prénom Personne 8</h4>
                                            <p class="card-text">Intitulé Poste</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow rounded">
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
</section>
<?php
		}

	}
?>

    

    

    


 


    
    

