<?php

require'csdl.php';
if(isset($_POST['btn-reg'])){
    
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
   
    $content=$_POST['content'];
   
    if(!empty($fullname)&&!empty($email)&&!empty($content)){
        
        print_r($_POST);

        $sql ="INSERT INTO `lienhe` (`fullname`,`email`,`content`) VALUES('$fullname','$email','$content')";
    if($conn->query($sql)===TRUE){
       
        header("Location: curron.php");
        exit();


    }else {
        echo "Lỗi{$sql}".$conn->error;
    }
    }else{
        echo" Bạn cần nhập đầy đủ thông tin";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Liên Hệ</title>
    <link rel="icon" href="../Images/logo_small.f2cdcd68.svg">
</head>
<style>
    body{
        background: url(../Images/vo_ng_nu_.webp);
    }
    form {       
        border: 2px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        line-height: 3px;
        color: black;
        width: 80%;
        margin-left:-50%;
    }
</style>

<body>
    <div class="container">       
        <div class="row">
            <div class="col-6 offset-md-3">
                <form id="form_reg" class="bg-black p-4 my-3" method="post" action="">
                    <h2 class="py-3 text-center text-uppercase">Liên Hệ</h2>

                    <div class="form-group">
                        <label for="fullname">Họ và tên:</label>
                        <input type="text" id="fullname" name="fullname" class="form-control" requirer><br><br>
                    </div>
                   
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required><br><br>
                    </div>
                    
                    <div class="form-group">
                        <label for="content">Nội Dung Góp ý:</label>
                        <input type="text" id="content" name="content" class="form-control" required><br><br>
                    </div>
                    
                    <input type="submit" class="btn btn-primary btn-block mt-4" name="btn-reg" value="Gửi">
                </form>
            </div>
        </div>
    </div>
</body>

</html>