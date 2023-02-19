<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/sign-in/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/sign-in/signin.css');?>" rel="stylesheet">
    <style>

      #a{
        border-radius: 30px;
        margin-top: 4px;
        color: black;
      }
      #b{
        border-radius: 30px;
        margin-top: 4px;
        margin-bottom: 1px;
        color: black;
      }
      #c{
        border-radius: 30px;
        margin-top: 30px;
        color: black;
        

      }
      .form-signin{
        background: #F0E68C;
        /*background: green;*/
        border-radius: 30px;
      }
    </style>
  </head>

  <body class="text-center"  style="background-image: url('assets/img/logo2.jpg');">


     <?php echo form_open('Login','class="form-signin"');?>
     <!-- <img class="mb-4" src="<?php //echo base_url('assets/arc/img/7.jpg'); ?>" alt="" width="72" height="72"> -->
      <!-- <h1 class="h3 mb-3 font-weight-normal"><img style="border-radius: 50px;" src="<?php echo base_url('assets/img/logo2.jpg') ?>" width="60" height="60"></h1> -->
      <h5>SELAMAT DATANG <br> SILAHKAN KETIKAN USERNAME DAN PASSWORD ANDA.!</h5>

      <?php echo $this->session->flashdata('pesan'); ?>

      
        
                      <input id="a" type="text" name="username" class="form-control form-control-user" id="exampleInputusername" aria-describedby="usernameHelp" placeholder="Username..." value="<?= set_value('username') ?>" autocomplete="off">
                      <?= form_error('username','<small class="text-danger pl-3">','</small>'); ?>

                    
                      <input id="b" type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password...">
                      <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
                    
        <button  id="c" class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
        <!-- <br>
        <a style="color: black;" class="small" href="<?php echo base_url('beranda'); ?>">Beranda!</a><br> -->
        <!-- <a style="color: black;" class="small" href="<?php echo base_url('Login'); ?>">Registrasi Akun?</a> -->
      <p class="mt-5 mb-3 text-muted"><b style="color: black;">SIPP @ <?php echo date('Y'); ?></b></p>
                    
                    

    <?php echo form_close(); ?>

  </body>
</html>
