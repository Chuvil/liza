<?php
require_once ("header.php");
$page="contact";
$smarty_contact=new Smarty();
/*$query="SELECT content FROM settings WHERE page='".$page."'";
$result=mysqli_query($dbc, $query) or die("Ошибка запроса");
$next=mysqli_fetch_array($result);
if(isset($_POST['send'])){
    $query="INSERT INTO messages(name, subject, email, message, time) VALUES ('".$_POST['name']."', '".$_POST['subject']."', '".$_POST['email']."', '".$_POST['message']."', now())";
    mysqli_query($dbc, $query) or die("Ошибка сообщения");
    $form="Ваше сообщение успешно отправлено";
    $smarty_contact->assign("form", $form);
}
$smarty_contact->assign("sContent", $next['content']);*/
$content=$smarty_contact->fetch("contact.tpl");
require_once ("main.php");