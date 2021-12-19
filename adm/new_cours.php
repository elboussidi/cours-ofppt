<?php 
require '../conn.php'; 
require './fun.php';
include '../index2.php'; 
   

$autor=$_SESSION['name']; 

$err='';
if(isset($_POST['ncour']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    $title= majid($_POST['title']);
     $modul= majid($_POST['modul']);
      $type= majid($_POST['type']);
       $dis= majid($_POST['dis']);
     
        ;
            $status="non";
         $ex= end(explode('.', $_FILES['file']['name'] )) ;
            $nimg= rand(0, 1000000).".".$ex;
            
      $path='elboussidi.eb2a.com/ofppt/doc/'.$nimg ;// رابط الحفض
     $dir="../doc/".$nimg; // مكان الرفع 
    move_uploaded_file($_FILES['file']['tmp_name'],$dir);// نقل الملف
    
    $size=$_FILES['file']['size'];
      $typ=$_FILES['file']['type'];
      $alow= array('pdf','doc','xlsx','png','jpeg','jpg') ;
       if(in_array( $ex,$alow)) {
        
          
       
         
           
if(empty($title) || empty($dis) || empty($path)   ){
    $err="<div class='alert alert-danger'>file empty</div>";
}else{
    
    $stmt=$conn->prepare("INSERT INTO `cour` (`id`, `title`, `module`, `type`, `discription`, `lien`, `status`,`autor`) VALUES (NULL, ?, ?, ?,?, ?, ?,?)");
    $stmt->execute([$title,$modul,$type,$dis,$path,$status,$autor]);
    
    
if($stmt){
    
    $err="<div class='alert alert-success'>data has been insert </div>";
    
} else {
    $err="<div class='alert alert-danger'>data not insert </div>";
}



}
 } else {
      $err="<div class='alert alert-danger'>type no valide </div>"; 
 }
}
?>


<!DOCTYPE html>

 <html>
    <head>
        <meta charset="UTF-8">
        <title>nwe_cours</title>
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="../css/all.min.css">
         <link rel="stylesheet" href="../css/semantic.min.css">
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
     </style>
     
    <body>
        
 
        
        
     
        
    
        <main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                 <?php echo $err; ?>
                    <div class="card">
                        
                        <div class="card-header">Ajouter un nouveau document</div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()"  method="POST" enctype="multipart/form-data">
                                
                                
                                  <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">titre</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="title" id="example-text-input">
                                    </div>
                                </div>
                                
                                
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">le module</label>
                                    <div class="col-md-6">
                                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="modul" id="inlineFormCustomSelect">
                                <option selected>Choose...</option>
                                <option >comptabilite analytique</option>
                                <option>comptabilite des societes</option>
                                <option >math financiere</option>
                              </select>
                                </div>
                                </div>

                                
                                
                                
                                
                                
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">type</label>
                                    <div class="col-md-6">
                                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="type" id="inlineFormCustomSelect">
                                <option >video</option>
                                <option selected>document</option>
                                
                              </select>
                                </div>
                                </div>

                                

              
                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">discription</label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" id="exampleTextarea"name="dis" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address"  class="col-md-4 col-form-label text-md-right">document</label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="file" type="file" value="" id="example-file-input">
                                    </div>
                                </div>

                           
                            <div style="margin-left:180px ;" class="form-group row">
                   
                    
                                <br>
                                    <div class="col-md-6 offset-md-4">
                                         <input type="submit" class="btn btn-success" value="add cour" name="ncour" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        
        
        
        
        
        
        <?php 
        
        
         if (isset($_SESSION['lev'])){ 

              if ($_SESSION['browser'] !== $_SERVER['HTTP_USER_AGENT']) {
  //sessionانهاء ال
    session_destroy();
    echo "you are not authenticated.";
    exit();
    }
  
    
    $st=$_SESSION['lev'];   
if($st == "ADMIN" || $st == "member"){
   // echo 'yes admin';
}else{
    
    echo '  <div class="ui active inverted dimmer">
    <div class="ui indeterminate text loader" style="color:red ;">no admin  redirect 
<i class="fas fa-times"></i></i></div>
  </div>
  <p></p>
';
       echo '<meta http-equiv="refresh" content="3; \'/ofppt/index.php\' /> " ';   
        
    
    }
}else{
    
    echo '  <div class="ui active inverted dimmer">
    <div class="ui indeterminate text loader" style="color:red ;">no admin  redirect 
<i class="fas fa-times"></i></i></div>
  </div>
  <p></p>
';
       echo '<meta http-equiv="refresh" content="3; \'/ofppt/index.php\' /> " ';   
        
    
    }

          
     
        
       ?>
       <?php include '../footer.php'; ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <script src="../bootstrap/js/bootstrap.min.js">  </script>
</html>
