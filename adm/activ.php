<?php
session_start();
if (isset($_SESSION['lev']) ){ 
    
 if ($_SESSION['browser'] !== $_SERVER['HTTP_USER_AGENT']) {
  //sessionانهاء ال
    session_destroy();
    echo "you are not authenticated.";
    exit();
    }
   
    
    $st=$_SESSION['lev'];   
if($st == "ADMIN"){
    echo 'yes admin';
}else{
     echo '<meta http-equiv="refresh" content="3; \'/ofppt/index.php\' /> " '; 
    die( '<div class="ui active inverted dimmer">
    <div class="ui indeterminate text loader" style="color:red ;">no admin redirect 
<i class="fas fa-times"></i></i></div>
  </div>
  <p></p>
');
        
        
    
    
}} else {
    die();    
}

require '../conn.php';

 if (isset($_GET['id']) and !empty($_GET['id']) ){
    $id=intval( $_GET['id']);
  $stmt=$conn->prepare("UPDATE `cour` SET `status`='oui' WHERE `id` = ?") ;
  $stmt->execute([$id]);
  
  if($stmt){
      echo 'delet successfuly';
     
  } else {
      echo 'error';
  }
    

 header("location:index.php?mod=cour");
 exit() ;
}

 if (isset($_GET['idu']) and !empty($_GET['idu'])){
    $id=intval( $_GET['idu']);
  $stmt=$conn->prepare("UPDATE `user` SET `status`='active' WHERE `id` = ?") ;
  $stmt->execute([$id]);
  
  if($stmt){
      echo 'delet successfuly';
     
  } else {
      echo 'error';
  }
    

 header("location:index.php?user=user");
 exit() ;
}



 if (isset($_GET['d']) and !empty($_GET['d'])  ){
    $id=intval( $_GET['d']);
  $stmt=$conn->prepare("UPDATE `user` SET `lev`='ADMIN' WHERE `id` = ?") ;
  $stmt->execute([$id]);
  
  if($stmt){
      echo 'delet successfuly';
     
  } else {
      echo 'error';
  }
    

 header("location:user.php");
 exit();
}