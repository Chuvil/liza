<?php
$dbc=@mysqli_connect("localhost", "root", "", "liza") or die("Ошибка подключения к базе данных");
function myprotect($link, $data){
    return mysqli_real_escape_string($link, trim($data));
}
function nopic($pic){
    if(empty($pic)){
        $photo='nopic.jpg';
    }else{
        $photo=$pic;
    }
    return $photo;
}
