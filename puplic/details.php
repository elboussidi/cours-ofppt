<?php  
require '../conn.php';
require '../adm/fun.php';

 include '../indexp.php'; 



 if (isset($_GET['more']) and !empty($_GET['more']) ){
    $moreid=intval( $_GET['more']);

  $stmt=$conn->prepare("SELECT * FROM `cour` WHERE `id`=? ") ;
  $stmt->execute([$moreid]);
  $result=$stmt->fetch();
     $id= $result['id'] ;
     $discriptio= $result['discription'] ;
     $aut= $result['autor'] ;
     $title= $result['title'] ;
     $lien= $result['lien'] ;
     $module= $result['module'] ;
     $type= $result['type'] ;
     $date= $result['date'] ;

 
 }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>details <?php echo $title; ?></title>
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="../css/all.min.css">
         <link rel="stylesheet" href="../bootstrap/css/style.css"> 
         <link rel="shortcut icon" type="image/png" href="../doc2.png">
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

      <style type="text/css">
      .bac{
       /* background-color: red;
	background-size: cover; */
    border : solid 2px #00bfff ;
  border-radius: 20px;
      }
      </style>



<br>
<div class="card link-template-tabcard bac" style="width:600px;margin: 20px auto;">
    <!-- <div class="card-img-top">
        <img style="max-width:100%;" src="http://rndimg.com/ImageStore/OilPaintingBlue/800x400_OilPaintingBlue_9c0746faec414151968639a12471670a.jpg" alt="Multipurpose">
    </div> -->
    <div class="card-header  d-flex justify-content-between align-items-center">
        <h3 class="package-title" style="max-width: 60%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;font-size: 14px;margin-top: 10px"><?php echo $title; ?></h3>
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" data-target="#desc" href="#desc">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" data-target="#info" href="#info">Package Info</a>
            </li>
        </ul>
    </div>
    <div class="card-body p-0">
        <div class="tab-content">
            <div class="tab-pane p-4 active" id="desc" role="tabpanel"><div id="tab-content">
<div id="desc">
<?php echo $discriptio; ?>
</div>
</div>
</div>
            <div class="tab-pane" id="info" role="tabpanel">
                <ul class="list-group list-group-flush ml-0 mb-2">
                    <li class="list-group-item d-flex justify-content-between align-items-center [hide_empty:version]">
                        id 
                        <span class="badge"><?php echo $id; ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center [hide_empty:download_count]">
                       author
                        <span class="badge"><?php echo $aut; ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center [hide_empty:file_size]">
                        module
                        <span class="badge"><?php echo $module; ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center [hide_empty:file_count]">
                       type file
                        <span class="badge"><?php echo $type; ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center [hide_empty:create_date]">
                        Create Date
                        <span class="badge"><?php echo  mb_substr( "$date " , 0 , 11 , "utf8" );  ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center [hide_empty:update_date]">
                       File Size
                        <span class="badge">219.09 KB</span>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center">
        <b></b>
        <a href="<?php echo'http://'. $lien?>" target=_blank class="wpdm-download-link wpdm-download-locked btn btn-info " data-package="30">télécharger</a>
    </div>
</div>


<br><br><br>
 <?php
 include '../footer.php'; ?>
 </body>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
 
 <script src="../bootstrap/js/bootstrap.min.js">  </script>
</html>
