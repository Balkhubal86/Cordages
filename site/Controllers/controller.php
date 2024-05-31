<?php
    include_once("tools/autoload.php");

    class controller
    {
        // Déclaration des variables privées

        private $myBD;

        public function __construct()
        {
            $this->myBD = new AccessDB();
        }

        public function displayHeader()
        {
            include('site/Views/header.php');
        }

        // Méthode pour afficher la page du site (Contenu central)
        public function displayBody()
        {
            if (isset($_GET['view']) && isset($_GET['action']))
            {
                $view = $_GET['view'];
                $action = $_GET['action'];

                switch ($view)
                {
                    case 'value':
                        $this->controllerValue($action);
                        break;
                    case 'history':
                        $this->controllerHistory($action);
                        break;
                    case 'mission':
                        $this->controllerMission($action);
                        break;
                    case 'partner':
                        $this->controllerPartner($action);
                        break;
                    case 'service':
                        $this->controllerService($action);
                        break;
                    case 'rental':
                        $this->controllerRental($action);
                        break;
                    case 'news':
                        $this->controllerNews($action);
                        break;
                    case 'contact':
                        $this->controllerContact($action);
                        break;
                    case 'team':
                        $this->controllerTeam($action);
                        break;
                    case 'planning':
                        $this->controllerPlanning($action);
                        break;
                    case 'connexion':
                        $this->controllerConnexion($action);
                        break;
                    case 'dashboard':
                        $this->controllerDashboard($action);
                        break;
                }
            }
            else
            {
                $view = new viewHome;
                $view->displayWelcome();
                $view->displayAbout();
			    $view->displayTeam();
                $view->displayPartner();
            }
        }

        public function displayFooter()
        {
            include('site/Views/footer.php');
        }

        // ------------------------------------------------------------------------------
        //                              CONTROLLERS
        // ------------------------------------------------------------------------------

        public function controllerValue($action)
        {
            switch($action)
            {
                case 'display':
                    $view = new viewValue;
                    $view->displayValue();
                    break;
            }
        }

        public function controllerHistory($action)
        {
            switch($action)
            {
                case 'display':
                    $view = new viewHistory;
                    $view->displayHistory();
                    break;
            }
        }

        public function controllerMission($action)
        {
            switch($action)
            {
                case 'display':
                    $view = new viewMission;
                    $view->displayMission();
                    break;
            }
        }

        public function controllerPartner($action)
        {
            switch($action)
            {
                case 'display':
                    $view = new viewPartner;
                    $view->displayPartner();
                    break;
            }
        }

        public function controllerService($action)
        {
            switch($action)
            {
                case 'display':
                    $view = new viewService;
                    $view->displayService();
                    break;
            }
        }

        public function controllerRental($action)
        {
            switch($action)
            {
                case 'display':
                    $view = new viewRental;
                    $view->displayRental();
                    break;
            }
        }

        public function controllerNews($action)
        {
            switch($action)
            {
                case 'display':
                    $view = new viewNews;
                    $view->displayNews();
                    break;
            }
        }

        public function controllerContact($action)
        {
            switch($action)
            {
                case 'display':
                    $view = new viewContact;
                    $view->displayContact();
                    break;
            }
        }

        public function controllerTeam($action)
        {
            switch($action)
            {
                case 'display':
                    $view = new viewTeam;
                    $view->displayTeam();
                    break;
            }
        }

        public function controllerPlanning($action)
        {
            switch($action)
            {
                case 'display':
                    $view = new viewPlanning;
                    $view->displayPlanning();
                    break;
            }
        }

        public function controllerConnexion($action)
        {
            switch($action)
            {
                case 'connexion':
                    $view = new viewConnexion;
                    $view->displayConnexion();
                    break;
                case 'register':
                    $view = new viewConnexion;
                    $view->displayRegister();
                    break;
                case 'inputRegister':
                    // Vérification des données pour faire appel ensuite à la méthode d'enregistrement dans ma BD
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        // Validation des données
                        $name = trim($_POST['name']);
                        $firstname = trim($_POST['firstname']);
                        $email = trim($_POST['email']);
                        $password1 = trim($_POST['password1']);
                        $password2 = trim($_POST['password2']);

                        // Vérification des mots de passe
                        if ($password1 != $password2) {
                            $error = "Les mots de passe ne correspondent pas.";
                            $this->returnRegister($error);
                        }else{
                            $password = $password2;

                            // REGEX pour le mot de passe 
                            $passwordPattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
                            if (!preg_match($passwordPattern, $password)) {
                                $error = "Le mot de passe doit contenir au moins 8 caractères, dont au moins une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial.";
                                $this->returnRegister($error);
                            }else{
                                // Vérification de l'email déà utilisé ou non
                            if($this->myBD->emailExist($email) == false){
                                $error = "Cette adresse email est déjà utilisée par un autre utilisateur.";
                                $this->returnRegister($error);
                                }else{
                                    $this->myBD->registerUser($name, $firstname, $email, $password);
                                }   
                            }
                        }
                    }
                    break;
                case 'inputConnexion':
                    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                        $email = trim($_POST['email']);
                        $password = trim($_POST['password']);

                        $this->myBD->logUser($email, $password);
                    }
                    break;
                case 'deconnect':
                    session_unset(); // Effacer toutes les variables de session
                    session_destroy(); // Détruire la session
                    
                    // Message de déconnexion
                    ?>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title text-red">Vous vous êtes déconnecter !</h5><br>
                                        <h6 class="card-subtitle mb-2 text-body-secondary"></h6>
                                        <p class="card-text">Revenez à l'acceuil ou reconnectez vous.</p>
                                        <a href="index.php" class="card-link">Acceuil</a>
                                        <a href="index.php?view=connexion&action=connexion" class="card-link">Reconnecter</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col"></div>
                        </div>   
                    </div>
                    <br>
                    <?php
                    break;
            }
        }

        public function controllerDashboard($action)
        {
            switch($action)
            {
                case 'display':
                    $view = new viewDashboard;
                    $view->displayDashboard();
                    break;
            }
        }

        // ------------------------------------ FIN CONTROLLER ---------------------------------------

        

        // ------------------------------------------------------------------------------
        //                              FONCTIONS UTILES
        // ------------------------------------------------------------------------------

        // Fonction qui fait retourner à la page d'enregistrement 
        public function returnRegister($error)
        {
            ?>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title text-red">Erreur d'enregistrement !</h5><br>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $error;?></h6>
                                <p class="card-text">Revenez sur la page pour continuer ou revenez sur l'acceuil</p>
                                <a href="index.php" class="card-link">Acceuil</a>
                                <a href="index.php?view=connexion&action=register" class="card-link">Revenir</a>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>   
            </div>
            <br>
            <?php
        }
        
    }