<?php
	session_start();

	$con = mysqli_connect('localhost','root','');

	mysqli_select_db($con, 'sessionpractical');

	$name = $_POST['user'];
	$pass = $_POST['password'];

	$q = " Select * from signin where name = '$name' && password ='$pass' ";
	

	$result = mysqli_query($con, $q);

	$num = mysqli_num_rows($result);

	if ($num == 1) {
            $_SESSION['username'] = $name;
            header('location:management.php');

	}else{
        header('location:index.php');
		 
	}
?>