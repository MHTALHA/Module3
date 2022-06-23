<?php include('../models/Article.php');

$newArticle=new Article();
$articles=$newArticle->getArticles();
