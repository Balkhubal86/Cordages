<?php
    include_once("tools/autoload.php");
    class containerRole
    {
        private $roles;

        public function __construct()
        {
            $this->roles = new ArrayObject();
        }

        public function addRole($id, $libelle)
        {
            $this->roles->append(new actionRole($id, $libelle));
        }

        public function listRole()
        {
            $liste = '';
		    foreach ($this->roles as $role)
		    	{	
                    $liste = $liste.$role->displayROle();
		    	}
		    return $liste;
        }
    }
