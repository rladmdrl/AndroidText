<?php

    header('Content-Type:text/plain; charset=utf-8');

    //Android로 GET부터 보내온 데이터
    $title=$_GET['title'];
    $msg=$_GET['msg'];

    //잘 받았나확인하기
    echo "title : $title \n";
    echo "message : $msg";
?>