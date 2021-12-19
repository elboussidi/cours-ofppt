
<!DOCTYPE html>

 <html>
    <head>
        <meta charset="UTF-8">
        <title>home_page</title>
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="css/all.min.css">
         <link rel="stylesheet" href="bootstrap/css/style.css">
         <link rel="shortcut icon" type="image/png" href="doc2.png"> 
           <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style type="text/css">
           @font-face{
             font-family: tdt ;
            src: url('font/fo.ttf');
           }
            @font-face{
             font-family: tst ;
            src: url('font/mp.ttf');
           }
            p{
               
     </style>
     
    <body>
       
   
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
            
            <!--   espace member -->
            
             <?php  
             session_start();
 if($_SESSION){  ?>
      <div>
          <a class="btn btn-outline-primary btn-sm" href="adm/index.php"><i class="fas fa-user-tie"></i> <?php echo $_SESSION['name']; ?> </a>
          <a class="btn btn-outline-danger btn-sm " href="adm/out.php"><i class="fas fa-power-off"></i> déconnecter</a
                
             </div>
     
  <?php  } else {?>
               
            <div>
                 <a class="btn btn-outline-primary btn-sm" href="adm/login.php"><i class="fas fa-sign-in-alt"></i>  LOG IN</a>
            <a class="btn btn-outline-secondary btn-sm" href="adm/new_use.php"><i class="fas fa-user-plus"></i> sign in </a
                
             </div>
        <?php    } ?>
 </div>
            
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
      
    <ul class="navbar-nav">
      <li class="nav-item active">
          <a class="nav-link" href="index.php">  <i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="adm/"><i class="fas fa-user-shield"></i> admin_page</a>
      </li>
      <li class="nav-item">
      <a class="nav-link disabled" href="#"> <i class="fas fa-file-signature"></i> contact us en preparation</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       
<i class="far fa-file-word"></i>  les module
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="puplic/index.php?m=1">comptabilité generale</a>
            <a class="dropdown-item" href="puplic/index.php?m=2">managment</a>
            
            <a class="dropdown-item" href="puplic/index.php?m=3">PIE</a>
            <a class="dropdown-item " href="puplic/index.php?m=4">soft skils</a>
            <a class="dropdown-item" href="puplic/index.php?m=5">l'informatique</a>
            <a class="dropdown-item" href="puplic/index.php?m=6">arabe</a>
        </div>
      </li>
    </ul>
  </div>
</nav>     
       <!-- --------------------  fin header  ---------------- --> 
       <br>
       
       <div class="jumbotron">
  <h1 class="display-3">Bienvenue </h1>
  <p class="lead">Vous pouvez afficher et télécharger des leçons et des documents. Vous pouvez partager vos documents avec le reste des stagiaires</p>
  <hr class="my-4">
  <p>Nous espérons que vous trouverez ce que vous voulez ici</p>
  <p class="lead">
  <div class="dropdown show">
  <a class="btn btn-primary dropdown-toggle" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="far fa-file-word"></i> les module disponibles
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="puplic/index.php?m=1">comptabilité analytique</a>
    <a class="dropdown-item" href="puplic/index.php?m=2">comptabilité des sociétés</a>
    <a class="dropdown-item" href="puplic/index.php?m=3">math financière</a>
  </div>
</div>  
  </p>
</div>
<br><br>
       
       <!----------fin cont  ----------------------> 
      <br>
       <?php  include './footer.php'; ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <script src="bootstrap/js/bootstrap.min.js">  </script>
    <script src="bootstrap/js/jquery-3.3.1.min.js">  </script>
</html>

  