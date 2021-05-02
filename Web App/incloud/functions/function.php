<?php 
    function getNamePage(){
        global $PageTitel ;
        if (isset($PageTitel)){
            echo $PageTitel ;
        } else {
            echo 'Default';
        }
    }

    /*
    ** 
    **
    **
    */
    function dub ($select0 ,$frome ){
        $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0 ;
        $stmt   = $con->prepare('SELECT $select0 FROM $frome WHERE userid = ?');
        $stmt->execute(array($userid));
        $row =  $stmt->fetch();
        $cont = $stmt->rowCount();
        return  $cont ;
    }
?>