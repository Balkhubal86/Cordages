<?php
    class actionRole
    {
        public function __construct(private int $idRole, private string $libelleRole){}

        public function __get($attribut)
        {
            switch($attribut)
            {
                case 'idRole':
                    return $this->idRole;
                case 'libelleRole':
                    return $this->libelleRole;
            }
        }

        public function __set($attribut, $value)
        {
            switch($attribut)
            {
                case 'idRole':
                    $this->idRole = $value;
                    break;
                case 'libelleRole':
                    $this->libelleRole = $value;
                    break;
            }
        }

        public function displayROle()
        {
            $result = $this->idRole.'|'.$this->libelleRole.'|';
            return $result;
        }
    }