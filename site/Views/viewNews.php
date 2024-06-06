<?php
    class viewNews
    {
        public function __construct(){}

        public function displayNews()
        {
            ?>
            <br><br>


            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12 bg-team rounded shadow text-light"><br>
                        <h4 class="text-center">Restez connecté avec Cord’âges en suivant notre page Facebook officielle !</h4><br>
                        <p style="text-justify: auto;">L’isolement social est un défi croissant dans nos communautés, et Cord’âges propose des solutions pour y remédier. Notre objectif est de renforcer les échanges intergénérationnels à travers des activités enrichissantes qui créent des souvenirs partagés et favorisent la compréhension mutuelle. Grâce à cette page nous vous partageons régulièrement les activitées de notre association !</p>
                        <hr>
                        <div class="text-center"><img src="public/img/activités.png" alt="" style="width: 100%; "></div><br><br>
                    </div><br><br>
                    <div class="col-md-6 col-12 text-center">
                        <div class="fb-page" data-href="https://www.facebook.com/p/Les-Ateliers-Cord%C3%A2ges-100064935270868/?locale=fr_FR" data-tabs="timeline" data-width="500" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/p/Les-Ateliers-Cord%C3%A2ges-100064935270868/?locale=fr_FR" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/p/Les-Ateliers-Cord%C3%A2ges-100064935270868/?locale=fr_FR">Les Ateliers Cord&#039;âges</a></blockquote>
                        </div>
                    </div>
                </div> 
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v20.0" nonce="6ban2XUR"></script>
            </div>
            <br><br>
        
            
            
            
            <?php
        }
    }