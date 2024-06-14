<?php
    include_once("tools/autoload.php");
    class containerPdf
    {
        private $pdfs;

        public function __construct()
        {
            $this->pdfs = new ArrayObject();
        }

        public function addPdf($id, $name, $path, $uploaded_at)
        {
            $this->pdfs->append(new actionPdf($id, $name, $path, $uploaded_at));
        }

        public function listPdf()
        {
            $liste = '';
		    foreach ($this->pdfs as $pdf)
		    	{	
                    $liste = $liste.$pdf->displayPdf();
		    	}
		    return $liste;
        }
    }
