<?php

class Article {
    private $article;
    private $db;

    public function __construct(){
        $this->db = $this->getDb();

        $articlesStatement = $this->db->prepare('SELECT * FROM articles');
        $articlesStatement->execute();
        $articles = $articlesStatement->fetchAll();
        $this->article = $articles;
    }

    public function getArticles(){
        return $this->article;
    }

    public function deleteArticle($id){
        $sqlQuery = 'DELETE FROM articles WHERE id=:id';
        $deleteArticle = $this->db->prepare($sqlQuery);
        $deleteArticle->execute([
           'id' => $id
        ]);
    }

    public function addArticle($titre,$auteur,$texte,$date_pub){
        $sqlQuery = 'INSERT INTO articles(titre,auteur,texte,date_publication) VALUES (:titre, :auteur, :texte, :date_pub)';
        $insertArticle = $this->db->prepare($sqlQuery);
        $insertArticle->execute([
            'titre' => $titre,
            'auteur' => $auteur,
            'texte' => $texte,
            'date_pub' => $date_pub, 
        ]);
    }

    public function getDb(){
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=database;charset=utf8', 'root', '');
        }
        catch (Exception $e)
        { 
            die('Erreur : ' . $e->getMessage());
        }   
        return $db;
    }



}