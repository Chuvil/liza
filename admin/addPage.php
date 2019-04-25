<?php
require_once ("header.php");
if(!isset($_POST['send'])){
    $smarty_add=new Smarty();
    $content=$smarty_add->fetch("addPage.tpl");
}elseif (isset($_POST['send'])&&!empty($_POST['title'])&&!empty($_POST['page'])&&!empty($_POST['priority'])){
    if($_FILES['image']['error']==0){
        $filenameTMP=$_FILES['image']['tmp_name'];
        $filename=time().$_FILES['image']['name'];
        move_uploaded_file($filenameTMP, "../img/$filename");
        $query="INSERT INTO settings(title, theme, content, meta_title, meta_desc, meta_keywords, page, image, priority) VALUES('".$_POST['title']."', '".$_POST['theme']."', '".$_POST['content']."', '".$_POST['meta_title']."', '".$_POST['meta_desc']."', '".$_POST['meta_keywords']."', '".$_POST['page']."', '$filename','".$_POST['priority']."')";
    }else{
        $query="INSERT INTO settings(title, theme, content, meta_title, meta_desc, meta_keywords, page, priority) VALUES('".$_POST['title']."', '".$_POST['theme']."', '".$_POST['content']."', '".$_POST['meta_title']."', '".$_POST['meta_desc']."', '".$_POST['meta_keywords']."', '".$_POST['page']."', '".$_POST['priority']."')";
    }
    mysqli_query($dbc, $query) or die("Ошибка добавления страницы");
    $content="Страница добавлена";
}else{
    $content="Недостаточно данных для добавления";
}
require_once ("main.php");