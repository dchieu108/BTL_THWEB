<?php
    session_start();
    require_once "connect.php";
    $id = $_GET["id"];
    $sql ="SELECT * FROM sanpham where ID=$id";
    $query = $connect->query($sql);

    $product_cart = array();
    foreach ($query as $value) {
        $product_cart[$value["ID"]] = $value;
    }
    // $detail =  $product_cart[$id];
    // echo "<pre>";
    // print_r($detail);
    if(isset($_POST["add-to-cart"])) {
        if(!isset($_SESSION["giohang"]) || $_SESSION["giohang"] == null) {
            $product_cart[$id]["so_luong"] = 1;
            $_SESSION["giohang"][$id] = $product_cart[$id];
            echo "<pre>";
                print_r($_SESSION["giohang"][$id]);
        }
        else {
            if (array_key_exists($id, $_SESSION["giohang"])) {
                $_SESSION["giohang"][$id]["so_luong"]+=1;
            }
            else {
                $product_cart[$id]["so_luong"] = 1;
            $_SESSION["giohang"][$id] = $product_cart[$id];
            }
        }
        header("location:shopping.php");
        // echo "<pre>";
        //     print_r($_SESSION["giohang"]);
    }
?>
