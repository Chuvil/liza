<?php
require_once ("header.php");
$smarty_ip=new Smarty();
$query="SELECT id, name, photo FROM posts";
$result=mysqli_query($dbc, $query) or die("Ошибка запроса");
$posts=array();
while ($next=mysqli_fetch_array($result)){
    $photo=nopic($next['photo']);
    $posts[]=array("id"=>$next['id'], "name"=>$next['name'], "photo"=>$photo);
}
$smarty_ip->assign("posts", $posts);
$smarty_ip->assign("number", 1);
$content=$smarty_ip->fetch("indexPost.tpl");
require_once ("main.php");