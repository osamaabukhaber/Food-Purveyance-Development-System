<?php 
session_start();
$PageTitel = 'edit';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'int.php';
    echo 'welcome';
    $productid = $_POST['productid'];
    $productName = $_POST['name'] ;
    $productQuantity = $_POST['quantity'] ;
    # echo $productName . $productQuantity  . $productid;
    $statment = $con->prepare('UPDATE prodacts SET ProductName = ? , quant = ? WHERE ProductD = ?');
    $statment->execute([$productName,$productQuantity,$productid]);
    $cont = $statment->rowCount();
    if ($cont > 0 ) {
        echo 'updated';
    } else {
        echo 'Eroor';
        
    }
?>
    


<?php 
    include $stl . 'footer.php';
} 
else {
    header('Location: index.php');
    exit();
}
?>