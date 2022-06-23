<?php
class Article {
   
    private $article;
    private $db;
    
    public function __construct()
    {
        $this->db = $this->dbConnect();
        $this->article=getArticle();
    }
  
    //connection to db
    public function dbConnect(){
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=database;charset=utf8', 'root', '');
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        };

    }
    public function getArticles(){
        $articlesStatement = $this->db->prepare('SELECT * FROM articles');
        $articlesStatement->execute();
        $articles = $articlesStatement->fetchAll();
        $this->article = $articles;
        return $this->article;
    }


  

       
}

