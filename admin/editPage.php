<?php
require_once ("header.php");
$smarty_edit=new Smarty();
if(isset($_GET['id'])&&!empty($_GET['id'])&&!isset($_POST['send'])){
    $query="SELECT * FROM settings WHERE id='".$_GET['id']."'";
    $result=mysqli_query($dbc, $query) or die("Ошибка запроса");
    $next=mysqli_fetch_array($result);
    $smarty_edit->assign("title", $next['title']);
    $smarty_edit->assign("content", $next['content']);
    $smarty_edit->assign("meta_title", $next['meta_title']);
    $smarty_edit->assign("meta_desc", $next['meta_desc']);
    $smarty_edit->assign("meta_keywords", $next['meta_keywords']);
    $smarty_edit->assign("page", $next['page']);
    $smarty_edit->assign("image", nopic($next['image']));
    $smarty_edit->assign("priority", $next['priority']);
    $content=$smarty_edit->fetch("editPage.tpl");
}elseif(isset($_POST['send'])&&!empty($_POST['title'])&&!empty($_POST['content'])&&!empty($_POST['page'])&&!empty($_POST['priority'])){
    if($_FILES['newImage']['error']==0){
        $oldImage=$_POST['oldImage'];
        if(isset($oldImage)**$oldImage!='nopic.jpg'){
            @unlink("../img/$oldImage");
        }
        $filenameTMP=$_FILES['newImage']['tmp_name'];
        $filename=time().$_FILES['newImage']['name'];
        move_uploaded_file($filenameTMP, "../img/$filename");
        $query = "UPDATE settings SET title='" . $_POST['title'] . "', content='" . $_POST['content'] . "', meta_title='" . $_POST['meta_title'] . "', meta_desc='" . $_POST['meta_desc'] . "', meta_keywords='" . $_POST['meta_keywords'] . "', image='$filename', priority='" . $_POST['priority'] . "' WHERE id='" . $_POST['id'] . "'";
    }else{
        $query = "UPDATE settings SET title='" . $_POST['title'] . "', content='" . $_POST['content'] . "', meta_title='" . $_POST['meta_title'] . "', meta_desc='" . $_POST['meta_desc'] . "', meta_keywords='" . $_POST['meta_keywords'] . "', priority='" . $_POST['priority'] . "' WHERE id='" . $_POST['id'] . "'";
    }
    mysqli_query($dbc, $query) or die("Ошибка запроса редактирования");
    $content="Данные редактированы";
}else{
    $content="Недостаточно данных для редактирования";
}
require_once ("main.php");