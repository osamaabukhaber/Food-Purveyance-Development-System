<?php 
    session_start();
    $PageTitel = 'edit';
    if (isset($_SESSION['Username'])){
        include 'int.php';
        $productid = '3';
        $productId = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0 ;
        $stmt   = $con->prepare('SELECT * FROM prodacts WHERE ProductD = ?');
        $stmt->execute(array($productId));
        $row =  $stmt->fetch();
        $cont = $stmt->rowCount();
        if ($cont > 0) {
      #  echo $row['ProductName'] ;
     ?>     
     <form action="updateProduct.php" method="POST">
            <input type="hidden" name="productid" value="<?php echo   $productid ?>">
     <div class="mb-3 center">
            <label for="exampleInputEmail1" class="form-label">name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['ProductName'] ; ?>" readonly>
        </div>
        <div class="mb-3 center">
            <label for="exampleInputEmail1" class="form-label">Quantity</label>
            <input type="text" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['quant']; ?>">
        </div>
        
        <div class="btn-broduct">
          <button>edit</button>  
        </div> 
    </div>
     </form> 
    <div class="rigth">                           
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