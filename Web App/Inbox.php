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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oxygen:300,400,500' rel='stylesheet' type='text/css''>
    <link rel="stylesheet" href="<?php echo $css; ?>inbox.css"> 
    <!-- partial:index.partial.html -->
<ul class="list">
  <li class="list-item" id="item0">
    <a class="list-item__header" href="#item0">Item 0</a>
    <div class="list-item__body">
      <h2>
        Sub Header
      </h2>
      <div class="placeholder"></div>
    </div>
  </li>
  <li class="list-item" id="item1">
    <a class="list-item__header" href="#item1">Item 1</a>
    <div class="list-item__body">
      <h2>
        Sub Header
      </h2>
      <div class="placeholder"></div>
    </div>
  </li>
  <li class="list-item" id="item2">
    <a class="list-item__header" href="#item2">Item 2</a>
    <div class="list-item__body">
      <h2>
        Sub Header
      </h2>
      <div class="placeholder"></div>
    </div>
  </li>
  <li class="list-item" id="item3">
    <a class="list-item__header" href="#item3">Item 3</a>
    <div class="list-item__body">
      <h2>
        Sub Header
      </h2>
      <div class="placeholder"></div>
    </div>
  </li>
  <li class="list-item" id="item4">
    <a class="list-item__header" href="#item4">Item 4</a>
    <div class="list-item__body">
      <h2>
        Sub Header
      </h2>
      <div class="placeholder"></div>
    </div>
  </li>
  <li class="list-item" id="item5">
    <a class="list-item__header" href="#item5">Item 5</a>
    <div class="list-item__body">
      <h2>
        Sub Header
      </h2>
      <div class="placeholder"></div>
    </div>
  </li>
  <li class="list-item" id="item6">
    <a class="list-item__header" href="#item6">Item 6</a>
    <div class="list-item__body">
      <h2>
        Sub Header
      </h2>
      <div class="placeholder"></div>
    </div>
  </li>
  <li class="list-item" id="item7">
    <a class="list-item__header" href="#item7">Item 7</a>
    <div class="list-item__body">
      <h2>
        Sub Header
      </h2>
      <div class="placeholder"></div>
    </div>
  </li>
  <li class="list-item" id="item8">
    <a class="list-item__header" href="#item8">Item 8</a>
    <div class="list-item__body">
      <h2>
        Sub Header
      </h2>
      <div class="placeholder"></div>
    </div>
  </li>
  <li class="list-item" id="item9">
    <a class="list-item__header" href="#item9">Item 9</a>
    <div class="list-item__body">
      <h2>
        Sub Header
      </h2>
      <div class="placeholder"></div>
    </div>
  </li>
</ul>
<!-- partial -->
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