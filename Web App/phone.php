<?php 
    session_start();
    $PageTitel = 'Home';
    if (isset($_SESSION['Username'])){
        include 'int.php';
        $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0 ;
        $stmt   = $con->prepare('SELECT * FROM users WHERE userid = ?');
        $stmt->execute(array($userid));
        $row =  $stmt->fetch();
        $cont = $stmt->rowCount();
        if ($stmt->rowCount() > 0) {
     ?>
         
        <form action="update.php" method="POST">
        <div class="mainDiv">
                <div class="cardStyle">
                    <form  name="signupForm" id="signupForm">
                    <h2 class="formTitle">
                        Change Your phone
                    </h2>
                    
                    <div class="inputDiv">
                       <!--  
                           <label class="inputLabel" for="password">New Phone Number</label>
                        
                       --> <input class="phone-change" type="hidden"  name="userid"  value="<?php echo $userid  ?>">
                           <input class="phone-change" type="hidden"  name="ChangePhone"  value="<?php echo $row['phoneNumber'];  ?>">
                    </div>
                
                    
                    <div class="inputDiv">
                    <label class="inputLabel" for="confirmPassword">Confirm Phone Number</label>
                    <input class="phone-change" type="text" id="confirmPassword"  name="ChangePhone1">
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