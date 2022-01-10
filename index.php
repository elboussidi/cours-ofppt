
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
            
       
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .jumbotron{
        color: black;
        opacity :80% ; 
	margin:0;
	background-color: ;

  background-image: url("img/bb.jpg");
	background-size: cover;
	font:600 16px/18px 'Open Sans',sans-serif;
  
}
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
            <a class="btn btn-outline-warning btn-sm" href="adm/new_use.php"><i class="fas fa-user-plus"></i> sign in </a
                
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
      
      <li class="nav-item">
      <a class="nav-link " href="puplic/index.php"> <i class="fa fa-graduation-cap"></i> filière</a>
      </li>
  </div>
  <div>
          <img src="img/logo.png" alt="no img found"  width="100" height="100"/>                </div>
</nav>   







       <!---------------------  fin header  ------------------>
       <br>
       
       <div class="jumbotron">
  <h1 class="display-3">Bienvenue </h1>
  <p class="lead">Vous pouvez afficher et télécharger des leçons et des documents,Vous pouvez <br> partager vos documents avec le reste des stagiaires</p>
  <hr class="my-4">
  <p>Nous espérons que vous trouverez ce que vous voulez ici</p>
  <p class="lead">
 
 
  <a href="puplic/index.php" class="btn btn-outline-info " role="button" aria-pressed="true">les filière disponible</a>


</div>
<br><br>





<br>

      
<section id="avantage" class="myMargin">
<hr>
<center>
    <div>
        <h4 class="myText " id="pro">contenu </h4>
       
    </div></center>
<br><br>
        <div class="container" style=" margin-left: 15%;">
                <div class="row">
 <div class="media col-lg-6  col-md-12 myPaddingMedia">
     <img class="d-flex mr-3" src="img/pdf.jpg" width="100px" alt="Generic placeholder image">
 <div class="media-body">
 <h5 class="mt-0  "  style="margin-top: 30px!important;">cour pdf </h5>
 <p class=" ">
         
   </p> 
<br>
</div>
      </div>
    
     

 <div class="media col-lg-6  col-md-12 myPaddingMedia">
     <img class="d-flex mr-3" src="img/vid.jpg" width="100px" alt="Generic placeholder image">
            <div class="media-body">
              <h5 class="mt-0"  style="margin-top: 10px!important;">video</h5>
              <p class="">
                   
            </p>     
               </div>
     </div> 
    
    </div>

  
                <br> <br><br>
               




                <div class="row">
 <div class="media col-lg-6  col-md-12 myPaddingMedia">
     <img class="d-flex mr-3" src="img/ex.png" width="100px" alt="Generic placeholder image">
 <div class="media-body">
 <h5 class="mt-0"  style="margin-top: 40px!important;">exercice corrigé</h5>
 <p class=" ">
         
   </p> 

</div>
      </div>
    
     

 <div class="media col-lg-6  col-md-12 myPaddingMedia">
     <img class="d-flex mr-3" src="img/ex2.png" width="100px" alt="Generic placeholder image">
            <div class="media-body">
              <h5 class="mt-0" style="margin-top: 30px!important;">communauté</h5>
              <p class="">
                   
            </p>     
               </div>
     </div> 
    
    </div>

  
</section>
        <hr>
        
  <br>
    
    
    
    
 
<section class="Material-contact-section section-padding section-dark">
      <div class="container">
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                 <center> <h2 style="font-family: 'Cairo', sans-serif;" > À propos de nous</h2> </center>
              </div>
          </div><br><br><br>
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                <p  style="font-family: 'Tajawal', sans-serif;">
                   <h3> À propos de nous</h3>

                   À propos de nous À propos de nous À propos de nous
                    <i class="fa fa-heart" aria-hidden="true" style="color:red; "></i>
                </p>

                <div class="find-widget" style="display:none;">
                 Company:  <a href="https://hostriver.ro">HostRiver</a>
                </div>
                <div class="find-widget" style="display:none;">
                 Address: <a href="#">4435 Berkshire Circle Knoxville</a>
                </div>
                <div class="find-widget" style="display:none;">
                  Phone:  <a href="#">+ 879-890-9767</a>
                </div>
                
                <div class="find-widget" style="display:none;">
                  Website:  <a href="https://uny.ro">www.uny.ro</a>
                </div>
                <div class="find-widget" style="display:none;">
                   Program: <a href="#">Mon to Sat: 09:30 AM - 10.30 PM</a>
                </div>
              </div>
              <!-- contact form -->
              <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                  <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6886.128407461419!2d-9.491064968332717!3d30.34912518177246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3c712be7a3795%3A0x596cf35e16aebbfa!2sInstitut%20Sup%C3%A9rieur%20de%20Technologie%20Appliqu%C3%A9e%20Ait%20Melloul!5e0!3m2!1sfr!2sma!4v1641742199520!5m2!1sfr!2sma"
                   width="470" height="400" style="border:0;" allowfullscreen="" 
                   loading="lazy"></iframe>
                  </form>
              </div>
          </div>
      </div>
    </section>









         <!--         fin cont  ----------------------> 
      <br>
       <?php  include './footer.php'; ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <script src="bootstrap/js/bootstrap.min.js">  </script>
    <script src="bootstrap/js/jquery-3.3.1.min.js">  </script>



    
</html>
