<?php
require_once ("header.php");
$smarty_page=new Smarty();
$query="SELECT id, title, content, image FROM settings ORDER BY priority";
$result=mysqli_query($dbc, $query) or die("Ошибка запроса");
$pages=array();
while ($next=mysqli_fetch_array($result)){
    $image=nopic($next['image']);
    $pages[]=array("id"=>$next['id'], "title"=>$next['title'], "content"=>$next['content'], "image"=>$next['image']);
}
$smarty_page->assign("pages", $pages);
$content=$smarty_page->fetch("indexPages.tpl");
require_once ("main.php");