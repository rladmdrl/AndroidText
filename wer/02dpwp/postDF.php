<?php

    header('Content-Type:text/html; charset=utf-8');

    $title=$_POST['title'];
    $message=$_POST['msg'];
    $file=$_FILES['img'];
    $srcName=$file['name'];
    $tmpName=$file['tmp_name'];

    $dstName= "./uploaded/" . date('YmdHis') . $srcName;

    $moveResult= move_uploaded_file($tmpName,$dstName);
    if($moveResult){
        echo "success upload<br>";
    }else{
        echo "tlfvp<br>";
    }
    $now= date("Y-m-d-H-i-s");

    $conn=mysqli_connect("localhost","rlatextdmdrl","red1805713!","rlatextdmdrl");
    //db제어겍체
    
    mysqli_query($conn,"ser names utf8");

    //전송데이터를표에저장
    $sql="INSERT INTO board(title,msg,file,date) VALUES('$title','$message','$dstName','$now')";

    $result=mysqli_query($conn,$sql);
    if($result){
        echo "insert success";
    }else{
        echo "insert fail";
    }
    mysqli_close($conn);
?>