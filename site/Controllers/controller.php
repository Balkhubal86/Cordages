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

        // ---------------------------------------
        //              CONTROLLERS
        // ---------------------------------------

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
                case 'display':
                    $view = new viewConnexion;
                    $view->displayConnexion();
            }
        }
        
    }