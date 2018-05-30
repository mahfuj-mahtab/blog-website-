<?php
SESSION_START();
include("include/connection.php");

if (isset($_POST['login'])) {
	
	 $user_email=$_POST['email'];
	 $user_pass=$_POST['password'];

	 $sql_login_text="SELECT * FROM unknown WHERE user_email='$user_email' AND user_password='$user_pass'";
	 $query=mysqli_query($con,$sql_login_text);
	 $row=mysqli_num_rows($query);
	 if ($row == 1) {
	 	$_SESSION['user_email']=$user_email;
	 	header('Location: hidden_admin_panel/home.php') ;
	 }

}
?>