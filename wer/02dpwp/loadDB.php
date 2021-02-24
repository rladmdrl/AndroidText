<?php

    header('Content-Type:text/html; charset=utf-8');

    $conn= mysqli_connect("localhost","rlatextdmdrl","red1805713!","rlatextdmdrl");

    mysqli_query($conn,"set names utf8");

    //테이블 데이터 읽어오기
    $sql="SELECT * FROM board";//레코드 읽어오기
    $result=mysqli_query($conn,$sql);
    if ($result) {
        
        //총 레코드(한줄) 수
        $rowCnt= mysqli_num_rows($result);
        for ($i=0; $i <$rowCnt ; $i++) {
            $row=mysqli_fetch_array($result, MYSQLI_ASSOC);//한줄 을 배열로 내놔
            echo $row['no']. "<br>";
            echo $row['title']. "<br>";
            echo $row['msg']. "<br>";
            $img=$row['file'];
            
            if($img!=null)echo "<img src='$img' width='50%'>"."<br>";
          

            
            echo $row['date']. "<br>";
            echo "===========================<br><br>";

            
        }

    }else{
        echo "검색실패";
    }

    mysqli_close($conn);
?>