<?php
     $sql = "SELECT * FROM sanpham"; 
     $query = mysqli_query($connect,$sql);
    if(isset($_POST['sbm'])) {
        $TenSanPham = $_POST['TenSanPham'];
        $Anh = $_FILES['Anh']['name'];
        $Anh_tmp = $_FILES['Anh']['tmp_name'];
        $Gia = $_POST['Gia'];
      

        $sql = "INSERT INTO sanpham (TenSanPham,Anh,Gia) 
        VALUES ('$TenSanPham', '$Anh', '$Gia')";
        $query = mysqli_query($connect,$sql);
        move_uploaded_file($Anh_tmp,'../Images/'.$Anh);
        header('location: sanpham.php?page_layout=danhsach');
    }
?>
<style>
    body {
    background: url('..//Images/pic-02.e2d7363f.jpg');
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.conteiner-fluid {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 90vh;
    text-align:center;
}

.card {
    width: 400px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    padding: 20px;
    margin-top: 50px;
}

.card-header h2 {
    margin: 0;
    padding-bottom: 10px;
    border-bottom: 1px solid #ccc;
}

.card-body .form-group {
    margin-bottom: 15px;
}

.form-control {
    width: 100%;
    padding: 8px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

.btn-custom {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: block;
    width: 100%;
    font-size: 16px;
    margin-top: 15px;
    cursor: pointer;
    border-radius: 4px;
}

.btn-custom:hover {
    background-color: #45a049;
}

</style>



<div class="conteiner-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm</h2>
        </div>
        <div class="card-body">
            
        </div>
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Tên Sản Phẩm</label>
                  <input type="text" name="TenSanPham"class="form-control" required> 
                </div>

                <div class="form-group">
                  <label for="">Đơn Giá</label>
                  <input type="number" name="Gia"class="form-control" required> 
                </div>

                <div class="form-group">
                  <label for="">Ảnh Sản Phẩm</label>
                  <input type="file" name="Anh"class="form-control" required> 
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Thêm Sản Phẩm</button>  
            </form>
            
    </div>
</div>