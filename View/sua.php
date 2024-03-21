<?php
 $id = $_GET['id'];
     $sql = "SELECT * FROM sanpham"; 
     $query = mysqli_query($connect,$sql);

     $sql_up ="SELECT * FROM sanpham where ID =$id";
     $query_up = mysqli_query($connect,$sql);
     $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])) {
        $TenSanPham = $_POST['TenSanPham'];

        if( $_FILES['Anh']['name']==''){
            $Anh = $row_up['Anh'];

        }else{
            $Anh =  $_FILES['Anh']['name']; 
            $Anh_tmp =  $_FILES['Anh_tmp']['tmp_name'];
            move_uploaded_file($Anh_tmp, 'Images/'.$Anh);
        }
        
        $Anh_tmp = $_FILES['Anh']['tmp_name'];
        $Gia = $_POST['Gia'];
       

        $sql = "UPDATE sanpham SET TenSanPham = '$TenSanPham', Anh = '$Anh', Gia = '$Gia' WHERE ID = $id";
       
        $query = mysqli_query($connect,$sql);
        
        header('location: sanpham.php?page_layout=danhsach');
    }
?>
<style>
    body {
    background: url('..//Images/slider-04.9608317a.jpg');
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.conteiner-fluid {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    text-align:center;
   
}

.card {
    width: 400px;
    background-color: rgb(167, 164, 164);
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

.btn-success {
    background-color: black;
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


</style>



<div class="conteiner-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa sản phẩm</h2>
        </div>
        <div class="card-body">
            
        </div>
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Tên Sản Phẩm</label>
                  <input type="text" name="TenSanPham"class="form-control" required value="<?php echo $row_up['TenSanPham']; ?>"> 
                </div>

                <div class="form-group">
                  <label for="">Đơn Giá</label>
                  <input type="number" name="Gia"class="form-control" required value="<?php echo $row_up['Gia']; ?>"> 
                </div>

                <div class="form-group">
                  <label for="">Ảnh Sản Phẩm</label>
                  <input type="file" name="Anh"class="form-control" required value="<?php echo $row_up['Anh']; ?>"> 
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Sửa Sản Phẩm</button>  
            </form>
            
    </div>
</div>