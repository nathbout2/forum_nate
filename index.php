<?php include ('header.php');?>

<?php
if(!empty($_SESSION['error'])){
    echo '<div class="alert alert-danger" role="alert">'.$_SESSION['error'].'</div>';
    $_SESSION['error']='';
}

if(!empty($_SESSION['success'])){
    echo '<div class="alert alert-success" role="alert">'.$_SESSION['success'].'</div>';
    $_SESSION['error']='';
}
?>

    <div class="card">
    <?php
    foreach ($result as $topic) {
                ?>
                <div class="grid-item">
                    <div class="title">
                        <h2><?= $topic['object'] ?></h2>
                    </div>       
                </div>
                <?php
                }
                ?>
    </div>
    <a href="form-topic.php"><button type="button" class="btn btn-outline-primary">Ajouter un article</button></a>
   
<?php include ('footer.php');?>