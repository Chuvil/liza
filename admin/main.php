<?php
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
mysqli_close($dbc);