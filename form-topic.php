<?php include ('header.php');?>
    
<form action="handler-topic.php" method="post" enctype="multipart/form-data">
<div>
            <label for="input_author">Auteur</label>
            <input type="text" id="input_author" name="topic_author">
        </div>
        <div>
            <label for="input_object">Sujet de l'article</label>
            <input type="text" id="input_object" name="topic_object">
        </div>
        <div>
            <label for="input_text">Article</label>
            <textarea name="data_text" id="topic_text" cols="30" rows="10"></textarea>
        </div>
        <div>
        <button class="btn btn-outline-primary" type="submit">Publier</button>
        </div>
        </form>
        
<?php include ('footer.php');?>