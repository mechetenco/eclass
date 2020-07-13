<?php  
require_once ("include/initialize.php"); 
if (isset($_SESSION['StudentID'])) {
  # code...
  redirect('index2.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sign Up Form </title>

<!-- Font Icon -->
<link rel="stylesheet" href="fonts2/material-icon/css/material-design-iconic-font.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css2/style2.css">

<!-- Bootstrap core CSS -->
<link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet"> 
<link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen">  
 
 

<div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images2/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" action="" enctype="multipart/form-data" class="register-form" id="register-form">
                        <h2>student registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="name" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Userame :</label>
                                <input type="text" name="username" id="father_name" required/>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender:</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>

                            
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">Password :</label>
                                <div class="form-select">
                                    <input type="password" name="password" id="state">
                                       
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city">Re_type password :</label>
                                <div class="form-select">
                                    <input type="password" name="pass" id="city">
                                        
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birth_date">DOB :</label>
                            <input type="date" name="birth_date" id="birth_date">
                        </div>
                        <div class="form-group">
                            <label for="pincode">Phone Number :</label>
                            <input type="text" name="phone" id="pincode">
                        </div>
                        <div class="form-group">
                            <label for="course">School :</label>
                            <input type="text" name="school" id="pincode">
                        </div>
                        <div class="form-group">
                            <label for="email">Email  :</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class="form-submit">
                        <a href="index.php"><i class="fa fa-arrow-left"></i> Back to home</a>
                            <input type="submit" value="Submit Form" class="submit" name="btnRegister" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor2/jquery/jquery.min.js"></script>
    <script src="js2/main.js"></script>

    <?php 
if (isset($_POST['btnRegister'])) {
    # code...  

    $student = New Student(); 
    $student->name         = $_POST['name']; 
    $student->username         = $_POST['username'];
    $student->address       = $_POST['address']; 
    $student->gender         = $_POST['gender'];  
    $student->password      = sha1($_POST['password']);
    $student->pass      = sha1($_POST['pass']); 
    $student->birth_date         = $_POST['birth_date'];
    $student->phone         = $_POST['phone'];
    $student->school         = $_POST['school'];
    $student->email         = $_POST['email'];
    $student->create();  

    message("Your now succefully registered. You can login now!","success");
    redirect("login.php");
}

?>
</body>


 </html>