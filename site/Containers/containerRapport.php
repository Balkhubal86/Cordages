<?php
    include_once("tools/autoload.php");
    class containerRapport
    {
        private $rapports;

        public function __construct()
        {
            $this->rapports = new ArrayObject();
        }

        public function addRapport($id, $name, $year, $path)
        {
            $this->rapports->append(new actionRapport($id, $name, $year, $path));
        }

        public function listRapport()
        {
            $liste = '';
		    foreach ($this->rapports as $rapport)
		    	{	
                    $liste = $liste.$rapport->displayRapport();
		    	}
		    return $liste;
        }

    }