<?php 
session_start();
$PageTitel = 'Home';
if (isset($_SESSION['Username'])){
    include 'int.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo 'update';
    $id = $_POST['userid'];
    $pass = $_POST['Changepass'];
    $hashedpassword = sha1($pass);
    $stmt = $con->prepare("UPDATE users SET PasswordUser = ? WHERE userID = ? ");
    $stmt->execute(array($hashedpassword,$id));
    echo $stmt->rowcount() .'record Update';
}else { 
echo 'Sorry';
}
}