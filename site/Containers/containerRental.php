<?php
    include_once("tools/autoload.php");
    class containerRental
    {
        private $rentals;

        public function __construct() {$this->rentals = new ArrayObject();}

        public function addRental($id, $name, $posted_at, $typeRental, $image, $description)
        {
            $this->rentals->append(new actionRental($id, $name, $posted_at, $typeRental, $image, $description));
        }

        public function listRental()
        {
            $liste = '';
		    foreach ($this->rentals as $rental)
		    	{	
                    $liste = $liste.$rental->displayRental();
		    	}
		    return $liste;
        }

        public function listRentalByIdTypeRental($idType)
        {
            $liste ='';
            foreach($this->rentals as $rental){
                if ($rental->typeRental->id == $idType){
                    $liste.=$rental->displayRental(); 
                }
            }
            return $liste;
        }
    }