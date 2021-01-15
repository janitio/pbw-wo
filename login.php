<?php
   require_once"core/init.php";
    $error='';
    //redirect jika user sudah login
    if(isset($_SESSION['user'])) header('Location:admin.php?halaman=home.php');
    //validasi login
    if(isset($_POST['submit'])){
        $nama=$_POST['username'];
        $pass=$_POST['password'];
        if(!empty(trim($nama))&& !empty(trim($pass))){
            //if(login_cek_nama($nama)){
                //if(cek_nama($nama)!=0){
                //menguji nama kembar
                if(cek_data_name($nama,$pass)){   
                        if (cek_data_pass($nama,$pass)) {

                            red_login($nama);
                        }else $error="<div class='alert alert-warning'>Username salah</div>";
                }else $error="<div class='alert alert-warning'>Password salah</div>";
            //}else $error='namanya tidak ada';
            //echo "<div class='alert alert-danger'>Login Gagal</div>";  
        }else $error="<div class='alert alert-danger'>Tidak boleh kosong</div>";
             
    }
    if(isset ($_SESSION['msg'])){
        flash_msg($_SESSION['msg']);
    }
?>

  <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Wedding Organizer</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="admin/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="admin/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="admin/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Wedding Organizer Admin : Login</h2>
               
                <h5>( Login terlebih dahulu agar bisa diakses )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Login </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form"  form action="login.php" method="post">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                             <input type="text" class="form-control" name="username"></div>
                                             <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Masuk"></input>
                                     
                                    <hr />
                                <?php if($error !=''){?>
                    <div id="error">
                    <?= $error;?>
                    </div>
                    <?php }?>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
