
<?php 
require_once ("include/initialize.php");   
if (isset($_SESSION['StudentID'])) {
  # code...
  redirect('index2.php?q=lesson');
}
?> 
  

<style type="text/css">
  body {
    background-color: #fff;
  }
</style>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

<link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet"> 
<link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen">  
 
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>css/main.css">
<!--===============================================================================================-->


</head>

<body>
  
  <div class="limiter">
    <div class="container-login100">
           <?php check_message(); ?>
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="images/signup-img.jpg" alt="IMG">
        </div>
         
        <form class="login100-form validate-form" action="" method="POST"> 
          <span class="login100-form-title">
            Student Login 
          </span>

          <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="username" placeholder="Username">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" name="btnLogin">
              Login
            </button>
          </div>

           <div class="text-center p-t-12">
            <span class="txt1">
              Forgot
            </span>
            <a class="txt2" href="enter_email.php">
              Username / Password?
            </a>
          </div> 

          <div class="text-center p-t-136">
            <a class="txt2" href="register.php">
              Create your Account
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  

  <?php 

if(isset($_POST['btnLogin'])){
  $username = trim($_POST['username']);
  $password  = trim($_POST['password']);
  $password = sha1($password);
  
   if ($username == '' OR $password == '') {

      message("Invalid Username and Password!", "error");
      redirect (web_root."login.php");
         
    } else {  
      //it creates a new objects of member
        $student = new Student();
        //make use of the static function, and we passed to parameters
        $res = $student::studentAuthentication($username, $password);
        if ($res==true) {  
             // redirect(web_root."index.php"); 

          echo $_SESSION['StudentID'];
                         ['name'];
         } else {
          message("Account does not exist! Please contact Administrator.", "error");
          redirect (web_root."login.php");
        }
   }
 } 
 ?> 

<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/jquery.js"></script>
<script src="<?php echo web_root; ?>js/bootstrap.min.js"></script> 
<!--===============================================================================================-->
  <script src="<?php echo web_root; ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root; ?>vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>