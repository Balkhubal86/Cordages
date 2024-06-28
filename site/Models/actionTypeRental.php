<?php
    class actionTypeRental
    {
        public function __construct(private int $id, private string $libelle){}

        public function __get($attribut)
        {
            switch($attribut)
            {
                case 'id':
                    return $this->id;
                case 'libelle':
                    return $this->libelle;
            }
        }

        public function __set($attribut, $value)
        {
            switch($attribut)
            {
                case 'libelle':
                    $this->libelle = $value;
                    break;
            }
        }

        public function displayTypeRental()
        {
            $result = $this->id.'|'.$this->libelle.'|';
            return $result;
        }
    }