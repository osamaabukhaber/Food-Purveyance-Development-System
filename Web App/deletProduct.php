<?php 
    session_start();
    $PageTitel = 'edit';
    if (isset($_SESSION['Username'])){
        include 'int.php';
        $productid = '3';
        $productId = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0 ;
        $stmt   = $con->prepare('SELECT * FROM prodacts WHERE ProductD = ?');
        $stmt->execute(array($productId));
        $row =  $stmt->fetch();
        $cont = $stmt->rowCount();
        if ($cont > 0) {
            #  echo $row['ProductName'] ;
            $productQuantity = 0 ;
            $statment = $con->prepare('UPDATE prodacts SET  quant = ? WHERE ProductD = ?');
            $statment->execute([$productQuantity,$productid]);
            $a = $statment->rowCount();
            if ($a > 0 ) {
                echo 'deleted';
            } else {
                echo 'error';
            }
        } else {
            echo 'there is no such id';
        }
    
        include $stl . 'footer.php';
    } 
    else {
        header('Location: index.php');
        exit();
    }
?>