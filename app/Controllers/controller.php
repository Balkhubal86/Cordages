<?php
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
        public function displayPage()
        {
            if (isset($_GET['view']) && isset($_GET['action']))
            {
                $view = $_GET['view'];
                $action = $_GET['action'];

                switch ($view)
                {
                    
                }
            }
            else
            {
                include('app/Views/home.php');
            }
        }

        public function displayFooter()
        {
            include('app/Views/footer.php');
        }
    }