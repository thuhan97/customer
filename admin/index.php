<?php
ob_start();
session_start();
if($_SESSION['username'] == 'sam' && $_SESSION['password'] == '123456'){    
    include_once('../config/database.php');
    include_once('layouts/header.php');
?>
<!-- /header -->
 <?php
            if(isset($_GET['page_layout'])){
                switch($_GET['page_layout']){
                    case 'danhsachkhachhang': include_once('danhsachkhachhang.php');
                    break;
                    
                    case 'themkhachhang': include_once('themkhachhang.php');
                    break;  
                    
                    case 'suakhachhang': include_once('suakhachhang.php');
                    break;
                    case 'danhsachlichhen': include_once('danhsachlichhen.php');
                    break;  
                    case 'themlichhen': include_once('themlichhen.php');
                    break;
                    case 'sualichhen': include_once('sualichhen.php');
                    break;
                    case 'lienlac': include_once('lienlac.php');
                    break;
                }
            }
            else{
                include_once('dashboard.php');
            }
        ?>
          

<!-- footer -->
<?php
include_once('layouts/footer.php');
}
else{
    header('location:login.php');   
}
?>

           