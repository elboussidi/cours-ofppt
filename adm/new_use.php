<?php 
require '../conn.php';
require 'fun.php';

$err=" ";
if(isset($_POST['reg']) && $_SERVER['REQUEST_METHOD'] =="POST"){

    $name= majid($_POST['name']);
    $phone= majid($_POST['phone']);
    $password= majid($_POST['password']) ;
      $password2=$_POST['password2'] ;
      $flr=$_POST['flr'] ;
       // $gender=$_POST['gender'] ;
       /*
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
  
   
*/
     if(empty($name) || empty($phone) || empty($flr) || empty($password) || empty($password2)  ){
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
        
         
              $stmt=$conn->prepare("INSERT INTO `user` (`id`, `name`,`tel`,`password`, `flr`, `status`, `lev`) VALUES (NULL, ?,?, ?, ?,'desactive', 'member')");
       $stmt->execute([$name,$phone,$password_hash,$flr]);
       
       if($stmt){
           $err='
  <div class="ui active inverted dimmer">
    <div class="ui indeterminate text loader" style="color:green ;">
    تم تسجيل عضويتك بنجاح سيتم تفعيل حسابك بعد مراجعته
<i class="far fa-check-circle"></i></div>
  </div>
  <p></p>
';
       echo '<meta http-equiv="refresh" content="4; \'../puplic/index.php\' /> " ';   
        
           
           //$err='<div class="alert alert-success" role="alert">data has been saved</div>';
       }
        
     }
     }
     
        
    } // end ok
         
         
         
     /*
         else {
         $err='<div class="alert alert-danger" role="alert">img no valid </div>';
     }// end if for chek phone 
  */
        
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
           .card {
    margin-top: 1em;
}

/* IMG displaying */
.person-card {
    margin-top: 5em;
    padding-top: 5em;
}
.person-card .card-title{
    text-align: center;
}
.person-card .person-img{
    width: 10em;
    position: absolute;
    top: -5em;
    left: 50%;
    margin-left: -5em;
    border-radius: 100%;
    overflow: hidden;
    background-color: white;
}
     </style>
     
    <body>
        
 
        <?php include '../index2.php'; ?>
        





        <div class="container" style="margin-top: 1em;">
    <!-- Sign up form -->
     <form name="my-form" onsubmit="return validform()"  method="POST" enctype="multipart/form-data">
        <!-- Sign up card -->
        <div class="card person-card">
        <?php echo $err;  ?>
            <div class="card-body">
                <!-- Sex image -->
                <img id="img_sex" class="person-img"
                    src="https://visualpharm.com/assets/217/Life%20Cycle-595b40b75ba036ed117d9ef0.svg">
                <h2 id="who_message" class="card-title"ton nom complet</h2>
                <!-- First row (on medium screen) -->
                <div class="row">
                  
                
                 <div class="form-group col-md-10">
                 <input type="text" id="full_name" class="form-control" name="name">
                        <div id="last_name_feedback" class="invalid-feedback">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6" style="padding=0.5em;">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">a propos</h2>
                        <div class="form-group">
                            <label for="email" class="col-form-label">filière</label>
                           
                            <select id="input_sex" class="form-control" name="flr">
                             <option >....</option>
                            <option >Gestion des entreprises</option>
                            <option >assistante administrative</option>
                            <option >génie civil</option>
                            <option >diagnostic automobile</option>
                            <option >infrastructure digitale</option>
                           
                        </select>
                            <div class="email-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tel" class="col-form-label">numero telephone</label>
                            <input type="text" id="phone_number" class="form-control" name="phone">
                            <div class="phone-feedback">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="col-md-6">
                <div class="card"> 
                    <div class="card-body">
                        <h2 class="card-title">sécuriser votre compte !</h2>
                        <div class="form-group">
                            <label for="password" class="col-form-label">mote de pass</label>
                            <input type="password" id="present_address" class="form-control" name="password">
                            <div class="password-feedback">
                            <input type="file" name="file" style="visibility: hidden;" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password_conf" class="col-form-label">confirmer le mot de passe</label>
                            <input type="password" id="permanent_address" class="form-control" name="password2">
                            <div class="password_conf-feedback">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 1em;">
           <!-- <button type="button" class="btn btn-primary btn-lg btn-block">Sign up !</button> -->
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Enregistrer" name="reg" />
        </div>
        </form>
</div>



      <!--
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
    -->
                <br><br><br><br>
        <?php include '../footer.php'; ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <script src="../bootstrap/js/bootstrap.min.js"> 
    $( document ).ready(function() {
    // Set the sex image
    set_sex_img();
    
    // Set the "who" message
    set_who_message();

    // On change sex input
    $("#input_sex").change(function() {
        // Set the sex image
        set_sex_img();
        set_who_message();
    });

    // On change fist name input
    $("#first_name").keyup(function() {
        // Set the "who" message
        set_who_message();
        
        if(validation_name($("#first_name").val()).code == 0) {
            $("#first_name").attr("class", "form-control is-invalid");
            $("#first_name_feedback").html(validation_name($("#first_name").val()).message);
        } else {
            $("#first_name").attr("class", "form-control");
        }
    });

    // On change last name input
    $("#last_name").keyup(function() {
        // Set the "who" message
        set_who_message();
        
        if(validation_name($("#last_name").val()).code == 0) {
            $("#last_name").attr("class", "form-control is-invalid");
            $("#last_name_feedback").html(validation_name($("#last_name").val()).message);
        } else {
            $("#last_name").attr("class", "form-control");
        }
    });
});

/**
*   Set image path (Mr. or Ms.)
*/
function set_sex_img() {
    var sex = $("#input_sex").val();
    if (sex == "Mr.") {
        // male
        $("#img_sex").attr("src", male_img);
    } else {
        // female
        $("#img_sex").attr("src", female_img);
    }
}

/**
*   Set "who" message
*/
function set_who_message() {
    var sex = $("#input_sex").val();
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    
    if (validation_name(first_name).code == 0 || 
        validation_name(last_name).code == 0) {
        // Informations not completed
        $("#who_message").html("Who are you ?");
    } else {
        // Informations completed
        $("#who_message").html(sex+" "+first_name+" "+last_name);
    }
}

/**
*   Validation function for last name and first name
*/
function validation_name (val) {
    if (val.length < 2) {
        // is not valid : name length
        return {"code":0, "message":"The name is too short."};
    }
    if (!val.match("^[a-zA-Z\- ]+$")) {
        // is not valid : bad character
        return {"code":0, "message":"The name use non-alphabetics chars."};
    }
    
    // is valid
    return {"code": 1};
}
     </script>
</html>

