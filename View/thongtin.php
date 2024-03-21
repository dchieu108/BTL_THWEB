<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Thông tin khách hàng</title>
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
        width: 150%;
        
    }
    
</style>
<body>
    <div style="display:flex; margin-right:130px;">
        <div class="container">       
            <div class="row">
                <div class="col-6 offset-md-3">
                    <form id="form_reg" class="bg-black p-4 my-3" method="post" action="">
                        <h2 class="py-3 text-center text-uppercase">Thông tin cá nhân</h2>
                        <div style="width: 150px; 
                                    height: 150px; 
                                    border-radius: 50%; 
                                    overflow: hidden;
                                    display: flex;
                                    margin-left: 100px;">
                            <img src="..//Images/ok-1--scaled.jpg" alt="" style="width: 300%; 
                                                                                height: auto; 
                                                                                display: block;">
                        </div>
                        <div class="form-group">
                            <label for="fullname">Họ và tên:</label>
                            <input type="text" id="fullname" name="fullname" class="form-control" requirer><br><br>
                        </div>
                        <div class="form-group">
                            <label for="username">Tài khoản:</label>
                            <input type="text" id="username" name="username" class="form-control" required><br><br>
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu:</label>
                            <input type="password" id="password" name="password" class="form-control" required><br><br>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required><br><br>
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại:</label>
                            <input type="tel" id="phone" name="phone" class="form-control" required><br><br>
                        </div>
                        <input type="submit" class="btn btn-primary btn-block mt-4" name="btn-reg" value="Đăng ký">
                    </form>
                </div>
            </div>
        </div>
        <div class="container">       
            <div class="row">
                <div class="col-6 offset-md-3">
                    <form id="form_reg" class="bg-black p-4 my-3" method="post" action="">
                        <h2 class="py-3 text-center text-uppercase"> Chỉnh sửa Thông tin </h2>
                        <div class="form-group">
                            <label for="">Ảnh Sản Phẩm</label>
                            <input type="file" name="Anh"class="form-control" required> 
                        </div>
                        <div class="form-group">
                            <label for="fullname">Họ và tên:</label>
                            <input type="text" id="fullname" name="fullname" class="form-control" requirer><br><br>
                        </div>
                        <div class="form-group">
                            <label for="username">Tài khoản:</label>
                            <input type="text" id="username" name="username" class="form-control" required><br><br>
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu:</label>
                            <input type="password" id="password" name="password" class="form-control" required><br><br>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required><br><br>
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại:</label>
                            <input type="tel" id="phone" name="phone" class="form-control" required><br><br>
                        </div>
                        <input type="submit" class="btn btn-primary btn-block mt-4" name="btn-reg" value="Chỉnh sửa">
                    </form>
                </div>
            </div>
        </div>
    </div>
   
</body>
</html>