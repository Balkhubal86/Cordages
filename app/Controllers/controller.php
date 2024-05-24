<?php
    include_once("tools/autoload.php");

    class controller
    {
        public function __construct()
        {

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