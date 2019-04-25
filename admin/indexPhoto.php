<?php
require_once ("header.php");
$smarty_index=new Smarty();
$query="SELECT * FROM photos";
$result=mysqli_query($dbc, $query) or die("Ошибка запроса");
$photos=array();
while ($next=mysqli_fetch_array($result)){
    $photo=nopic($next['photo']);
    $photos[]=array("id"=>$next['id'], "name"=>$next['name'], "photo"=>$photo);
}
$smarty_index->assign("photos", $photos);
$smarty_index->assign("number", 1);
$content=$smarty_index->fetch("indexPhoto.tpl");
require_once ("main.php");