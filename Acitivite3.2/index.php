<?php include_once('./models/Article.php');

$newArticles = new Article();
$articles = $newArticles->getArticles();

if (isset($_GET['url'])) {
    if($_GET['url'] == 'posterArticle'){
        include_once('../views/posterArticle.php');
    }
    elseif ($_GET['url'] == 'home') {
        include_once('./views/viewAccueil.php');
    }
}else{
    include_once('./views/viewAccueil.php');
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $newArticles->deleteArticle($id);
}

if ( isset($_POST['addArticle'])) {
    $newArticles->addArticle($_POST['titre'],$_POST['auteur'],$_POST['texte'],$_POST['date']);
}
