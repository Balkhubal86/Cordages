<?php
    class viewSponsor
    {
        public function __construct(){}

        public function displaySponsor($listPdf)
        {
            ?>
             <section id="welcome" class="section ">
				<div class="img shadow">
					<div class="text">
						<h2>Soutenez les Ateliers Cord'âges : Devenez Mécène </h2>
					</div>
				</div>
    		</section><br>
            
            <section>
                <div class="container rounded shadow"><br>
                    <div class="row">
                        <div class="col">
                            <p class="text-justify"><b>Rejoignez</b> les entreprises et les partenaires qui font une différence <b>en devenant mécène des Ateliers Cord'âges</b>. En soutenant notre association, vous contribuez activement à la promotion des échanges intergénérationnels et à la mise en place de projets culturels et éducatifs qui renforcent le tissu social de Poitiers. Votre engagement nous permet de financer des initiatives innovantes et de qualité, qui favorisent le dialogue, la solidarité et l'inclusion entre les générations. En investissant dans notre mission, vous participez à la création d'une communauté plus harmonieuse et durable.</p>
                        </div>
                        <div class="col">
                            <p class="text-justify"><b>En tant que mécène</b> des Ateliers Cord'âges, vous bénéficierez d'une visibilité accrue et d'une image de marque valorisée. Nous mettons en avant nos partenaires à travers nos divers canaux de communication : site internet, réseaux sociaux, événements publics et publications. Votre entreprise sera reconnue comme un acteur clé et responsable dans le soutien de la cohésion sociale et du développement communautaire. De plus, nous offrons à nos mécènes des opportunités de collaboration sur des projets spécifiques, permettant de démontrer concrètement votre engagement en matière de responsabilité sociale et d'impact positif.</p>
                        </div>
                        <div class="col">
                            <p class="text-justify"><b>Le partenariat</b> avec les Ateliers Cord'âges est également une occasion unique de mobiliser vos employés autour de valeurs partagées. Nous proposons des activités de bénévolat d'entreprise, des ateliers de team-building intergénérationnels et des événements exclusifs qui renforcent l'esprit d'équipe et l'engagement sociétal de vos collaborateurs. Ces initiatives permettent de créer des expériences enrichissantes qui bénéficient non seulement à la communauté, mais aussi à votre entreprise en renforçant la motivation et la satisfaction de vos employés.</p>
                        </div>
                    </div>
                    <hr><br>
                    <div class="row">
                        <div class="col">
                            <p class="text-center">Enfin, en soutenant <b>les Ateliers Cord'âges</b>, vous faites un investissement durable dans le bien-être social et le développement de Poitiers. Votre mécénat permet de pérenniser nos actions et d'étendre notre impact, en offrant des programmes de haute qualité qui répondent aux besoins des différentes générations. Rejoignez-nous et faites partie de ce mouvement pour un avenir meilleur, où chaque génération peut apprendre, grandir et s'épanouir aux côtés des autres. Ensemble, nous pouvons bâtir une société plus inclusive et solidaire, et votre soutien est crucial pour atteindre cet objectif.</p>
                        </div>
                        <div class="col">
                            <h4 class="text-center"><u>Documents essentiels au mécénat à télécharger:</u></h4>
                            <?php $this->downloadPdf($listPdf);?>
                        </div>
                    </div><br>
                </div>
            </section>

            <?php
        }

        public function downloadPdf($listPdf)
        {
            // Lien de Téléchargement des PDF en fonction du type spécifié (ici : Inscription Bénévole)
            $pdf = explode('|',$listPdf);

            $typePdf = 'Document Mécène';
            $nbE = 4;
            echo'<ul>';
            while($nbE<sizeof($pdf)){
                if($pdf[$nbE] == $typePdf){
                    $filePath= $pdf[$nbE-2];
                    $fileName= $pdf[$nbE-3];

                    echo'<li>'.htmlspecialchars($fileName).' <a href="'.$filePath.'" target="_blank" download>Télécharger</a><br></li>';
                }
                $nbE += 5;
            }
            echo'</ul>';
        }
    }