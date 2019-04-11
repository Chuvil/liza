<?php
if(isset($_GET['id'])&&!empty($_GET['id'])){
    require_once ("header.php");
    $page="post";
    $smarty_post=new Smarty();
    $query="SELECT name, text, photo, date FROM posts WHERE id='".$_GET['id']."'";
    $result=mysqli_query($dbc, $query) or die("Ошибка запроса");
    $next=mysqli_fetch_array($result);
    $smarty_post->assign("name", $next['name']);
    $smarty_post->assign("text", $next['text']);
    $photo=nopic($next['photo']);
    $smarty_post->assign("photo", $photo);
    $smarty_post->assign("date", $next['date']);
    $content=$smarty_post->fetch("post.tpl");
    require_once ("main.php");
}else{
    print_r($_GET);
    echo "Такого поста не существует";
}