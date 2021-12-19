
 <?php include '../index2.php'; 
 require'../conn.php';
 require './fun.php';
 

 if($_SESSION['lev'] == "ADMIN" || $_SESSION['lev']== "member" && $_SESSION['browser'] == $_SERVER['HTTP_USER_AGENT'] ){
       
}else{
    
    echo '  <div class="ui active inverted dimmer">
    <div class="ui indeterminate text loader" style="color:red ;">no admin redirect 
<i class="fas fa-times"></i></i></div>
  </div>
  <p></p>
';
       echo '<meta http-equiv="refresh" content="3; \'/ofppt/index.php\' /> " ';   
       
}

if (isset($_SESSION['brtr']) ){ 
    
   
    
    
 if ($_SESSION['browser'] !== $_SERVER['HTTP_USER_AGENT']) {
  //sessionانهاء ال
    session_destroy();
    echo "you are not authenticated.";
    exit();
    
   
 }
 
 
 
 
 if (isset($_GET['mod']) and !empty($_GET['mod']) ){
    $mod= $_GET['mod'];
  
    
    
     if($mod == "pass" || $_SESSION['browser'] !== $_SERVER['HTTP_USER_AGENT']) {
       $err='';
       if(isset($_POST['updat_m'])  && $_SERVER['REQUEST_METHOD'] == "POST"){
           
           $apass= majid($_POST['apass']);
           $npass= majid($_POST['npass']);
           $cpass=$_POST['cpass'];
           
          if(empty($apass) || empty($npass) || empty($cpass)){
              $err='<div class="alert alert-danger" role="alert">empty</div>';
          } else {
              if($cpass !== $npass ){
                  $err='<div class="alert alert-danger" role="alert"> paswoord not corespandant</div>';
              } else {
                   if (password_verify($apass, $_SESSION['brtr'])) {
                  
                   $pass_hash=password_hash($npass, PASSWORD_DEFAULT);
                       $stmt=$conn->prepare('UPDATE `user` SET `password`=? WHERE `id` = ?');
                       $stmt->execute([$pass_hash,$_SESSION['id']]);
                       
                       if($stmt == TRUE){
                         
                            $err='
                <div class="ui active inverted dimmer">
                  <div class="ui indeterminate text loader" style="color:green ;">password has been update 
              <i class="far fa-check-circle"></i></div>
                </div>
                <p></p> '; 
                       echo '<meta http-equiv="refresh" content="2; \'/ofppt/adm/index.php\' /> " ';   
                       } else {
                       $err='<div class="alert alert-danger" role="alert"> operation errour</div>'; 
                       die() ;
                       }
                       
                 
              } else {
                   $err='<div class="alert alert-danger" role="alert"> ancian password incorect</div>';
                  
                 
              }
              
              
          }
           
          } 
       }
       
       
       ?>




        
<br><br><br><br>
        <main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php echo $err;  ?>
                    <div class="card">
                        <div class="card-header">Changement de mot de passe</div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()"  method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Mot de passe actuel</label>
                                    <div class="col-md-6">
                                        <input type="password" id="full_name"  class="form-control" name="apass">
                                    </div>
                                </div>

                                

              
                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">nouveau mot de passe</label>
                                    <div class="col-md-6">
                                        <input type="password" id="phone_number"  class="form-control" name="npass">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address"  class="col-md-4 col-form-label text-md-right">Confirm nouveau mot de passe</label>
                                    <div class="col-md-6">
                                        <input type="password"  id="present_address" class="form-control" name="cpass">
                                    </div>
                                </div>

                                

                           
         
                               
                            
                    
                                    <div class="col-md-6 offset-md-4">
                                         <input type="submit" class="btn btn-primary" value="Modifier" name="updat_m" />
                                    </div>
                               
                            </form>
                        </div>
        </div>
        
        </main>



<?php
   }
    // if de cas info
    else {
        die();  
    }
    } else {
        die();  
    } // end frist if de session
   
    
    
    
    
} // end if git mod et git not empty
 // end if isset session
 
 
 
 ?>


<!DOCTYPE html>

 <html>
    <head>
        <meta charset="UTF-8">
        <title>admin Page</title>
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="../css/all.min.css">
         <link rel="stylesheet" href="../bootstrap/css/style.css">
         <link rel="stylesheet" href="../css/semantic.min.css">
         <link rel="shortcut icon" type="image/png" href="../doc2.png">
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
   
    <body>
        
        
        
      
           <br><br><br><br><br>
        
        <?php  include '../footer.php'; ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <script src="../bootstrap/js/bootstrap.min.js">  </script>
</html>
