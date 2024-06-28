<?php
    class actionRental
    {
        private int $id;
        private string $name;
        private DateTime $posted_at;
        private actionTypeRental $typeRental;
        private string $image = ''; // valeur par défaut vide
        private string $description = ''; // valeur par défaut vide
        
        public function __construct($id, $name, $posted_at, $typeRental, $image = null, $description = null) {
            $this->id = $id;
            $this->name = $name;
            $this->posted_at = $posted_at;
            $this->typeRental = $typeRental;
            $this->image = $image?? ''; // si $image est null, utilise la valeur par défaut
            $this->description = $description?? ''; // si $link est null, utilise la valeur par défaut
        }

        public function __get($attribut)
        {
            switch($attribut)
            {
                case 'id':
                    return $this->id;
                case 'name':
                    return $this->name;
                case 'posted_at':
                    return $this->posted_at;
                case 'typeRental':
                    return $this->typeRental;
                case 'image':
                    return $this->image!== null? $this->image : ''; // retourne une chaîne vide si image est null
                case 'description':
                    return $this->description!== null? $this->description : ''; // retourne une chaîne vide si link est null
            }
        }

        public function __set($attribut, $value)
        {
            switch($attribut)
            {
                case 'id':
                    $this->id = $value;
                    break;
                case 'name':
                    $this->name = $value;
                    break;
                case 'posted_at':
                    $this->posted_at = $value;
                    break;
                case 'typeRental':
                    $this->typeRental = $value;
                    break;
                case 'image':
                    $this->image = $value!== null? $value : ''; // affecte une chaîne vide si image est null
                    break;
                case 'description':
                    $this->description = $value!== null? $value : ''; // affecte une chaîne vide si link est null
                    break;
            }
        }

        public function displayRental()
        {
            $result = $this->id.'|'.$this->name.'|'.$this->dateTimeToString($this->posted_at).'|'.$this->typeRental->libelle.'|'.$this->image.'|'.$this->description.'|';
            return $result;
        }

        function dateTimeToString(DateTime $dateTime) {
            $dateFormat = 'Y-m-d';
            return $dateTime->format($dateFormat);
        }
    }