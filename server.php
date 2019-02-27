<?php
header("Content-type:text/html;charset=UTF-8");
$data=json_decode($_POST['data']);
echo($data);
?>