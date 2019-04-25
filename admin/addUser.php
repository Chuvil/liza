<?php
require_once ("header.php");
$smarty_user=new Smarty();
if(!isset($_POST['send'])){
    $content=$smarty_user->fetch("addUser.tpl");
}elseif(isset($_POST['send'])&&!empty($_POST['name'])&&!empty($_POST['login'])&&!empty($_POST['password'])&&$_POST['password']===$_POST['password1']){

}