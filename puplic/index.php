<?php 

$page = array('../conn.php');

if(in_array($page, $page)){
    require '../conn.php'; 
}
        
        

$m=1;
if(isset($_GET['m'])){

$m= intval( $_GET['m']);

//if($m== 1){
//    $m="berutique" ;
//}elseif ($m == 2) {
//       $m="sage" ;  
//    }elseif ($m == 3 ) {
//        $m="fin exrcice";
//    }


}
?>
<!DOCTYPE html>

 <html>
    <head>
        <meta charset="UTF-8">
        <title>les cours</title>
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="../css/all.min.css">
         <link rel="stylesheet" href="../bootstrap/css/style.css">
         <link rel="shortcut icon" type="image/png" href="../doc2.png">
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     
      <style type="text/css">
           @font-face{
             font-family: tdt ;
            src: url('fo.ttf');
           }
            @font-face{
             font-family: tst ;
            src: url('mp.ttf');
           }
            p{
               font-family: tst ;
           }  
           .bac{
         
           }
            body {
	margin:0;
   background-image: url("../img/c.jpg");

	background-size: cover;
	font:600 16px/18px 'Open Sans',sans-serif;
  
           }   
     </style>
     
    <body>
        
 
        <?php include '../indexp.php'; ?>
        
        <div class="container col-10" >
       
                  <div class="card text-center ">
  <div class="card-header">
   <?php 
if($m == 1){echo 'comptabilite analytique'; 
}elseif ($m == 2){echo 'comptabilite des societes'; 
}elseif ($m == 3) {
          
     echo 'travux fin exrcice';  }  ?>
  </div>
                      <br>
  <div class="card-block">
    <h4 class="card-title"><i class="far fa-file-video"></i> video</h4>
    <p class="card-text">ici les video </p>
    <a href="../puplic/media.php?m=<?php echo $m;?>" class="btn btn-primary disabled">preparation en cour ...</a>
  </div>
                      <br>
 
            </div>
            <br>
            
            
                  <div class="card text-center ">
  <div class="card-header">
    <?php 
    if($m == 1){echo 'comptabilite analytique'; }elseif ($m == 2){echo 'comptabilite des societes'; }elseif ($m == 3) {
          
     echo 'math financiere';  }  ?>
  </div><br>
                      <br>
  <div class="card-block">
    <h4 class="card-title"><i class="far fa-file-word"></i> Documment </h4>
    <p class="card-text">Espace pour les documents , pdf , word , excel , Vous pouvez lire et télécharger</p>
   <a href="document.php?m=1"><button type="button" class="btn btn-sm  btn-primary">Gestion des entreprises</button></a> 
   <a href="document.php?m=2"><button type="button" class="btn  btn-sm btn-success">assistante administrative</button></a>
   <a href="document.php?m=3"><button type="button" class="btn btn-sm btn-danger">génie civil </button></a>
<a href="document.php?m=4" ><button type="button" class="btn btn-sm btn-warning">diagnostic automobile</button></a>
<a href="document.php?m=5"><button type="button" class="btn btn-sm btn-info">infrastructure digitale</button></a>
   </div><br><br><br>
 
</div>
           
            </div>
              
        
        
        <?php include '../footer.php'; ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <script src="../bootstrap/js/bootstrap.min.js">  </script>
</html>
