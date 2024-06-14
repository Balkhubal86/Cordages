<?php
    include_once("tools/autoload.php");
    class containerTypePdf
    {
        private $typePdfs;

        public function __construct()
        {
            $this->typePdfs = new ArrayObject();
        }

        public function addTypePdf($id, $libelle)
        {
            $this->typePdfs->append(new actionTypePdf($id, $libelle));
        }

        public function listTypePdf()
        {
            $liste = '';
		    foreach ($this->typePdfs as $typePdf)
		    	{	
                    $liste = $liste.$typePdf->displayTypePdf();
		    	}
		    return $liste;
        }

        public function giveTypePdfById($id)
        {
            $find = false;
            $findTypePdf = null;
            $iTypePdf = $this->typePdfs->getIterator();

            while ((!$find) && ($iTypePdf->valid()))
            {
                if ($iTypePdf->current()->id == $id)
                {
                    $find = true;
                    $findTypePdf = $iTypePdf->current();
                }
                else
                {
                    $iTypePdf->next();
                }
            }
            return $findTypePdf;
        }
    }
