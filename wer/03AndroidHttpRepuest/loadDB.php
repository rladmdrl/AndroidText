<?php

    header('Content-Type:text/plain; charset=utf-8');

    $conn=mysqli_connect("localhost","rlatextdmdrl","red1805713!","rlatextdmdrl");
    mysqli_query($conn,"set names utf8");

    $sql="SELECT * FROM doard2";
    $result=mysqli_query($conn,$sql);

    $row_num=mysqli_num_rows($result);

    for ($i=0; $i <$row_num ; $i++) {

        $row=mysqli_fetch_array($result,MTSQLI_ASSOC);
        echo $row['no']. "&".$row['name']."&".$row['msg']."&".$row['date'].";";
    }

    mysqli_close($conn);

?>