<?php
    class viewValue
    {
        public function __construct(){}

        public function displayValue()
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

            <section>
                <div class="container">
                    <h3 class="mb-3 text-center"><u>Aidez-nous à "pansez" l'isolement autrement</u></h3>
                </div><br>
            
            <div class="card mb-3 shadow animated-element" style="max-width: 540px; margin: auto">
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

            <div class="card mb-3 shadow animated-element" style="max-width: 540px; margin: auto">
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

            <div class="card mb-3 shadow animated-element" style="max-width: 540px; margin: auto">
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
                        <h3 class="mb-3"><u>Des valeurs Unique et Indispensable</u></h3><br>
                        <p>
                        Les Ateliers Cord'âges se consacrent à la lutte contre l'isolement et la précarité des personnes vulnérables, incluant les personnes âgées, celles en situation de handicap, ou souffrant de maladies telles que l'Alzheimer. Fondée sur des valeurs de solidarité, de respect et de convivialité, l'association vise à abolir les étiquettes sociales et médicales. En proposant un large éventail d'activités, comme des ateliers créatifs, des séances de relaxation (yoga, shiatsu), des sorties culturelles, des ateliers cuisine, des activités physiques adaptées, et bien d'autres, elle favorise le vivre-ensemble intergénérationnel et multiculturel. Ces activités permettent de créer des liens sociaux solides et de promouvoir l'autonomie et le développement personnel des participants.
                        </p>
                    </div>
                    <div class="col-sm-5 col-md-6">
                        <img src="public/img/valeur2.PNG" alt="" class="img-fluid rounded" style="max-width: 65%">
                    </div>
                </div>
            </div>
        </section><br>

        <section>
            <div class="container shadow animated-element" style="text-align: justify;">
                <br><br><h3 class="mb-3 text-center">Lutte contre l'isolement, et inclusion social</h3><br>
                <p>L'association est particulièrement fière de son ambiance chaleureuse et inclusive, où les bénévoles et les bénéficiaires, âgés de 18 à 94 ans, peuvent se rencontrer et partager des moments de convivialité. Les bénévoles, formés et accompagnés, jouent un rôle clé en complétant l'équipe de professionnels. Des réunions d'équipe régulières et des formations spécifiques sont organisées pour garantir un accompagnement de qualité. Les Ateliers Cord'âges se veulent un lieu où chacun peut trouver sa place et s'épanouir, loin des discours stigmatisants, en favorisant des rencontres et des activités qui enrichissent la vie sociale et culturelle des participants. Grâce à cette approche, l'association réussit à créer une dynamique communautaire où les différences sont respectées et valorisées</p><br>
            </div>
        </section><br>

            <?php
        }
    }