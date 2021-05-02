<?php 
session_start();
$PageTitel = 'Home';
if (isset($_SESSION['Username'])){
    include 'int.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    echo 'update';
    $id = $_POST['userid'];
    $phone = $_POST['ChangePhone1'];
    $stmt = $con->prepare("UPDATE users SET phoneNumber = ? WHERE userID = ? ");
    $stmt->execute(array($phone,$id));
    echo $stmt->rowcount() .'record Update';
}else {
echo 'Sorry';
}
}