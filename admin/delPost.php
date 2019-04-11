<?php
require_once ("header.php");
if(isset($_GET['id'])){
    $smarty_del=new Smarty();
    $smarty_del->assign("id", $_GET['id']);
    $content=$smarty_del->fetch("delPost.tpl");
}elseif(isset($_POST['send'])&&!empty($_POST['del'])&&$_POST['del']=="yes"&&!empty($_POST['id'])){
    $queryPhoto="SELECT photo FROM posts WHERE id='".$_POST['id']."'";
    $resultPhoto=mysqli_query($dbc, $queryPhoto) or die("Ошибка удаления фото");
    $next=mysqli_fetch_array($resultPhoto);
    $photo=$next['photo'];
    if(!empty($photo)&&$photo!='nopic.jpg'){
        @unlink("../img/posts/$photo");
    }
    $queryDel="DELETE FROM posts WHERE id='".$_POST['id']."'";
    mysqli_query($dbc, $queryDel) or die("Ошибка удаления поста");
    $content="Пост удалён";
}else{
    $content="Недостаточно данных для удаления";
}
require_once ("main.php");