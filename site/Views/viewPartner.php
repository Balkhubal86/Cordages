<?php
    class viewPartner
    {
        public function __construct(){}

        public function displayPartner($listLogo)
        {
            $logos = explode('|', $listLogo);

            // On créer une liste avec les chemins des logos directement via le conteneurs logos
            $partners = array();
            for ($i = 1; $i < count($logos); $i += 4) {
                $partners[] = array('logo_path' => $logos[$i + 1]);
            }

            ?>
            <section><br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 shadow animated-element">
                            <br><h4><u>Rejoindre les partenaires des Ateliers Cord'Âges, c'est s'engager dans une aventure humaine riche et porteuse de sens.</u></h4>
                            <br><p> En devenant partenaire, vous contribuez directement à la création d'un espace de vie sociale dynamique et solidaire, où chaque individu, quel que soit son âge ou sa condition, trouve sa place. Les Ateliers Cord'Âges sont reconnus pour leur impact positif au sein de la communauté grâce à des initiatives innovantes et inclusives soutenues par la CAF et l'ARS. En soutenant l'association, vous participez à la pérennisation de projets qui favorisent l'entraide, le partage et l'épanouissement personnel. Votre engagement ne se traduira pas seulement par un soutien financier, mais par une collaboration active et valorisante, vous permettant de voir concrètement les effets de votre contribution. Rejoindre les Ateliers Cord'Âges, c'est investir dans le bien-être collectif et dans l'avenir de nos communautés locales.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section><br>
                <div class="container">
                    <?php $i = 0; $j = 0; $partners_count = count($partners);?>
                    <?php while ($j < $partners_count) {?>
                    <?php if ($i % 6 == 0) {?>
                    <div class="row">
                    <?php }?>
                        <div class="col-6 col-lg-2">
                            <img src="<?= $partners[$j]['logo_path']?>" alt="" class="img-fluid">
                        </div>
                    <?php if (($i + 1) % 6 == 0 || $j == $partners_count - 1) {?>
                    </div>
                    <?php }?>
                    <?php $i++; $j++;?>
                    <?php }?>
                </div>
            </section><br><br>

            <section class="bg-team">
                <div class="container"><br>
                    <h4 class="text-center text-light"><u>Renforcer le Lien Social : Les Ateliers Cord'Âges et ses Partenaires</u></h4><br>
                    <div class="row">
                        <div class="col-md-5 text-center shadow bg-light">
                            <br><br><p>Les Ateliers Cord'Âges bénéficient de partenariats clés qui jouent un rôle essentiel dans la pérennisation et le développement de leurs activités. Parmi ces partenariats, deux agréments majeurs se distinguent : l'Espace de Vie Sociale (EVS), attribué par la Caisse d'Allocations Familiales (CAF), et le Groupe d'Entraide Mutuelle (GEM), accordé par l'Agence Régionale de Santé (ARS). Obtenus en 2021, ces agréments permettent à l'association d'accéder à des prestations de service et garantissent une certaine stabilité financière.</p>
                            <p>L'agrément EVS, octroyé par la CAF, soutient les structures d'animation locale. Cet agrément est crucial pour les Ateliers Cord'Âges car il reconnaît et appuie leurs efforts pour créer un espace de vie sociale dynamique et inclusif. De même, l'agrément GEM, délivré par l'ARS, est essentiel pour les activités de soutien et d'entraide mutuelle au sein de la communauté. Ces deux agréments offrent une base solide de subventions, assurant ainsi une continuité dans les services offerts par l'association.</p>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-5 text-center shadow bg-light">
                            <br><p>Outre ces agréments, les Ateliers Cord'Âges reçoivent des subventions de fonctionnement de la part du conseil Régional de la Nouvelle-Aquitaine et de la mairie de Poitiers. Ces subventions locales sont indispensables pour le bon fonctionnement de l'association, permettant de financer diverses activités et projets.</p>
                            <p>Cependant, malgré ces soutiens importants, les Ateliers Cord'Âges doivent continuellement chercher des financements supplémentaires pour combler leurs besoins financiers. Cette recherche passe par des appels à projets, des subventions ponctuelles et diverses contributions. Ce mode de financement exige une gestion administrative rigoureuse et impose une pression considérable sur les salariés, qui doivent constamment solliciter de nouveaux fonds.</p>
                            <p>Les appels à projets sont particulièrement critiques, bien qu'ils ne garantissent pas une stabilité financière à long terme. Chaque année, les employés des Ateliers Cord'Âges doivent préparer de nombreux dossiers de demande de subvention, répondre à des critères spécifiques et justifier l'impact de leurs actions pour obtenir les fonds nécessaires. Cette démarche, bien que incertaine, est indispensable pour maintenir le niveau d'activité et de service de l'association, assurant ainsi la continuité de ses projets et de ses actions en faveur de la communauté.</p>
                        </div>
                    </div>
                </div><br>
            </section>

            <?php
        }
    }