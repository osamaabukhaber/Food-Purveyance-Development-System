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
   
   <h1> Delete </h1>
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