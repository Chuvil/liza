<?php
require_once ("header.php");
$smarty_page=new Smarty();
$query="SELECT id, title, image FROM settings ORDER BY priority";
$result=mysqli_query($dbc, $query) or die("Ошибка запроса");
$pages=array();
while ($next=mysqli_fetch_array($result)){
    $image=nopic($next['image']);
    $pages[]=array("id"=>$next['id'], "title"=>$next['title'], "image"=>$image);
}
$smarty_page->assign("pages", $pages);
$smarty_page->assign("number", 1);
$content=$smarty_page->fetch("indexPages.tpl");
require_once ("main.php");