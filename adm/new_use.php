<?php 
require '../conn.php';
require 'fun.php';

$err=" ";
if(isset($_POST['reg']) && $_SERVER['REQUEST_METHOD'] =="POST"){

    $name= majid($_POST['name']);
    $phone= majid($_POST['phone']);
    $password= majid($_POST['password']) ;
      $password2=$_POST['password2'] ;
       // $gender=$_POST['gender'] ;
  $photon=$_FILES['file']['name'] ;
  $phototmp=$_FILES['file']['tmp_name'] ;
  
  $ex= end ( explode('.',$photon )) ;
  
  $photon2= rand(0, 100000).".".$ex ;
   $alow=array('png','jpg','gif','gpeg','') ;
  $path='http://localhost/ofppt/pro/'.$photon2 ;
  $path="http://localhost/ofppt/img/elyse.png" ;
   if(in_array( $ex , $alow)){
      $dir="../pro/".$photon2; // مكان الرفع 
    move_uploaded_file($phototmp,$dir);// نقل الملف
  
   
        
     if(empty($name) || empty($phone) || empty($password) || empty($password2)  ){
 $err='<div class="alert alert-danger" role="alert">filed empty !!</div>';
     } else {
    if($password !== $password2){
       $err='<div class="alert alert-danger" role="alert"> password not corespedant</div>'; 
    } else {
     $password_hash=  password_hash($password, PASSWORD_DEFAULT);
      
    
     
      $stmt=$conn->prepare(" SELECT * FROM `user` WHERE `tel` =? OR `name` = ?") ;
      $stmt->execute([$phone,$name]);
      $t=$stmt->fetch();
     $te= $t['tel'] ;
     $tn= $t['name'] ;
     if($te == $phone || $tn == $name){
        $err='<div class="alert alert-danger" role="alert">لا يمكن تسجيل بنفس المعطيات </div>';
     } else {
        
         
              $stmt=$conn->prepare("INSERT INTO `user` (`id`, `name`, `tel`,`password`, `status`, `lev`) VALUES (NULL, ?, ?, ?,'desactive', 'member')");
       $stmt->execute([$name,$phone,$password_hash]);
       
       if($stmt){
           $err='
  <div class="ui active inverted dimmer">
    <div class="ui indeterminate text loader" style="color:green ;">
    تم تسجيل عضويتك بنجاح سيتم تفعيل حسابك بعد مراجعته
<i class="far fa-check-circle"></i></div>
  </div>
  <p></p>
';
       echo '<meta http-equiv="refresh" content="4; \'/ofppt/puplic/document.php?m=2\' /> " ';   
        
           
           //$err='<div class="alert alert-success" role="alert">data has been saved</div>';
       }
        
     }
     }
     
        
    } // end ok
         
         
         
     }
         else {
         $err='<div class="alert alert-danger" role="alert">img no valid </div>';
     }// end if for chek phone 
  
        
}
?>
<!DOCTYPE html>

 <html>
    <head>
        <meta charset="UTF-8">
        <title>new_user</title>
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="../css/all.min.css">
         <link rel="stylesheet" href="../bootstrap/css/style.css">
         <link rel="stylesheet" href="../css/semantic.min.css" >
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
     </style>
     
    <body>
        
 
        <?php include '../index2.php'; ?>
        
      
        <main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php echo $err;  ?>
                    <div class="card">
                        <div class="card-header">Enregistrer un nouvel utilisateur </div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()"  method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">nom complet</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="name">
                                    </div>
                                </div>

                                

              
                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Numéro de téléphone</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control" name="phone">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">mot de passe</label>
                                    <div class="col-md-6">
                                        <input type="password" id="present_address" class="form-control" name="password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right"> Confirm mot de passe</label>
                                    <div class="col-md-6">
                                        <input type="password" id="permanent_address" class="form-control" name="password2">
                                    </div>
                                </div>
                                    </div>
                       
                        
                                 <div class="form-group row">
                                    <label for="present_address"  class="  col-md-4 col-form-label text-md-right">photo profile</label>
                                    <div class="col-md-6">
                                        <input class="form-control " name="file" type="file" value="" id="example-file-input">
                                    </div>
                                </div>

                           
                        
                        
                       
          
                                    <div class="col-md-6 offset-md-4">
                                         <input type="submit" class="btn btn-primary" value="Enregistrer" name="reg" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        <br><br><br>
    </div></main>
                <br><br><br><br>
        <?php include '../footer.php'; ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <script src="../bootstrap/js/bootstrap.min.js">  </script>
</html>

