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
        if ($stmt->rowCount() > 0 ) {
     ?>      
         <form method="POST">
            <div class="left">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">salary</th>
                        <th scope="col">Product number</th>
                        <th scope="col">Product serial</th>
                        </tr>
                    </thead>
                </table>
            </div>            
        </form>
        <!-- End ViewEditProducts page -->
        <a href="setupdateProduct.php?userid=<?php echo $_SESSION['ID'] ?>" name="add" class="btn btn-outline-success btn-non-btn">Update</a>
        <a href="deletProduct.php?userid=<?php echo $_SESSION['ID'] ?>" name="add" class="btn btn-outline-success btn-non-btn">Delete</a>
        <a href="editproduct.php?userid=<?php echo $_SESSION['ID'] ?>" name="add" class="btn btn-outline-success btn-non-btn">edit</a>
        
    <?php 
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