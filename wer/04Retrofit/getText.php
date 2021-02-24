<?php
    header('Content-Type:application/json; charset=utf-8');

    $name=$_GET['name'];
    $msg=$_GET['msg'];

    //받은데이터 확인하기
    //단 retrofit이 결과를 json 문자열로 달라하ㅐ서
    //$name,$msg변수의 값을 json 무자열로 변경하기위해
    //연관배열로함
    $arr=array();
    $arr['name']=$name;
    $arr['msg']=$msg;
    // 연관배열릉 json 문자열로 변환
    echo json_encode($arr);

?>