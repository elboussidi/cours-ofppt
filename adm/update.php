
 <?php include '../index2.php'; 
 require'../conn.php';
 require './fun.php';
 

 if($_SESSION['lev'] == "ADMIN" || $_SESSION['lev']== "member" || $_SESSION['browser'] == $_SERVER['HTTP_USER_AGENT'] ){
       
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
    
  if ($mod !== "pass" && $mod !=="info"){"you are not authenticated."; } // 
        
   
   if($mod == "info") {
       
       $err="";
       
       if (isset($_POST['updat'])  && $_SERVER['REQUEST_METHOD'] == "POST"){
           
           $nname= majid($_POST['name']);
           $tel= majid($_POST['phone']);
           $pass= majid($_POST['password']) ;
           
           
         
           
        if(empty($nname) || empty($tel) || empty($pass)){
           $err='<div class="alert alert-danger" role="alert">fil empty</div>';
        
        } else {
            if (password_verify($pass, $_SESSION['brtr'])) {
  
                   $stmt=$conn->prepare("UPDATE `user` SET `name`=?,`tel`=? WHERE `id` =?");
                   $stmt->execute([$nname,$tel,$_SESSION['id']]);
                   
                   
                   if($stmt== true){
                       $_SESSION['name']=$nname ;
                       $_SESSION['tel']=$tel ;
   $err='
  <div class="ui active inverted dimmer">
    <div class="ui indeterminate text loader" style="color:green ;">update success 
<i class="far fa-check-circle"></i></div>
  </div>
  <p></p>
';      
         echo '<meta http-equiv="refresh" content="2; \'/ofppt/adm/index.php\' /> " ';   
           
                   }
                   
    
            } else {
                 $err='<div class="alert alert-danger" role="alert">password incorecct</div>';
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
                        <div class="card-header">Modifier les informations personnelles</div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()"  method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">nouveau nom</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" value="<?php  echo   $_SESSION['name'] ;  ?>" class="form-control" name="name">
                                    </div>
                                </div>

                                

              
                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Nouveau numéro de téléphone</label>
                                    <div class="col-md-6">
                                        <input type="number" id="phone_number" value="<?php  echo   $_SESSION['tel'] ;  ?>" class="form-control" name="phone">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address"  class="col-md-4 col-form-label text-md-right">Mot de passe</label>
                                    <div class="col-md-6">
                                        <input type="password" placeholder="Le mot de passe est nécessaire pour enregistrer de nouvelles informations" id="present_address" class="form-control" name="password">
                                    </div>
                                </div>

                                

                           
         
                               
                            
                    
                                    <div class="col-md-6 offset-md-4">
                                         <input type="submit" class="btn btn-primary" value="Modifier" name="updat" />
                                    </div>
                               
                            </form>
                        </div>
        </div>
        
        </main>
<br><br><br><br><br><br><br>

       
    <?php  
 }}   
   } // if de cas info
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
        
        
        
      
           
        
        <?php  include '../footer.php'; ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <script src="../bootstrap/js/bootstrap.min.js">  </script>
</html>
