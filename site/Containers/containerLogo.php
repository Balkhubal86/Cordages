<?php
    include_once("tools/autoload.php");
    class containerLogo
    {
        private $logos;

        public function __construct()
        {
            $this->logos = new ArrayObject();
        }

        public function addLogo($id, $name, $path, $uploaded_at)
        {
            $this->logos->append(new actionLogo($id, $name, $path, $uploaded_at));
        }

        public function listLogo()
        {
            $liste = '';
		    foreach ($this->logos as $logo)
		    	{	
                    $liste = $liste.$logo->displayLogo();
		    	}
		    return $liste;
        }
    }
