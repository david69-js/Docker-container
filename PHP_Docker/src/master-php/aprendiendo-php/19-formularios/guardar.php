<?php
echo '<br>';

echo '<h1>Titulos y descripciones</h1>';
//Asi es con Get
if(isset($_GET['title']) && isset($_GET['description'])){
    echo "<h2>".$_GET['title']."</h2>".'<br>';
    echo "<h2>".$_GET['description']."</h2>"."<br>";
}
//Asi es con POST
if(isset($_POST['title']) && isset($_POST['description'])){
    echo "<h2>".$_POST['title']."</h2>".'<br>';
    echo "<h2>".$_POST['description']."</h2>"."<br>";
}

echo '<br>';
?>