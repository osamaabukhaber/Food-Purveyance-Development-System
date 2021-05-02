<?php 
    session_start();
    $PageTitel = 'Home';
    if (isset($_SESSION['Username'])){
        include 'int.php';
        $userid = (isset($_GET['userid']) && is_numeric($_GET['userid'])) ? intval($_GET['userid']) : 0; 
        $stmt = $con->prepare("SELECT * FROM users WHERE userid = ?");
            $stmt->execute(array($userid));
            $row =  $stmt->fetch();
            $cont = $stmt->rowCount();
            if ($stmt->rowCount() > 0 ) { ?>
                 <div class="container">
                        <h1 class="profile">Your Profile</h1>
                        <!-- Start form -->
                        <form class="container container-form">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">name</label>
                                <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext Profile" id="staticEmail" value="<?php echo $row['FullName']; ?>">
                                </div>
                            </div>
                            <hr class="style1">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['Email']; ?>">
                                </div>
                            </div>
                            <hr class="style1">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail"  value="<?php echo $row['phoneNumber']; ?>">
                                </div>
                            </div>
                            <hr class="style1">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail"  value="<?php echo $row['City']; ?>">
                                </div>
                            </div>
                            <hr class="style1">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">adderss</label>
                                <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail"  value="<?php echo $row['Adderss']; ?>">
                                </div>
                            </div>
                        </form>
                        <!-- End form -->
                    </div>
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