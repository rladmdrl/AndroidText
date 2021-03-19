<?php
    header('Contemt-Type:text/html; charset=utf-8');

    $name= $_POST['name'];
    $password=$_POST['pw'];
    $gender=$_POST['gender'];
    $message=$_POST['msg'];
    $car=$_POST['car'];
    $message=nl2br($message);

    echo "$name <br>";
    echo "$password <br>";
    echo "$gender <br>";
    echo "$message <br>";
    echo "$car <br>";



    //멀티초이스에 의해 전달된 과일들은 배열로 전달되어옴.
    $fruits=$_POST['fruits'];

    $num=count($fruits);//배열의 길이를 구해주는 기본제공함수

    for($i=0;$i<$num;$i++){
        echo $fruits[$i] . ", ";
    }
?>