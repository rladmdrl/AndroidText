<?php

header('Comtent-Type:text/html; charset=utf-8');

$title=$_POST['title'];
$message=$_POST['msg'];

//사용자 에게 응답
echo "제목 : $title <br>";
echo "메세지 : $message";

?>