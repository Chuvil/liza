<?php
require_once ("header.php");
if(!isset($_POST['send'])){
    $smarty_add=new Smarty();
    $content=$smarty_add->fetch("addPost.tpl");
}elseif(isset($_POST['send'])&&!empty($_POST['name'])&&!empty($_POST['theme'])&&!empty($_POST['text'])){
    if($_FILES['photo']['error']==0){
        $filenameTMP=$_FILES['photo']['tmp_name'];
        $filename=time().$_FILES['photo']['name'];
        move_uploaded_file($filenameTMP, '../img/posts/'.$filename);
        $query="INSERT INTO posts(name, theme, text, photo, date) VALUES ('".$_POST['name']."', '".$_POST['theme']."', '".$_POST['text']."', '$filename', now())";
    }else{
        $query="INSERT INTO posts(name, theme, text, date) VALUES ('".$_POST['name']."', '".$_POST['theme']."', '".$_POST['text']."', now())";
    }
    mysqli_query($dbc, $query) or die("Ошибка добавления");
    $content="Запись добавлена. <a href='addPost.php'>Добавить ещё</a>";
}else{
    $content="Недостаточно данных для добавления записи";
}
require_once ("main.php");