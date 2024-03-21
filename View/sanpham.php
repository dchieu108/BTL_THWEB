<?php
    require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link rel="icon" href="../Images/logo_small.f2cdcd68.svg">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
</head>
<body>
     <?php
        if(isset($_GET['page_layout'])) {
            switch ($_GET['page_layout']) {
                case 'danhsach':
                    require_once 'danhsach.php';
                    break;
                case 'them':
                    require_once 'them.php';
                    break;
                case 'sua':
                    require_once 'sua.php';
                    break;
                case 'xoa':
                    require_once 'xoa.php';
                    break;    
                default:    
                    require_once 'danhsach.php';
                    break;
            }    
            } else{
                require_once 'danhsach.php';
            }
        
           
    ?>    
</body>
</html>    