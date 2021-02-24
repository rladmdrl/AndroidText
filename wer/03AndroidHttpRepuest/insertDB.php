<?php

    header('Content-Type:text/plain; charset=utf-8');

    $name=$_POST['name'];
    $msg=$_POST['msg'];
    $now=data('Y-m-d H:i:s');

    //MySQL DB의 board2 테이블에 저장
    //1. DB서버에 접속
    $conn= mysqli_connect("localhost","rlatextdmdrl","red1805713!","rlatextdmdrl");//DB서버주소,DB접속아이디,비번,DB명

    //2.한글깨짐 방지
    mysqli_query($conn,"set names utf8");

    //3. 윈하는 쿼리문 작성
    $query="INSERT INTO board2(name,msg,date) VALUES('$name','$msg','$now')";

    //4. 쿼리문 실행
    $result=mysqli_query($conn,$query);

    if ($result) echo "insert success : $name";
    else echo "insert fail : $name";

    //5. DB연결 닫기
    mysqli_close($conn);
?>