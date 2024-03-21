<?php
if (isset($_POST['btn-login'])) {
    // Thực hiện kết nối đến cơ sở dữ liệu MySQL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "qlydongho";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối đến MySQL thất bại: " . $conn->connect_error);
    }

    // Lấy giá trị từ form đăng nhập
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Chuẩn bị câu truy vấn SQL
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

    // Thực thi câu truy vấn
    $result = $conn->query($sql);

    // Kiểm tra và xử lý kết quả
    if ($result->num_rows == 1) {
        // Đăng nhập thành công
        echo "Đăng nhập thành công!";
        header("Location: curron.php");
    } else {
        // Đăng nhập thất bại
        $error = "Tên đăng nhập hoặc mật khẩu không đúng!";
    }

    // Đóng kết nối
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="icon" href="../Images/logo_small.f2cdcd68.svg">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<style>
body{
    background: url('..//Images/moraine_2.webp');
    background-size: cover;
    background-position-y: -180px;
    font-size: 16px;
    height: 120px;
}
#wrapper{
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    
}
#form-login{
    max-width: 400px;
    background: rgb(216, 192, 180);
    flex-grow: 1;
    padding: 30px 30px 40px;
    box-shadow: 0px 0px 17px 2px black;
    color:black;
    font-size: x-large;
    text-align: center;
}
.form-group{
    border-bottom: 1px solid black;
    margin-top: 15px;
    margin-bottom: 20px;
    display: flex;
}
.form-group i{
    color: black;
    font-size: 14px;
    padding-top: 5px;
    padding-right: 10px;
}
.form-input{
    background: transparent;
    border: 0;
    outline: 0;
    color: black;
    flex-grow: 1;
}
.form-input::placeholder{
    color: black;
}
#eye i{
    padding-right: 0;
    cursor: pointer;
}
.form-submit{
    background: transparent;
    border: 1px solid #f5f5f5;
    color:black;
    width: 100%;
    text-transform: uppercase;
    padding: 6px 10px;
    transition: 0.25s ease-in-out;
    margin-top: 30px;
}
.form-submit:hover{
    border: 1px solid #54a0ff;
}
h2.form-mid {
    color: black;
    font-size: medium;
    display: flex;
    justify-content: center;

}

a.button {
    background: transparent;
    border: 1px solid black;
    color:black;
    width: 95%;
    text-transform: uppercase;
    padding: 6px 10px;
    transition: 0.25s ease-in-out;
    margin-top: 40px;
    text-decoration: none;
    display:flex;
    margin-top:10px;
}

button.button.login{
    background: transparent;
   border: 1px solid black;
   color: black;
   width: 100%;
   text-transform: uppercase;
   padding: 6px 10px;
   transition: 0.25s ease-in-out;
   margin-top: 40px;
   text-decoration: none;
   display:flex;
   margin-top:10px;
   
}

button.button.login span{
   margin-left:140px;
   color:black;
   font-size:20px;
   font-family:Time;
}

.button.login span{
    margin-left:140px;
    color:black;
}

a.button.user span{
    margin-left: 150px;
    color:black;
    font-size:20px;
}
</style>
<body>
    <div id="wrapper">
        <form action="" method="post" id="form-login"><h2><b> Đăng nhập</b></h2>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" id="username" name="username" class="form-input" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" id="password" name="password" class="form-input" placeholder="Mật khẩu">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>

            <button type="submit" name="btn-login" class="button login">
                <span class="button-text">
                    Đăng nhập
                </span>
            </button>
            <h2 class="form-mid">Bạn chưa có tài khoản ?</h2>
            <a href="..//View/dangki.php" class="button user">
                <span class="button-text">
                    Đăng ký
                </span>
            </a>
            <span class="" >
                    <a href="..//View/quanly.php"> <h2 class="form-mid">Đăng nhập dành cho quản lý</h2> </a>
                </span>
            <?php if (!empty($error)) { ?>
                <p><?php echo $error; ?></p>
            <?php } ?>
        </form>
    </div>

</body>

</html>
