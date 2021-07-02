<h1>Votre article est en ligne, la communauté vous repondra sous peu </h1>

<?php
session_start();
echo"<p>".$_POST["topic_author"]."</p>";
echo"<p>".$_POST["topic_object"]."</p>";
echo"<p>".$_POST["data_text"]."</p>";


if ($_POST){
    if(isset($_POST["topic_author"])&&!empty($_POST["topic_author"])
    && isset($_POST["topic_object"])&&!empty($_POST["topic_object"])
    && isset($_POST["data_text"])&&!empty($_POST["data_text"])) {
     
        $author=strip_tags($_POST['topic_author']);
        $object=strip_tags($_POST['topic_object']);
        $text=strip_tags($_POST['data_text']);
    
    
        require_once("db-connect.php");
        $sql = "INSERT INTO topic (`author`, `object`, `text`) VALUES (:author,:object , :text)";
        $query =  $db-> prepare($sql);
        $query->bindValue(':author',$author,PDO::PARAM_STR);
        $query->bindValue(':object',$object,PDO::PARAM_STR);
        $query->bindValue(':text',$text,PDO::PARAM_STR);
        $query->execute();

        $_SESSION['success']="Message publié !";
        header('Location:index.php');
    


    }else {
        $_SESSION['error']="Remplissez tout les champs";
        header('Location:index.php');
    }

}else {
    $_SESSION['error']="Vous devez ecrire quelque chose ";
    header('Location:index.php');
}


?>
<button><a href="index.php">Retour</a>
</button>