<?php
    $sql = "SELECT * FROM sanpham"; 
    $query = $connect->query($sql);
?>
<link rel="stylesheet" href="../font/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://allfont.net/allfont.css?fonts=roboto-thin" rel="stylesheet" type="text/css" />
    <!-- // Add the new slick-theme.css if you want the default styling -->


    <link rel="stylesheet" href="../Css/layout.css">
    <link rel="stylesheet" href="../Css/curon.css">
    <link rel="stylesheet" href="../Css/headerHover.css">
    <link rel="stylesheet" href="../Css/footer.css">
    <link rel="stylesheet" href="../Css/reponsive.css">
 <style>
    .card-header{
        background-color:  #ddd;
        background: red;
    }
    .btn-primary{
        margin-left:45%;
        background-color:  rgb(167, 164, 164);
    }
 </style>
<header>
        <nav class="menu">
            <div class="menu-center ">
                <div class="logo"><a href="..//View/dangnhap.php">Trở về</a></div>
            </div>
        </nav>
</header>
<div class="container-fluid">
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h1>Danh Sách Sản Phẩm</h1>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="card-header">
                        <tr>
                            <th>ID</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Đơn Giá</th>
                            <th>Ảnh</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=1;
                            while($row = mysqli_fetch_assoc($query)){ ?>
                                <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['TenSanPham']; ?></td>
                                <td><?php echo $row['Gia']; ?></td>

                                <td>
                                    <img src="../Images/<?php echo $row['Anh']; ?>" style="width:100px;">
                                    
                                </td>
                                <td> 
                                  <a href="sanpham.php?page_layout=sua&id=<?php echo $row['ID'] ?>">Sửa</a>
                                </td>
                                <td> 
                                   <a href="sanpham.php?page_layout=xoa&id=<?php echo $row['ID'] ?>">Xóa</a>
                                </td>
                            
                               
                                </tr>
                            <?php } ?>
                            
                        
                    </tbody>
                </table>
                <a class="btn btn-primary" href="sanpham.php?page_layout=them">Thêm mới</a>
            </div> 
        </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

   
    <script src="../Js/heder-hover.js"></script>
    <script src="../Js/slick.js"></script>
