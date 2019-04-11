<?php
require_once ("header.php");
$page="index";
$smarty_list=new Smarty();
$limit=2;
$query="SELECT id, name, theme, date FROM posts";
$queryR=$query;
$resultR=mysqli_query($dbc, $queryR) or die("Ошибка запроса лимита");
$countRows=mysqli_num_rows($resultR);
$countPages=ceil($countRows/$limit);
if(isset($_GET['page'])){
    $activePage=$_GET['page'];
}else{
    $activePage=1;
}
$skip=($activePage-1)*$limit;
$pagesArray=array();
for($i=1; $i<=$countPages; $i++){
    $pagesArray[]=array("p"=>$i);
}
$query.=" LIMIT $skip, $limit";
$result=mysqli_query($dbc, $query) or die("Ошибка запроса");
$posts=array();
while ($next=mysqli_fetch_array($result)){
    $posts[]=array("id"=>$next['id'], "name"=>$next['name'], "theme"=>$next['theme'], "date"=>$next['date']);
}
$smarty_list->assign("posts", $posts);
$smarty_list->assign("pagesArray", $pagesArray);
$smarty_list->assign("activePage", $activePage);
$smarty_list->assign("countPages", $countPages);
$content=$smarty_list->fetch("list.tpl");
require_once ("main.php");