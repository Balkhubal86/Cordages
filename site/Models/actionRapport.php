<?php
    class actionRapport
    {
        public function __construct(private int $id, private string $name, private int $year, private string $path){}

        public function __get($attribut)
        {
            switch($attribut)
            {
                case 'id':
                    return $this->id;
                case 'name':
                    return $this->name;
                case 'year':
                    return $this->year;
                case 'path':
                    return $this->path;
            }
        }

        public function __set($attribut, $value)
        {
            switch($attribut)
            {
                case 'name':
                    $this->name = $value;
                case 'year':
                    $this->year = $value;
                case 'path':
                    $this->path = $value;
            }
        }

        public function displayRapport()
        {
            $result = $this->id.'|'.$this->name.'|'.$this->year.'|'.$this->path.'|';
            return $result;
        }
    }