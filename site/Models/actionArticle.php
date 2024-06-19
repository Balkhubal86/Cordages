<?php
    class actionArticle
    {
        private int $id;
        private string $title;
        private string $description;
        private string $image = ''; // valeur par défaut vide
        private string $link = ''; // valeur par défaut vide
        private DateTime $created_at;
        private DateTime $update_at;


        public function __construct($id, $title, $description, $created_at, $update_at, $image = null, $link = null) {
            $this->id = $id;
            $this->title = $title;
            $this->description = $description;
            $this->image = $image?? ''; // si $image est null, utilise la valeur par défaut
            $this->link = $link?? ''; // si $link est null, utilise la valeur par défaut
            $this->created_at = $created_at;
            $this->update_at = $update_at;
        }

        public function __get($attribut)
        {
            switch($attribut)
            {
                case 'id':
                    return $this->id;
                case 'title':
                    return $this->title;
                case 'description':
                    return $this->description;
                case 'image':
                    return $this->image!== null? $this->image : ''; // retourne une chaîne vide si image est null
                case 'link':
                    return $this->link!== null? $this->link : ''; // retourne une chaîne vide si link est null
                case 'created_at':
                    return $this->created_at;
                case 'update_at':
                    return $this->update_at;
            }
        }

        public function __set($attribut, $value)
        {
            switch($attribut)
            {
                case 'id':
                    $this->id = $value;
                    break;
                case 'title':
                    $this->title = $value;
                    break;
                case 'description':
                    $this->description = $value;
                    break;
                case 'image':
                    $this->image = $value!== null? $value : ''; // affecte une chaîne vide si image est null
                    break;
                case 'link':
                    $this->link = $value!== null? $value : ''; // affecte une chaîne vide si link est null
                    break;
                case 'created_at':
                    $this->created_at = $value;
                    break;
                case 'update_at':
                    $this->update_at = $value;
                    break;
            }
        }

        public function displayArticle()
        {
            $result = $this->id.'|'.$this->title.'|'.$this->description.'|'.$this->image.'|'.$this->link.'|'.$this->dateTimeToString($this->created_at).'|'.$this->dateTimeToString($this->update_at).'|';
            return $result;
        }

        function dateTimeToString(DateTime $dateTime) {
            $dateFormat = 'Y-m-d';
            return $dateTime->format($dateFormat);
        }
    }