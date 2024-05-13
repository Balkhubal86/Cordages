<?php
    include_once("tools/autoloader.php");

    class controller
    {
        // Constructeur de la classe "controleur" 
        public function __construct(){}

        // ========================= Parties à afficher =========================

        // Méthode pour afficher l'entête de la page du site
        public function displayHeader()
        {
            require 'Templates/Views/viewsHeader.php';
        }

        
    }
?>