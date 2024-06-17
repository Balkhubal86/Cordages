<?php
    class viewMember
    {
        public function __construct(){}

        public function displayMember($listPdf)
        {
            ?>
            <section id="welcome" class="section ">
				<div class="img shadow">
					<div class="text">
						<h2>Devenez Membre de l'Association Les Ateliers Cord'âges </h2>
					</div>
				</div>
    		</section><br>
            <section>
                <div class="container shadow">
                    <div class="row">
                        <div class="col text-justify">
                            <br><p><b>Rejoindre les Ateliers Cord'âges</b>, c'est faire partie d'une communauté dynamique et engagée à Poitiers, dédiée à la promotion des échanges intergénérationnels et au développement de projets culturels et éducatifs. En tant que membre, vous aurez l'opportunité de participer activement à nos ateliers, conférences et événements, tout en contribuant à la réalisation de notre mission. Nos membres bénéficient d'un accès privilégié à nos ressources et d'une voix dans la prise de décisions de l'association, vous permettant de jouer un rôle concret dans l'orientation de nos activités.</p>
                            <p><b>En adhérant aux Ateliers Cord'âges</b>, vous soutenez non seulement notre vision de créer des liens forts entre les générations, mais vous bénéficiez également d'un réseau de personnes partageant les mêmes valeurs et aspirations. Que vous soyez étudiant, professionnel, retraité ou simplement intéressé par nos projets, votre adhésion est un moyen de tisser des liens sociaux et de développer vos compétences à travers des projets concrets. Nos membres sont au cœur de notre réussite et leur contribution est essentielle pour mener à bien nos initiatives.</p>
                        </div>
                        <div class="col text-justify">
                            <br><p><b>Enfin, devenir membre des Ateliers Cord'âges</b>, c'est aussi bénéficier de nombreux avantages exclusifs. En plus de l'accès prioritaire et à tarif réduit à nos ateliers et événements, vous aurez l'occasion de participer à des formations spécialisées, de profiter de rencontres privilégiées avec des intervenants et de bénéficier de réductions chez nos partenaires locaux. Votre adhésion est plus qu'un simple soutien financier ; elle représente un engagement envers une cause noble et enrichissante, et un investissement dans la construction d'une communauté plus solidaire et inclusive à Poitiers.</p>
                            <br><br><h5 class="text-center">Documents essentiels à l'inscription à télécharger: </h5>
                            <?php $this->downloadPdf($listPdf); ?>
                        </div>
                    </div>
                </div>
            </section>
            
            <?php
            
        }

        public function downloadPdf($listPdf)
        {
            // Lien de Téléchargement des PDF en fonction du type spécifié (ici : Inscription Adhérent, Personne Physique)
            $pdf = explode('|',$listPdf);

            $typePdf = 'Inscription Adhérent, Personne Physique';
            $nbE = 4;
            while($nbE<sizeof($pdf)){
                if($pdf[$nbE] == $typePdf){
                    $filePath= $pdf[$nbE-2];
                    $fileName= $pdf[$nbE-3];

                    echo'- <a href="'.$filePath.'" target="_blank" download>'.htmlspecialchars($fileName).'</a><br>';
                }
                $nbE += 5;
            }
        }
    }