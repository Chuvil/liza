<?php
if(isset($page)) {
    /*if($page=="index"){
        require_once ("list.php");
    }*/
    $query="SELECT title, content, meta_title, meta_desc, meta_keywords, image FROM settings WHERE page='".$page."'";
    $result=mysqli_query($dbc, $query) or die("Ошибка запроса страницы");
    $next=mysqli_fetch_array($result);
    $smarty_main->assign("title", $next['title']);
    $smarty_main->assign("sContent", $next['content']);
    $smarty_main->assign("meta_title", $next['meta_title']);
    $smarty_main->assign("meta_desc", $next['meta_desc']);
    $smarty_main->assign("meta_keywords", $next['meta_keywords']);
    $smarty_main->assign("image", $next['image']);
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
    mysqli_close($dbc);
}else{
    echo"Error, view is not accecible <a href='index.php'>Home</a>";
}