<?php include '../index2.php' ; 
         require '../conn.php';
        require './fun.php';
$err="" ;


//$token = md5(uniqid(rand(),TRUE));
// 
//$_SESSION['token'] = $token;


if(isset($_POST['login']) && $_SERVER['REQUEST_METHOD'] == "POST"){
      
    $tel= majid($_POST['tel']);
    $password= majid($_POST['password']);
    
    if(!empty($tel) || !empty($password)){
   
    $stmt=$conn->prepare("SELECT * FROM `user` WHERE `tel`=? LIMIT 1");
    $stmt->execute([$tel]);
    $log=$stmt->fetch();
    
    if (password_verify($password, $log['password'])) {
   // infp seccsion
        $_SESSION['id'] = $log['id'];
        $_SESSION['name'] = $log['name'];
        $_SESSION['tel'] = $log['tel'];
        $_SESSION['photo'] = $log['photo'];
        $_SESSION['lev'] = $log['lev'];
         $_SESSION['status'] = $log['status'];
         $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
         $_SESSION['brtr'] =$log['password'] ;
         
        //<div class="ui segment">
        $err='
  <div class="ui active inverted dimmer">
    <div class="ui indeterminate text loader" style="color:green ;">login success 
<i class="far fa-check-circle"></i></div>
  </div>
  <p></p>
';
       echo '<meta http-equiv="refresh" content="2; \'/ofppt/adm/index.php\' /> " ';   
        
}
else {
     $err='<div class="alert alert-danger" role="alert">password incorrect</div>'; 
}
     
}
 else {

    $err='<div class="alert alert-danger" role="alert">filed empty !!</div>';    
     
}
}


?>

<!DOCTYPE html>

 <html>
    <head>
        <meta charset="UTF-8">
        <title>log in</title>
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="../css/all.min.css">
         <link rel="stylesheet" href="../bootstrap/css/style.css">
         <link rel="stylesheet" href="../css/semantic.min.css"> 
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
        

        
     
        
        <br><br>  
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div > <?php echo $err;  ?></div>
                <div class="card">
                    
                    <div class="card-header">Se connecter</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Numéro de téléphone</label>
                                <div class="col-md-6">
                                    <input  id="myemail" class="form-control" name="tel"  autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe </label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <input type="submit" name="login"  value="login" class="btn btn-primary">
                                    
                                
                                <a href="#" class="btn btn-link">
                                   
                                </a>
                           
                    </div>
                    </form>
                </div>
            </div>
            </div>
    </div>
    </div>

</main>
   
        
        <BR><br><br><br><br>
     <?php 
     
     
     if (isset($_SESSION['lev'])){ 
//         echo ' <div class="ui active inverted dimmer">
//    <div class="ui indeterminate text loader" style="color:red ;">you login alredy 
//<i class="fas fa-times"></i></i></div>
//  </div>
//  <p></p>
//';
echo '<meta http-equiv="refresh" content="3; \'/ofppt/index.php\' /> " ';   
}
     
     
     
     include '../footer.php'; ?>   
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <script src="../bootstrap/js/bootstrap.min.js">  </script>
</html>
