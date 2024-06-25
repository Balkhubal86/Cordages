<?php
    class viewPress
    {
        public function __construct(){}

        public function displayPress($listArticle)
        {
            ?>
            <div class="container text-center">
                <br><h4><u>Retrouvez nos articles de presse sur Cord'âges</u></h4><br>
            </div>
            <?php

            $list = explode("|", $listArticle);
            ?>
            <div class="container d-flex flex-wrap align-items-center">
            <?php

            $nbE = 0;
            while ($nbE < sizeof($list)) {
                if (isset($list[$nbE + 6])) { 
                    ?>
                    <div class="m-2 card">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $list[$nbE + 3]; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $list[$nbE + 1]; ?></h5>
                                <p class="card-text"><?php echo $list[$nbE + 2]; ?></p>
                                <?php if(isset($list[$nbE+4]) && $list[$nbE+4] != ''){?>
                                <a href="<?php echo $list[$nbE + 4]; ?>" class="btn btn-primary" target="_blank">En savoir plus...</a><?php} ?>
                            </div>
                            <div class="card-footer text-body-secondary">
                                <i>Partagé sur notre site le : <?php echo $list[$nbE + 6]; ?> </i>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                $nbE += 7;
            }
            ?></div><?php
        }
    }