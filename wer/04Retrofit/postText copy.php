<?php

    header('Content-Type:application/json; charset=utf-8');

    // //@Body로 보낸 json문자열은 $_POST라는 배열에 자동 저장안됌
    // $data=file_get_contents('php://input');
    // $_POST=json_decode($data,trait);

    

    $name=$_POST['name'];
    $msg=$_POST['msg'];
    
    $arr=array();
    $arr['name']=$name;
    $arr['msg']=$msg;

    echo json_encode($arr);

?>