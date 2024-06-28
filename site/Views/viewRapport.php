<?php
    class viewRapport
    {
        public function __construct(){}

        public function displayRapport($listRapport)
        {
            $list = explode('|',$listRapport);

            
            // Date la plus grande
            $i=2;
            $maxyear = $list[$i];
            while($i<sizeof($list))
            {
                if ($list[$i] > $maxyear ){$maxyear = $list[$i];}
                $i+=4;
            }

            // Affichage des fichiers PDF de rapport d'activité en fonction des années
            $iYear = $maxyear;
            while($iYear>=2015)
            {
                $this->displayRapportByYear($iYear, $list);
                $iYear-=1;
            }
        }

        public function displayRapportByYear($year, $list)
        {
            $groupByYear = false;
            $nbE=2;
            while($nbE<sizeof($list)){
                if($year == $list[$nbE]){
                    if($groupByYear==false){
                        ?>
                        <br><div class="container shadow rounded"><br>
                            <h4 class="text-center"><u>Rapport d'activité de l'année <?php echo $year; ?></u></h4><br>
                        
                        <?php
                        }
                    ?>
                    <div class="row">
                        <div class="col text-center">
                        <?php echo'<li>'.htmlspecialchars($list[$nbE-1]).' <a href="'.$list[$nbE+1].'" target="_blank" download>Télécharger</a><br></li>';?>
                        </div>
                    </div>
                    <?php
                    $groupByYear = true;
                }
            $nbE++;
            }
            if($groupByYear){echo '<br></div>';}
            
        }
    }