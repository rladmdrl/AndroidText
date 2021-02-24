<?php

    header('Comtent-Type:text/plain; charset=utf-8 ');

    $name=$_POST['name'];
    $title=$_POST['title'];
    $msg=$_POST['msg'];
    $price=$_POST['price'];

    //@Part전달된 이미지
    $file=$_FILES['img'];
    $srcName=$_FILES['name'];
    $tmpName+$_FILES['tmp_name'];
    $size=$_FILES['size'];

    // echo "$name \n";
    // echo "$title \n";
    // echo "$msg \n";
    // echo "$price \n";
    // echo "$srcName\n";
    // echo "$tmpName \n";
    // echo "$size \n";

    //이미지파일 영구적저장 임시저장이동
    $dstName="./uploads/IMG_" . date('YmdHis').$srcName;
    move_uploaded_file($tmpName,$dstName);

    //메세지중에 특수문자 사용가능성 있음. 특수문자는 잘못 동작될 수있기에
    //앞에 슬래시를 추가해줌
    $msg=addslashes($msg);
    $title=addslashes($title);

    $now=date('Y-m-d-H:i:s');

    //MySQL DBdp저장데이터[테이블면 : market]
    $conn=mysqli_connect("localhost","rlatextdmdrl","red1805713","rlatextdmdrl");
    mysqli_query($conn,"set names utf8");

    $sql="INSERT INTO market(name,title,msg,price,file,favor,date) VALUES('$name','$title','$msg','$price','$dstName',0,'$now')";
    $result=mysqli_query($conn,$sql);
    
    if ($result) echo "게시글 업로드완료.";
    else echo "게시글 업로드 실패";
    ?>