<?php

    header('Content-Type:text/plain; charset=utf-8');

    $title=$_POST['title'];
    $msg=$_POST['msg'];

    echo "$title : $msg";
?>