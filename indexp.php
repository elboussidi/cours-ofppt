
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="css/all.min.css">
         <link rel="stylesheet" href="bootstrap/css/style.css">
           <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        
        
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
             <?php  
             session_start();
 if($_SESSION){  ?>
      <div>
          <a class="btn btn-outline-primary btn-sm" href="../adm/index.php"><i class="fas fa-user-tie"></i> <?php echo $_SESSION['name']; ?> </a>
            <a class="btn btn-outline-danger btn-sm" href="http://cours-ofppt.web1337.net/adm/out.php"><i class="fas fa-power-off"></i>  déconnecter</a
                
             </div>
     
  <?php  } else {?>
               
            <div>
                 <a class="btn btn-outline-primary btn-sm" href="../adm/login.php"><i class="fas fa-sign-in-alt"></i>  LOG IN</a>
            <a class="btn btn-outline-secondary btn-sm" href="../adm/new_use.php"><i class="fas fa-user-plus"></i> sign in </a
                
             </div>
        <?php    } ?>

        </div>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
          <a class="nav-link" href="index.php"> <i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="../adm"><i class="fas fa-user-shield"></i> Admin_Page</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-file-signature"></i> contact us</a>
      </li>

      <li class="nav-item">
      <a class="nav-link " href="puplic/index.php"> <i class="fa fa-graduation-cap"></i> filière</a>
      </li>
    </ul>
  </div>
</nav>
         <hr>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="bootstrap/js/jquery-3.3.1.min.js">  </script>
    <script src="bootstrap/js/bootstrap.min.js">  </script>