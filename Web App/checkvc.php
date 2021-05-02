<?php 

session_start();
$PageTitel = 'vc';
if (isset($_SESSION['Username'])){
    include 'int.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $vc = $_POST['vc'];
    $code1 = $_POST['code1'];
    $code2 = $_POST['code2'];
    $code3 = $_POST['code3'];
    $code4 = $_POST['code4'];
    $code = $code1.$code2.$code3.$code4 ;
    # echo $id . '    ' . $code . '          '. $vc ; 
    if ($vc == $code ) {
        ?>
    <link rel="stylesheet" href="<?php echo $css; ?>checkvc.css"> 
    
        <a href="password.php?do=Inbox&userid=<?php echo $_SESSION['ID']; ?>" class="btn btn-outline-success btn-non-btn btn-checkvc">are you shor ?</a>
    
      <?php
    } 
    else {
        echo 'error';
    }
    
  #  $stmt = $con->prepare("UPDATE users SET PasswordUser = ? WHERE userID = ? ");
   # $stmt->execute(array($hashedpassword,$id));
    #echo $stmt->rowcount() .'record Update';
}else { 
echo 'Sorry';
}
include $stl . 'footer.php';
} 
else {
header('Location: index.php');
exit();
}