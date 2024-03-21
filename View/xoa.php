<?php
  $id = $_GET['id'];
  $sql = "DELETE FROM sanpham WHERE id = $id  ";
  $query = mysqli_query($connect,$sql);
  header('location: sanpham.php?page_layout=danhsach.');
  
?>