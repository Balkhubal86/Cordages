<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Ateliers Cord'âges</title>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <link rel="stylesheet" href="public/assets/css/style.css">

    <script src="public/assets/js/timedeconnect.js"></script>

</head>
<body>
    
    <!-- HEADER -->
    <header class="header sticky-top navbar navbar-expand-lg shadow " style="background-color: white; " >
        <div class="container-fluid">

            <a href="index.php">
                <img src="public/img/logo.jpg" width="100" height="100" alt="logo">
            </a>  

            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse bg-white rounded " id="navbarNav">
                <ul class="navbar-nav" style="width: 95%;">
                    <!-- Section Association -->
                    <li class="nav-item dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Association
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?view=history&action=display">Notre Histoire</a></li>
                            <li><a class="dropdown-item" href="index.php?view=value&action=display">Nos Valeurs</a></li>
                            <li><a class="dropdown-item" href="index.php?view=mission&action=display">Nos Missions</a></li>
                            <li><a class="dropdown-item" href="index.php?view=team&action=display">Notre Equipe</a></li>
                            <li><a class="dropdown-item" href="index.php?view=partner&action=display">Nos Partenaire</a></li>
                        </ul>
                    </li>

                    <!-- Section Service -->
                    <li class="nav-item dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?view=service&action=display#social-link">La Maison du Lien Social</a></li>
                            <li><a class="dropdown-item" href="index.php?view=service&action=display#aimant">Le Club des Z'aimants</a></li>
                            <li><a class="dropdown-item" href="#">Formation</a></li>
                        </ul>   
                    </li>

                    <!-- Section Location -->
                    <li class="nav-item dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Location
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?view=rental#">Salle</a></li>
                            <li><a class="dropdown-item" href="index.php?view=rental#">Exposition</a></li>
                            <li><a class="dropdown-item" href="index.php?view=rental#">Vélo</a></li>
                        </ul>
                    </li>

                    <!-- Section Actualités-->
                    <li class="nav-item dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Actualités
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?view=news&action=display">Évènement</a></li>
                            <li><a class="dropdown-item" href="index.php?view=news#article">Presse</a></li>
                        </ul>
                    </li>

                    <!-- Page Connexion -->
                    <?php
                    if (isset($_SESSION['email']))
                    {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?view=connexion&action=deconnect" style="color : red">Déconnexion</a>
                        </li>
                        <?php
                        if($_SESSION['idRole']['idRole'] == 1)
                        {
                        ?>
                            <li class="nav-item">
                                <a href="index.php?view=dashboard&action=home&manage=display" class="nav-link" style="color: grey;">DashBoard</a>
                            </li>
                        <?php
                        }else{
                            ?>
                            <li class="nav-item">
                                <a href="index.php?view=dashboard&action=account&manage=display" class="nav-link" style="color: grey;">Compte</a>
                            </li>
                        <?php
                        }
                        
                    }else{
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?view=connexion&action=connexion" style="color : black">Connexion</a>
                        </li>
                        <?php
                    }
                    ?>
                    
                </ul>
                
                
                <div class="button-group">
                    <button type="button" class="btn btn-primary don rounded" onclick="location.href='https://www.helloasso.com/associations/les-ateliers-cord-ages/formulaires/2';" >Faire un Don</button>
                    <a href=""><button type="button" class="btn btn-secondary membre rounded" >Devenir Adhérent</button></a>
                    <a href=""><button type="button" class="btn btn-success benevole rounded" href="" >Devenir Bénévole</button></a>
                    <a href=""><button type="button" class="btn btn-danger mecene rounded" href="" >Devenir Mécène</button></a>
                </div>
                <br>
            </div>
        </div>
    </header>
    <!-- Fin HEADER -->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/a6b9915767.js" crossorigin="anonymous"></script>
