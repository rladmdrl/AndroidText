<?php
 header('Content-Type:application/json; charset=utf-8');

    $conn=mysqli_connect("localhost","rlatextdmdrl","red1805713!","rlatextdmdrl");
    mysqli_query($conn,"set names utf8");

    $sql="SELECT * FROM market";
    $result=mysqli_query($conn,$sql);

    $row_num=mysqli_num_rows($result);

    $rows=array();
    for ($i=0; $i < $row_num; $i++) { 
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $rows[$i]=$row;
    }

    echo json_encode($rows);

    mysqli_close($conn);

?>