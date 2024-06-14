<?php
    class actionPdf
    {
        public function __construct(private int $id, private string $name, private string $path, private DateTime $uploaded_at){}

        public function __get($attribut)
        {
            switch($attribut)
            {
                case 'id':
                    return $this->id;
                case 'name':
                    return $this->name;
                case 'path':
                    return $this->path;
                case 'uploaded_at':
                    return $this->uploaded_at;
            }
        }

        public function __set($attribut, $value)
        {
            switch($attribut)
            {
                case 'name':
                    $this->name = $value;
                    break;
                case 'path':
                    $this->path = $value;
                    break;
            }
        }

        public function displayPdf()
        {
            $result = $this->id.'|'.$this->name.'|'.$this->path.'|'.$this->dateTimeToString($this->uploaded_at).'|';
            return $result;
        }

        function dateTimeToString(DateTime $dateTime) {
            $dateFormat = 'Y-m-d';
            return $dateTime->format($dateFormat);
        }
    }