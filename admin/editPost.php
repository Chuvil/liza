<?php
require_once ("header.php");
if(isset($_GET['id'])){
    $smarty_edit=new Smarty();
    $query="SELECT * FROM posts WHERE id='".$_GET['id']."'";
    $result=mysqli_query($dbc, $query) or die("Ошибка запроса");
    $next=mysqli_fetch_array($result);
    $smarty_edit->assign("name", $next['name']);
    $smarty_edit->assign("theme", $next['theme']);
    $smarty_edit->assign("text", $next['text']);
    $oldPhoto=nopic($next['photo']);
    $smarty_edit->assign("oldPhoto", $oldPhoto);
    $smarty_edit->assign("date", $next['date']);
    $smarty_edit->assign("id", $next['id']);
    $content=$smarty_edit->fetch("editPost.tpl");
}elseif(isset($_POST['send'])&&!empty($_POST['id'])&&!empty($_POST['name'])&&!empty($_POST['theme'])&&!empty($_POST['text'])){
    if($_FILES['newPhoto']['error']==0){
        $oldPhoto=$_POST['oldPhoto'];
        if(isset($oldPhoto)&&$oldPhoto!='nopic.jpg'){
            @unlink("../img/posts/$oldPhoto");
        }
        $filenameTMP=$_FILES['newPhoto']['tmp_name'];
        $filename=time().$_FILES['newPhoto']['name'];
        move_uploaded_file($filenameTMP, "../img/posts/$filename");
        $query="UPDATE posts SET name='".$_POST['name']."', theme='".$_POST['theme']."', text='".$_POST['text']."', photo='$filename' WHERE id='".$_POST['id']."'";
    }else{
        $query="UPDATE posts SET name='".$_POST['name']."', theme='".$_POST['theme']."', text='".$_POST['text']."' WHERE id='".$_POST['id']."";
    }
    mysqli_query($dbc, $query) or die("Ошибка обновления");
    $content="Пост обновлён";
}else{
    $content="Недостаточно данных для обновления";
}
require_once ("main.php");