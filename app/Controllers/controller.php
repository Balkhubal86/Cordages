<?php
    include_once("tools/autoload.php");

    class controller
    {
        // Déclaration des variables privé 

        private $myBD;

        public function __construct()
        {
            $this->myBD = new AccessDB();

        }

        public function displayHeader()
        {
            include('app/Views/header.php');
        }

        // Méthode pour afficher la page du site (Contenu central)
        public function displayBody()
        {
            if (isset($_GET['view']))
            {
                $view = $_GET['view'];

                switch ($view)
                {
                    case 'value':
                        new viewValue;
                        break;
                    case 'history':
                        new viewHistory;
                        break;
                    case 'mission':
                        new viewMission;
                        break;
                    case 'partner':
                        new viewPartner;
                        break;
                    case 'service':
                        new viewService;
                        break;
                    case 'rental':
                        new viewRental;
                        break;
                    case 'news':
                        new viewNews;
                        break;
                    case 'contact':
                        new viewContact;
                        break;
                }
            }
            else
            {
                new viewHome;
            }
        }

        public function displayFooter()
        {
            include('app/Views/footer.php');
        }

        
    }