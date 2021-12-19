<?php   
require '../conn.php';


$stmt=$conn->prepare("SELECT * FROM `user` WHERE `status` ='active'");
$stmt->execute();
$usr=$stmt->fetchAll();




?>

<!DOCTYPE html>

 <html>
    <head>
        <meta charset="UTF-8">
        <title>user</title>
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
        
 
        <?php include '../index2.php'; ?>
          
        <br>
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
		<h2>User <b>Management</b></h2>
			</div>
		<div class="col-sm-7">
                    <a href="new_use.php" class="btn btn-outline-warning"><i class="fas fa-user-plus"></i> <span>Add New User</span></a>
							
		</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>						
			<th>Tel</th>
			<th>date inscription</th>
                        <th>role</th>
			<th>Action</th>
                    </tr>
                </thead>
               
                <tbody>
                    
                 <?php 
                 
                 foreach ($usr as $us) {
                     
                 
                 
                 ?>
                    
                    <tr>
                        <td><?php echo  $us['id']; ?></td>
                        <td><a href=""vvvvf>  <?php echo  $us['name']; ?></a></td>
                        <td> <?php echo  $us['tel']; ?></td>                        
                        <td>2020/04/13</td>
		<td><span class="status text-success">&bull;</span> <?php echo  $us['lev']; ?> </td>
			<td>
			<a href="delet.php?idu=<?php echo $us['id']; ?>" class="btn btn-danger btn-sm" title="Settings" data-toggle="tooltip"><i class="fas fa-trash-alt"></i> del  </a>
                       <?php  
                       if($us['lev'] == "ADMIN"){
                           echo '
                           
            <a href="activ.php?d='.$us['id'].'" > <button type="button" class="btn btn-success btn-sm">
            <i class="fas fa-edit"></i>to member </button></a>
                           ';
                           
                       }elseif ($us['lev'] == "member") {
                                 echo '
                           
            <a href="activ.php?d='.$us['id'].'" > <button type="button" class="btn btn-success btn-sm">
            <i class="fas fa-edit"></i>to admin </button></a>
                           ';  
                            }
                       
                       
                       
                       ?>
           
			</td>
                    </tr>
                    
                    
                    <?php } ?>
			</tbody>
                        
            </table>
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
if($st == "ADMIN" ){
   
}else{
    
    echo '  <div class="ui active inverted dimmer">
    <div class="ui indeterminate text loader" style="color:red ;">no admin  redirect 
<i class="fas fa-times"></i></i></div>
  </div>
  <p></p>
';
       echo '<meta http-equiv="refresh" content="3; \'/ofppt/index.php\' /> " ';   
        
    
    }
}

        
   
        
        
        ?>
        
       <br>
        <?php include '../footer.php'; ?>
    </body>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <script src="../bootstrap/js/bootstrap.min.js">  </script>
</html>

