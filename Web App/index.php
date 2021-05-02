<?php 
    $nonav = '';
    $PageTitel = 'Log in';
    session_start();
    if (isset($_SESSION['Username'])){
        header('Location: Home.php');
    } 
    include "int.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
        # code...
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $hashedpassword = sha1($password);
       // echo  $username .  $hashedpassword ;
  
       //   $hashpass = sha1('password');

        $stmt = $con->prepare("SELECT userID , UserName , PasswordUser FROM users WHERE UserName = ? AND PasswordUser = ?");
        $stmt->execute(array($username,$hashedpassword));
        $row =  $stmt->fetch();
        $cont = $stmt->rowCount();
        /* if  $cont > 0 is main that Database containe this User  */
        if ($cont > 0 ) {
            $_SESSION['Username'] =  $username ;
            $_SESSION['ID'] = $row['userID'] ; 
            header('Location: Home.php');
            exit();
        }
        
    }
?>
  <!-- login page -->
  <div class="login">
     <div class="login page">
        <div class="wrapper">
            <div class="container">
                <h1>مرحبا</h1>
                 <form class="form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <input type="text" name="user" placeholder="اسم المستخدم" autocomplete="off">
                    <input type="password" name="pass" placeholder="كلمة المرور">
                    <button type="submit" id="login-button">تسجيل الدخول</button>
                    <p class="p-forget">نسيت كلمة المرور</p>
                    <p class="p-new-acount">انشاء حساب</p>
                </form>
            </div>
            <ul class="bg-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
  </div>
   <!-- ./login page -->
<?php 
    include $stl . 'footer.php';
?>

