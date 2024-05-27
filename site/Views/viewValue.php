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
                            <p class="card-text">La <i>thérapie du lien social</i> pratiquée aux Ateliers Cord'âges est considérée comme un complément efficace aux traitement médicaux par les professionnels de la santé.</p>
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

        <section class="pt-5 pb-5 bg-team">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 text-light" style="text-align: justify;">
                        <h3 class="mb-3"><u>Lorem</u></h3><br>
                        <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut modi asperiores maiores ipsam quia magnam minima assumenda esse atque nostrum quod sint facere iure odio voluptatibus nemo, sit, eveniet optio?
                        Nihil quaerat obcaecati ipsa ea vitae quibusdam architecto incidunt explicabo totam deleniti iste necessitatibus voluptates quasi quis cum, facere et quos quae temporibus harum vero! Eaque officia consectetur non voluptate.
                        Esse adipisci similique magnam tempore animi, dolore reprehenderit tenetur ea reiciendis neque debitis nihil. Dolorem consectetur nostrum repellendus laborum, aliquid aliquam excepturi dolorum nihil maxime debitis accusantium. Consectetur, esse eligendi.
                        </p>
                    </div>
                    <div class="col-sm-5 col-md-6">
                        <img src="public/img/valeur2.PNG" alt="" class="img-fluid rounded" style="max-width: 75%">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container shadow" style="text-align: justify;">
                <br><h3>LOREM</h3><br>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci ea laudantium corrupti reprehenderit cum excepturi minus quisquam, earum quos quod tempore, quae reiciendis fuga? Nulla fugit libero dolorum cumque nisi.</p><br>
            </div>
        </section>
            <?php
        }
    }