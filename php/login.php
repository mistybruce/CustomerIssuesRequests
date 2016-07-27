
<?php 
include('connect.php');
include('functions.php');
if(isset($_SESSION['user_id'])){
	header('Location:welcome.html');
}
if($_SERVER['REQUEST_METHOD'] == 'GET'){
	include('view/login.html'); 
}
else{
	$input = $_POST;
	$user = login_user($input);
	if($user === FALSE){
		$error_msg = 'Incorrect email and password';
	}
	else{
		$_SESSION['user_id'] = $user['id'];
		$_SESSION['password'] = $user['password'];
		
		// $success_msg = 'Login successfull. Please wait redirecting to homepage.';
		echo "<script>";
		echo "window.location.reload();";
		echo "</script>";
	}
	include('view/login.php'); 
}
?>
