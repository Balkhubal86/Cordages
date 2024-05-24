<?php
    class viewMission
    {
        public function __construct()
        {
            $this->displayTitle();
        }

        public function displayTitle()
        {
            ?>
            <!-- Première Section avec l'image en fond et le texte par dessus -->
			<section id="welcome" class="section ">
				<div class="img">
					<div class="text">
						<h2>Nos Missions</h2>
					</div>
				</div>
				<br>

				<div class="container">
					<div class="row"></div>
                		<div class="col-6">
                    		<h3 class="mb-3">Titre</h3>
                		</div>
            		</div>
				</div>
    		</section>  
    		<!-- Fin Première Section -->
            <?php
        }
    }