<?php
    include_once("tools/autoload.php");
    class containerArticle
    {
        private $articles;

        public function __construct() {$this->articles = new ArrayObject();}

        public function addArticle($id, $title, $description, $image, $link, $created_at, $update_at)
        {
            $this->articles->append(new actionArticle($id, $title, $description, $image, $link, $created_at, $update_at));
        }

        public function listArticle()
        {
            $liste = '';
		    foreach ($this->articles as $article)
		    	{	
                    $liste = $liste.$article->displayArticle();
		    	}
		    return $liste;
        }
    }