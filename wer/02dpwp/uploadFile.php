<?php

    header('Comtent-Type:text/html; charset=utf-8');

    //사용자가 File을 보내면 실제 파일 데이터들을 임시저장소 (tmp)에 임시로 저장되며
    //이 php문서에는 File 의 정보만 전달됨. 그 정보를 $_FILES[]라는 배열에 저장함
    $fiel=$_FILES['img'];

    //$fiel은 배열임. 즉 $fiel 배열변수안에  전송된 파일에대한여러정보가 있음
    $srcName=$fiel['name'];//원본파일명
    $size=$fiel['size'];//파일사이즈
    $type=$fiel['type']; //파일타입
    $error=$fiel['error'];//에러정보
    $tmpName=$fiel['tmp_neme'];//파일임시저장주소

    echo "$srcName <br>";
    echo "$size <br>";
    echo "$type <br>";
    echo "$errore <br>";
    echo "$tmpName <br>";

    $dstName="./uploaded/" . date('Ymdhis') . $srcName;
    echo "$dstName";

    $result=move_uploaded_file($tmpName,$dstName);
    if($result){
        echo "success upload";
    }else{
        echo "tlfvp";
    }
?>