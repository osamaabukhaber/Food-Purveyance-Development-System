
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&amp;display=swap'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
        <link rel="stylesheet" href="<?php echo $css; ?>product.css"> 


<!-- partial:index.partial.html -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MY <span class="badge bg-success">Acount</span></a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
      <div class="hamburger-toggle">
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Home.php?do=home&userid=<?php echo $_SESSION['ID'];?>"><?php echo lang('Home'); ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="scane.php?do=ScaneQr&userid=<?php echo $_SESSION['ID']; ?>"><?php echo lang('Scane'); ?></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="pay.php?do=pay&userid=<?php echo $_SESSION['ID']; ?>"><?php echo lang('pay'); ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inbox.php?do=Inbox&userid=<?php echo $_SESSION['ID']; ?>"><?php echo lang('Inbox'); ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product.php?do=ViewEditProducts&userid=<?php echo $_SESSION['ID'];?>"><?php echo lang('View / Edit Products'); ?></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="delete.php?do=Delete&userid=<?php echo $_SESSION['ID']; ?>"><?php echo lang('delete'); ?></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown"><?php echo lang('setting'); ?></a>
          <ul class="dropdown-menu shadow">
            <li><a class="dropdown-item" href="vc.php?do=pass&userid=<?php echo $_SESSION['ID']; ?>"><?php echo lang('pass'); ?></a></li>
            <li><a class="dropdown-item" href="vcphone.php?do=phone&userid=<?php echo $_SESSION['ID']; ?>"><?php echo lang('phone'); ?></a></li>
            
            
            <li><hr class="dropdown-divider"></li>
            <li class="dropdown-submenu">
              <a href="#" class="dropdown-item dropdown-submenu-toggle"><?php echo lang('lang'); ?></a>
              <ul class="dropdown-menu dropdown-submenu shadow">
              <li><a class="dropdown-item" href="setting.php?do=ar"><?php echo lang('arab'); ?></a></li>
              <li><a class="dropdown-item" href="setting.php?do=en"><?php echo lang('eng'); ?></a></li>
              </ul>
            </li></ul>
        </li>
      </ul>
      <form class="d-flex btn-non">
        <a href="logout.php" class="btn btn-outline-success btn-non-btn"><?php echo lang('log out'); ?></a>
      </form>
    </div>
  </div>
</nav>

<!-- partial -->
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js'></script>
<script src='layout\thems\default\js\navjs.js'></script>