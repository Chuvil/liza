<?php
require_once ("header.php");
if(!isset($_POST['send'])) {
    $smarty_add = new Smarty();
    $content = $smarty_add->fetch("addPhoto.tpl");
}elseif(isset($_POST['send'])&&!empty($_POST['name']&&$_FILES['photo']['error']==0)){
    $filenameTMP=$_FILES['photo']['tmp_name'];
    $filename=time().$_FILES['photo']['name'];
    move_uploaded_file($filenameTMP, "../img/photos/$filename");
    $query="INSERT INTO photos(name, photo) VALUES('".$_POST['name']."', '$filename')";
    mysqli_query($dbc, $query) or die("Ошибка добавления в БД");
    $query2="SELECT id, name, photo FROM photos ORDER BY id DESC LIMIT 1";
    $result=mysqli_query($dbc, $query2) or die("Ошибка запроса фото");
    $next=mysqli_fetch_array($result);
    $content="Фото ".$next['name']." добавлено и доступно по ссылке <a href='../img/photos/".$next['photo']."'>liza/img/photos/".$next['photo']."</a>. <a href='addPhoto.php'>Добавить ещё фото</a>";
}else{
    $content="Фото не добавлено";
}
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
mysqli_close($dbc);