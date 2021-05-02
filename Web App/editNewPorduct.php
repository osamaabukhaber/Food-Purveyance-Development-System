<?php 
session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include 'int.php';
        $productname = $_POST['name'] ;
        $productquantity = $_POST['quantity'] ;
        $productid  = $_POST['productid'] ;
        echo $productname . $productquantity , $productid ;
        $stat = $con->prepare('');
    
    include $stl . 'footer.php';
} 
else {
    header('Location: index.php');
    exit();
}
?>