<?php
    $connect = mysqli_connect('localhost','root','','qlydongho');
    if($connect){
        mysqli_query($connect, "SET NAMES 'UTF8' ");
        // echo "ket noi thanh cong";
    } else{
        echo "Ket noi that bai" ;
    }
?>    