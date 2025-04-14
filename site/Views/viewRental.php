<?php
    class viewRental
    {
        public function __construct(){}

        public function displayRental($listRentalSalle, $listRentalExpo, $listRentalVelo)
        {
            ?>
            <section id="salle">
                <?php
                $listSalle = explode('|', $listRentalSalle);

                var_dump($listSalle); #DEBUG
                ?>
            </section>

            <section id="exposition">
                <?php
                $listExpo = explode('|', $listRentalExpo);

                var_dump($listExpo); #DEBUG
                ?>
            </section>

            <section id="velo">
                <?php
                $listVelo = explode('|', $listRentalVelo);

                var_dump($listVelo); #DEBUG
                ?>
            </section>
            <?php
        }
    }