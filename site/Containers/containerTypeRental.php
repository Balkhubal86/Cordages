<?php
    include_once("tools/autoload.php");
    class containerTypeRental
    {
        private $typeRentals;

        public function __construct()
        {
            $this->typeRentals = new ArrayObject();
        }

        public function addTypeRental($id, $libelle)
        {
            $this->typeRentals->append(new actionTypeRental($id, $libelle));
        }

        public function listTypeRental()
        {
            $liste = '';
		    foreach ($this->typeRentals as $typeRental)
		    	{	
                    $liste = $liste.$typeRental->displayTypePdf();
		    	}
		    return $liste;
        }

        public function giveTypeRentalById($id)
        {
            $find = false;
            $findTypeRental = null;
            $iTypeRental = $this->typeRentals->getIterator();

            while ((!$find) && ($iTypeRental->valid()))
            {
                if ($iTypeRental->current()->id == $id)
                {
                    $find = true;
                    $findTypeRental = $iTypeRental->current();
                }
                else
                {
                    $iTypeRental->next();
                }
            }
            return $findTypeRental;
        }
    }
