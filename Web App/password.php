<?php 
    session_start();
    $PageTitel = 'password';
    if (isset($_SESSION['Username'])){
        include 'int.php';
        $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0 ;
        $stmt   = $con->prepare('SELECT * FROM users WHERE userid = ?');
        $stmt->execute(array($userid));
        $row =  $stmt->fetch();
        $cont = $stmt->rowCount();
        if ($stmt->rowCount() > 0) {
     ?>
         
        <form action="updatepass.php" method="POST">
        <div class="mainDiv">
                <div class="cardStyle">
                    <form  name="signupForm" id="signupForm">
                    <h2 class="formTitle">
                        Change password
                    </h2>
                    
                    <div class="inputDiv">
                       <!--  
                           <label class="inputLabel" for="password">New Phone Number</label>
                            <input class="phone-change" type="hidden"  name="ChangePass"  value="
                            <?php# echo $row['PasswordUser'];  ?>">
                       --> <input class="phone-change" type="hidden"  name="userid"  value="<?php echo $userid  ?>">
                    </div>
                    <div class="inputDiv">
                    <label class="inputLabel" for="confirmPassword">Confirm password</label>
                    <input class="phone-change" type="text" id="confirmPassword"  name="Changepass">
                    </div>
                    
                    <div class="buttonWrapper">
                    <button type="submit" id="submitButton" onclick="validateSignupForm()" class="submitButton pure-button pure-button-primary">
                        <span>Continue</span>
                        <span id="loader"></span>
                    </button>
                    </div>
                </form>
                </div>
                </div>
        
        </form>
    <?php  } else {
        echo 'there is no such id';
    }
    
        include $stl . 'footer.php';
    } 
    else {
        header('Location: index.php');
        exit();
    }
?>