<?php
    include_once("tools/autoload.php");

    class controller
    {
        // Déclaration des variables privées

        private $myBD;

        private $allLogos;
        private $allRoles;
        private $allTypePdf;
        private $allPdf;
        private $allArticles;
        private $allRapport;
        private $allTypeRental;
        private $allRental;

        public function __construct()
        {
            // Création Accès Base de Donnée
            $this->myBD = new AccessDB();

            // Temps de connexion à la session
            $this->verifierSessionExpiree();

            // Chargement des containers
            $this->allLogos = new containerLogo;
            $this->loadLogo();

            $this->allRoles = new containerRole;
            $this->loadRole();

            $this->allTypePdf = new containerTypePdf;
            $this->loadTypePdf();

            $this->allPdf = new containerPdf;
            $this->loadPdf();

            $this->allArticles = new containerArticle;
            $this->loadArticle();

            $this->allRapport = new containerRapport;
            $this->loadRapport();

            $this->allTypeRental = new containerTypeRental;
            $this->loadTypeRental();

            $this->allRental = new containerRental;
            $this->loadRental(); 

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
                    case 'connexion':
                        $this->controllerConnexion($action);
                        break;
                    case 'dashboard':
                        $this->controllerDashboard($action);
                        break;
                    case 'member':
                        $this->controllerMember($action);
                        break;
                    case 'volunteer':
                        $this->controllerVolunteer($action);
                        break;
                    case 'press':
                        $this->controllerPress($action);
                        break;
                    case 'sponsor':
                        $this->controllerSponsor($action);
                        break;
                    case 'rapport':
                        $this->controllerRapport($action);
                        break;
                }
            }
            else
            {
                $view = new viewHome;
                $view->displayWelcome();
                $view->displayAbout();
			    $view->displayTeam();
                $listLogo = $this->allLogos->listLogo();
                $view->displayPartner($listLogo);
            }
        }

        public function displayFooter()
        {
            if((isset($_GET['view']) && $_GET['view'] == 'dashboard') || (isset($_GET['view']) && $_GET['view'] == 'connexion'))
            {
                
            }else{
                include('site/Views/footer.php');
            }
            
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
                    $listLogo = $this->allLogos->listLogo();
                    $view = new viewPartner;
                    $view->displayPartner($listLogo);
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
                    $listRentalSalle = $this->allRental->listRentalByIdTypeRental('1');
                    $listRentalExpo = $this->allRental->listRentalByIdTypeRental('2');
                    $listRentalVelo = $this->allRental->listRentalByIdTypeRental('3');
                    $view = new viewRental;
                    $view->displayRental($listRentalSalle, $listRentalExpo, $listRentalVelo);   
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
                        // Récupération des informations de l'utilisateur
                        $name = trim($_POST['name']);
                        $firstname = trim($_POST['firstname']);
                        $email = trim($_POST['email']);
                        $password1 = trim($_POST['password1']);
                        $password2 = trim($_POST['password2']);

                        // Vérification des 2 mots de passe
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
                                        <h5 class="card-title text-red">Vous avez été déconnecté !</h5><br>
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
            $view = new viewDashboard;

            if(isset($_GET['manage'])){
                $manage = $_GET['manage'];

                switch($action)
                {
                    case 'home':
                        $view->displayDashboardHome();
                        break;
                    case 'partner':
                        switch($manage)
                        {
                            case 'display':
                                $listLogo = $this->allLogos->listLogo();
                                $view->displayPartner($listLogo);
                                break;
                            case 'add':
                                $view->addPartner();
                                break;
                            case 'erase':
                                $this->myBD->eraseLogo();
                                break;
                            case 'inputPartner':
                                $this->myBD->uploadLogo();
                        }
                        break;
                    case 'team':
                        switch($manage)
                        {
                            case 'display':
                                $view->displayTeam();
                                break;
                        }
                        break;
                    case 'account':
                        switch($manage)
                        {
                            case 'display':
                                $listInfoUser = $this->myBD->getUserInfo($_SESSION['email']);
                                $listRole = $this->allRoles->listRole();
                                $view->displayAccount($listInfoUser, $listRole);
                                break;
                        }
                        break;
                    case 'pdf':
                        switch($manage)
                        {
                            case 'display':
                                $listPdf = $this->allPdf->listPdf();
                                $view->displayPdf($listPdf);
                                break;
                            case 'add':
                                $listTypePdf = $this->allTypePdf->listTypePdf();
                                $view->addPdf($listTypePdf);
                                break;
                            case 'erase':
                                $this->myBD->erasePdf();
                                break;
                            case 'inputPdf':
                                $this->myBD->uploadPdf();
                                break;
                        }
                        break;
                    case 'press':
                        switch($manage)
                        {
                            case 'display':
                                $listArticle = $this->allArticles->listArticle();
                                $view->displayArticle($listArticle);
                                break;
                            case 'add':
                                $view->addArticle();
                                break;
                            case 'erase':
                                $this->myBD->eraseArticle();
                                break;
                            case 'inputArticle':
                                $this->myBD->addArticle();
                                break;
                            case 'change':
                                $listArticle = $this->allArticles->listArticle();
                                $view->changeArticle($listArticle);
                                break;
                            case 'inputChange':
                                $this->myBD->updateArticle();
                                break;
                        }
                        break;
                    case 'usermanagement':
                        switch($manage)
                        {
                            case 'display':
                                $listRole = $this->allRoles->listRole();
                                $listUsers = $this->myBD->displayUsersInfo();
                                $view->displayUserManagement($listUsers,$listRole);
                                break;
                            case 'erase':
                                $this->myBD->eraseUser();
                                break;
                            case 'change':
                                $infoUser = $this->myBD->getUserInfo($_POST['email']);
                                $listRole = $this->allRoles->listRole();
                                $view->changeUser($infoUser, $listRole);
                                break;
                            case 'inputChange':
                                $listRole = $this->allRoles->listRole();
                                $this->myBD->updateUser($listRole);
                                break;
                        }
                        break;
                    case 'rapport':
                        switch($manage)
                        {
                            case 'display':
                                $listRapport = $this->allRapport->listRapport();
                                $view->displayRapport($listRapport);
                                break;
                            case 'erase':
                                $this->myBD->eraseRapport();
                                break;
                            case 'add':
                                $view->addRapport();
                                break;
                            case 'inputRapport':
                                $this->myBD->addRapport();
                                break;
                        }
                        break;
                    case 'rental':
                        switch($manage)
                        {
                            case 'display':
                                $listRental = $this->allRental->listRental();
                                $view->displayRental($listRental);
                                break;
                            case 'add':
                                $listTypeRental = $this->allTypeRental->listTypeRental();
                                $view->addRental($listTypeRental);
                                break;
                            case 'inputRental':
                                $this->myBD->addRental();
                                break;
                        }
                }
            }    
        }

        public function controllerMember($action)
        {
            $view = new viewMember;
            switch($action)
            {
                case 'display':
                    $listPdf = $this->allPdf->listPdf();
                    $view->displayMember($listPdf);
                    break;
            }
        }

        public function controllerVolunteer($action)
        {
            switch($action)
            {
                case 'display':
                    $listPdf = $this->allPdf->listPdf();
                    $view = new viewVolunteer;
                    $view->displayVolunteer($listPdf);
                    break;
            }
        }

        public function controllerSponsor($action)
        {
            switch($action)
            {
                case 'display':
                    $listPdf = $this->allPdf->listPdf();
                    $view = new viewSponsor;
                    $view->displaySponsor($listPdf);
                    break;
            }
        }

        public function controllerPress($action)
        {
            switch($action)
            {
                case 'display':
                    $view = new viewPress;
                    $listArticle = $this->allArticles->listArticle();
                    $view->displayPress($listArticle);
                    break;
            }
        }

        public function controllerRapport($action)
        {
            switch($action)
            {
                case 'display':
                    $view = new viewRapport;
                    $listRapport = $this->allRapport->listRapport();
                    $view->displayRapport($listRapport);
            }
        }

        

        // ------------------------------------ FIN CONTROLLER ---------------------------------------


        // ------------------------------------------------------------------------------
        //                          Chargement des Conteneurs
        // ------------------------------------------------------------------------------

        public function loadLogo()
        {
            $resultLogo = $this->myBD->Load('logos');
            $nbE = 0;
            while ($nbE<sizeof($resultLogo))
            {
                $dateLogo = $this->stringToDateTime($resultLogo[$nbE][3]);
                $this->allLogos->addLogo($resultLogo[$nbE][0],$resultLogo[$nbE][1],$resultLogo[$nbE][2],$dateLogo);
                $nbE++;
            }
        }

        public function loadRole()
        {
            $resultRole = $this->myBD->Load('role');
            $nbE = 0;
            while ($nbE<sizeof($resultRole))
            {
                $this->allRoles->addRole($resultRole[$nbE][0],$resultRole[$nbE][1]);
                $nbE++;
            }
        }

        public function loadTypePdf()
        {
            $resultTypePdf = $this->myBD->Load('type_pdf');
            $nbE = 0;
            while ($nbE<sizeof($resultTypePdf))
            {
                $this->allTypePdf->addTypePdf($resultTypePdf[$nbE][0],$resultTypePdf[$nbE][1]);
                $nbE++;
            }
        }

        public function loadPdf()
        {
            $resultPdf = $this->myBD->Load('pdf');
            $nbE = 0;
            while ($nbE<sizeof($resultPdf))
            {
                $objectTypePdf = $this->allTypePdf->giveTypePdfById($resultPdf[$nbE][4]); // On récupère l'object Type De PDF
                $datePdf = $this->stringToDateTime($resultPdf[$nbE][3]);
                $this->allPdf->addPdf($resultPdf[$nbE][0],$resultPdf[$nbE][1],$resultPdf[$nbE][2],$datePdf,$objectTypePdf);
                $nbE++;
            }
        }
        
        public function loadArticle()
        {
            $resultArticle = $this->myBD->Load('article');
            $nbE = 0;
            while ($nbE<sizeof($resultArticle))
            {
                $dateCreated = $this->stringToDateTime($resultArticle[$nbE][5]);
                $dateUpdate = $this->stringToDateTime($resultArticle[$nbE][6]);
                $this->allArticles->addArticle($resultArticle[$nbE][0],$resultArticle[$nbE][1],$resultArticle[$nbE][2],$dateCreated, $dateUpdate,$resultArticle[$nbE][3],$resultArticle[$nbE][4]);
                $nbE++;
            }
        }

        public function loadRapport()
        {
            $resultRapport = $this->myBD->Load('rapport');
            $nbE = 0;
            while ($nbE<sizeof($resultRapport))
            {
                $this->allRapport->addRapport($resultRapport[$nbE][0],$resultRapport[$nbE][1],$resultRapport[$nbE][2],$resultRapport[$nbE][3]);
                $nbE++;
            }
        }

        public function loadTypeRental()
        {
            $resultTypeRental = $this->myBD->Load('type_rental');
            $nbE = 0;
            while ($nbE<sizeof($resultTypeRental))
            {
                $this->allTypeRental->addTypeRental($resultTypeRental[$nbE][0], $resultTypeRental[$nbE][1]);
                $nbE++;
            }
        }

        public function loadRental()
        {
            $resultRental = $this->myBD->Load('rental');
            $nbE = 0;
            while ($nbE<sizeof($resultRental))
            {
                $typeRental = $this->allTypeRental->giveTypeRentalById($resultRental[$nbE][3]);
                $datePosted_at = $this->stringToDateTime($resultRental[$nbE][2]);
                $this->allRental->addRental($resultRental[$nbE][0], $resultRental[$nbE][1], $datePosted_at, $typeRental, $resultRental[$nbE][4], $resultRental[$nbE][5]);
                $nbE++;
            }
        }
        // ------------------------------------------------------------------------------
        //                              FONCTIONS UTILES
        // ------------------------------------------------------------------------------
        

        // Fonction qui fait retourner à la page d'enregistrement si une erreur existe lors de l'enregistrement
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

        // Fonction qui convertit en DATETIME : aaaa-mm-jj 
        function stringToDateTime($dateString, $format = 'Y-m-d H:i:s') {
            // Crée un objet DateTime à partir de la chaîne en utilisant le format spécifié
            $dateTime = DateTime::createFromFormat($format, $dateString);
            
            // Vérifie si la conversion a réussi
            if ($dateTime === false) {
                // Si la conversion a échoué, retourne un message d'erreur
                throw new Exception("La chaîne de date/heure n'est pas au format attendu : " . $format);
            }
            
            // Retourne l'objet DateTime
            return $dateTime;
        }

        // Fonction pour le temps de Connexion
        private function verifierSessionExpiree() {
            if(isset($_SESSION['email'])){
                // Définir la durée de vie de la session en secondes (30 minutes)
                $duration = 30 * 60;
    
                // Définir la date d'expiration de la session
                $_SESSION['expiration'] = time() + $duration;
    
                // Vérifier si la session est expirée à chaque chargement de page
                if (time() > $_SESSION['expiration']) {
                    // Détruire la session et déconnecter l'utilisateur
                    header('Location: index.php?view=connexion&action=deconnect');
                    exit();
                }
            }
        }
    }