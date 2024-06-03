<?php
    class viewDashboard
    {
        public function __construct()
        {
            $this->menuDashboard();
        }

        public function menuDashboard()
        {
            if($_SESSION['idRole']['idRole'] == 1){
                ?>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline" style="color: white;">Menu DashBoard</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <!-- Acceuil-->
                        <li class="nav-item">
                            <a href="index.php?view=dashboard&action=home&manage=display" class="nav-link align-middle px-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                            </svg>
                            <span class="ms-1 d-none d-sm-inline">Acceuil</span>
                            </a>
                        </li>

                        <!-- Equipe-->
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                                  <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5z"/>
                                </svg>
                                <span class="ms-1 d-none d-sm-inline">Equipe</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> - Liste Equipe</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> - Modifier</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Partenaire-->
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-link" viewBox="0 0 16 16">
                                <path d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9q-.13 0-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z"/>
                                <path d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4 4 0 0 1-.82 1H12a3 3 0 1 0 0-6z"/>
                            </svg>
                            <span class="ms-1 d-none d-sm-inline">Partenaire</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="index.php?view=dashboard&action=partner&manage=display" class="nav-link px-0"> - Liste Logo </a>
                                </li>
                                <li>
                                    <a href="index.php?view=dashboard&action=partner&manage=add" class="nav-link px-0"> - Ajouter </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Evenement-->
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                                <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                            </svg>
                            <span class="ms-1 d-none d-sm-inline">Actualités</span> </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> - Liste Événement</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> - Modifier Événement</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> - Liste Presse</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> - Modifier Presse</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Gestion utilisateur-->
                        <li>
                            
                            <a href="#" class="nav-link px-0 align-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                            <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5"/>
                            <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z"/>
                            </svg>
                            <span class="ms-1 d-none d-sm-inline">Gestion Utilisateurs</span></a>
                        </li>

                        <!-- Compte -->
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-gear" viewBox="0 0 16 16">
                            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                            </svg>
                            <span class="ms-1 d-none d-sm-inline">Compte</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        
                
                <?php
            }else{

            }
        }

        public function displayDashboardHome()
        {
            ?>
            <div>
                
            </div>
            <?php
        }

        /* Section Partenaire  */
        public function displayPartner($listLogo)
        {
            ?>
            <div class="col py-3">
                <?php 
                $list = explode("|",$listLogo);

                echo '<table class="table table-striped table-bordered table-sm ">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nom du fichier</th>
                                <th scope="col">Chemin du logo</th>
                                <th scope="col">Date de téléchargement</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>';
                $nbE=0;
                while ($nbE<sizeof($list))
                {	
                    $i=0;
                    while (($i<4) && ($nbE<sizeof($list)))
                    {
                        echo '<td scope>';
                        echo trim($list[$nbE]);
                        $i++;
                        $nbE++;
                        echo '</td>';
                    }
                    if($nbE<sizeof($list))
                    {
                        echo'<td scope="col">
                            <form action="index.php?view=dashboard&action=partner&manage=erase" method="post">
                            <input type="hidden" name="id" value="'. $list[$nbE-4] . '">
                            <input type="hidden" name="path" value="'. $list[$nbE-2] .'">
                            <button type="submit">Supprimer</button>
                            </form></td>';
                    }
                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
                ?>
                
                <br><h3>Les Logos</h3>
                <?php
                // Affichage de tout les logos
                $j=2;
                while($j<sizeof($list))
                {
                    echo'<img src="'.$list[$j].'" alt="'.$list[$j-1].'" style="width:100px;"><br>';
                    $j+=4;
                }
                ?>

            </div>
        </div>
        </div>
            <?php

        }

        public function addPartner()
        {
            ?>
            <div class="col py-3">
                <form action="index.php?view=dashboard&action=partner&manage=inputPartner" method="post" enctype="multipart/form-data">
                    <label for="logo">Choisissez un logo (formats autorisés : jpg, jpeg, png, gif) :</label>
                    <input type="file" name="logo" id="logo" accept="image/*" required>
                    <button type="submit">Télécharger</button>
                </form>
            </div>
        </div>
        </div>
            <?php

        }

        public function erasePartner()
        {

        }

        /* Section Equipe */
        public function displayTeam()
        {

        }

        public function addTeam()
        {

        }

        public function eraseTeam()
        {

        }
    }