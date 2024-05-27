<?php
    class viewValue
    {
        public function __construct()
        {
            $this->displayTitle();
            $this->displayValue();
        }

        public function displayTitle()
        {
            ?>
            <!-- Première Section avec l'image en fond et le texte par dessus -->
			<section id="welcome" class="section ">
				<div class="img">
					<div class="text">
						<h2>Nos Valeurs </h2>
					</div>
				</div>
				<br>
    		</section>  
    		<!-- Fin Première Section -->
            <?php
        }

        public function displayValue()
        {
            ?>

        <section>
            <div class="container">
                <h3 class="mb-3 text-center">Aidez-nous à "pansez" l'isolement autrement</h3>
                
            </div><br>
            
            <div class="card mb-3 shadow" style="max-width: 540px; margin: auto">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="public/img/logo ampoule.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Des solutions adaptées</h5>
                            <p class="card-text">Bien plus qu'une maison, un lieu de vie où une famille XXL vous acceuille chaleureusement, nourrissant le réconfort à travers l'entraide et la convivialité.</p>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="card mb-3 shadow" style="max-width: 540px; margin: auto">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="public/img/poignée de main.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Une équipe active et engagée</h5>
                            <p class="card-text">La <i>thérapie du lien social</i> pratiquée aux Ateliers Cord'âges est considérée comme une complément efficace aux traitement médicaux par les professionnels de la santé.</p>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="card mb-3 shadow" style="max-width: 540px; margin: auto">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="public/img/coeur.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Le Respect de la Différence</h5>
                            <p class="card-text">Chaque personne est une richesse, chaque différence est célébrée, forgant une expérience de vie unique où le lien social se marie harmonieusement aux soins médicaux.</p>
                        </div>
                    </div>
                </div>
            </div> 
        </section>

            <?php
        }
    }