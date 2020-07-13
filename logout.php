<?php 
require_once 'include/initialize.php';
// Four steps to closing a session
// (i.e. logging out)

// 1. Find the session
@session_start();

// 2. Unset all the session variables
unset( $_SESSION['StudentID'] );
unset( $_SESSION['name'] );
unset( $_SESSION['username'] ); 
unset( $_SESSION['email'] );  
unset( $_SESSION['password'] );  
 
 	
// 4. Destroy the session
// session_destroy();
redirect("index2.php?logout=1");
?>