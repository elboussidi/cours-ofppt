<?php  
require '../conn.php';
require '../adm/fun.php';
if(isset($_GET['m'])){
    
    $m= intval( $_GET['m']);
    
    if($m== 1){$m="Gestion des entreprises";}elseif ($m==2) {$m="assistante administrative";}elseif ($m==3) {$m="genie civil"; }
        
   
    elseif ($m==4) {$m="diagnostic automobile"; }elseif ($m==5) {$m="infrastructure digitale"; }
    
    
    $stmt=$conn->prepare("SELECT * FROM `cour` WHERE `type`='document' AND `flr`= ? AND status='oui'");
    $stmt->execute([$m]);
    $data=$stmt->fetchAll();
    $to=$stmt->rowCount();
    
   
    
    
    
    
}

?>
<!DOCTYPE html>

 <html>
    <head>
        <meta charset="UTF-8">
        <title>document <?php echo $m; ?></title>
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
           
           #tabl-cour{
               
               margin-left:    7%;
           }
     </style>
     
    <body>
        
 
        <?php include '../indexp.php'; ?>
        
       



        <div class="btn btn-info " style="margin-left:20%;"><?php echo $m; ?> </div>  <div class="btn btn-info " style="margin-left:20%;"><?php echo $to; ?> </div>
        <table class="table table-striped">
  <thead>
    <tr>
      <th>Titre</th>
      <th>les modules </th>
      <th>details</th>
      <th>telecharger </th>
     
      
    </tr>
    
    </thead>
    <tbody>
    <?php  
    foreach ($data as $row){
       
    
    ?>
    
    
  
  
      
    <tr>
     
      <td scope="row" ><?php echo $row['title']; ?></td>
      <td><?php echo $row['module']; ?></td>
      
      <td><a href="<?php echo'details.php?more='. $row['id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i> plus</a></td>
      <td><a href="<?php echo'http://'. $row['lien']; ?>"><i class="fas fa-download"></i> télécharger</a></td>
     
   
    
    <?php  }  ?>
  </tbody>
</table>
        
     </div>   
        
        
        <?php
        
        if($to <= 3){
            echo '<br><br><br><br><br><br><br><br><br>';
            
        }elseif ($to <= 5) {
            echo '<br><br><br><br><br><br';
        }elseif ($to <= 7) {
            echo '<br><br>';
        }elseif ($to <= 1) {
          echo '<br><br><br><br><br><br><br><br><br><br><br><br>';   
        }
        
        include '../footer.php'; ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <script src="../bootstrap/js/bootstrap.min.js">  </script>
</html>
