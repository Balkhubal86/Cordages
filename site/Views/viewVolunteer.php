<?php
    class viewVolunteer
    {
        public function __construct(){}

        public function displayVolunteer($listPdf)
        {
            ?>
            <section id="welcome" class="section ">
				<div class="img shadow">
					<div class="text">
						<h2>Devenez Bénévole de l'Association Les Ateliers Cord'âges </h2>
					</div>
				</div>
    		</section><br>
            <section>
                <div class="container shadow">
                    <div class="row">
                        <div class="col text-justify">
                            <br><p><b>En tant que bénévole aux Ateliers Cord'âges</b>, vous jouez un rôle fondamental dans la promotion des échanges et dans la mise en œuvre de nos projets culturels et éducatifs. Votre engagement nous permet de proposer des ateliers enrichissants, d'organiser des événements stimulants et de créer des espaces de partage et de solidarité à Poitiers. Chaque bénévole apporte une énergie et des compétences uniques, contribuant ainsi à la diversité et à la richesse de nos activités. Votre participation est essentielle pour donner vie à nos initiatives et pour faire de notre vision une réalité.</p>
                            <p><b>Rejoindre notre équipe de bénévoles</b>, c'est s'engager dans une aventure humaine passionnante. Que vous souhaitiez donner un peu de votre temps libre ou vous investir de manière plus soutenue, chaque contribution est précieuse. En devenant bénévole, vous aurez l'opportunité de rencontrer des personnes inspirantes, d'acquérir de nouvelles compétences et de vivre des expériences inoubliables. Nous valorisons la créativité et l'initiative de nos bénévoles, vous permettant ainsi de proposer vos idées et de prendre part à des projets qui vous tiennent à cœur.</p>
                        </div>
                        <div class="col text-justify">
                            <br><p><b>Faire partie des bénévoles des Ateliers Cord'âges</b>, c'est également bénéficier d'un accompagnement et d'une reconnaissance pour votre engagement. Nous proposons des formations pour vous aider à développer vos compétences, un soutien continu de notre équipe et des moments de convivialité pour renforcer les liens au sein de notre communauté. Votre contribution, qu'elle soit ponctuelle ou régulière, est un pilier de notre association et joue un rôle crucial dans la réussite de nos missions. Rejoignez-nous et participez activement à la construction d'une communauté intergénérationnelle solidaire et dynamique à Poitiers.</p>
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
            // Lien de Téléchargement des PDF en fonction du type spécifié (ici : Inscription Bénévole)
            $pdf = explode('|',$listPdf);

            $typePdf = 'Inscription Bénévole';
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