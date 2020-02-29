<?php
    session_start();
    header('location:index.php');

	$con = mysqli_connect('localhost','root','');
	
	mysqli_select_db($con, 'sessionpractical');

	$name = $_POST['user'];
    $pass = $_POST['password'];

    /*
    $cpassword= $_POST['cpassword'];

    if($password==$cpassword){
        $query = "select * from signin where name='$name'";
        //echo $query;
    $query_run = mysqli_query($con,$query);
    //echo mysql_num_rows($query_run);
    }
    if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
							$query = "insert into userinfotbl values('$name','$pass')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								header( "Location: management.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}

				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}




?> */
	$q = " Select * from signin where name = '$name' && password ='$pass' ";
	

	$result = mysqli_query($con, $q);

	$num = mysqli_num_rows($result);

	if ($num == 1) {
		echo '<script type="text/javascript">alert("Username Already Taken")</script>';
	}else{
		$reg= " insert into signin(name , password ) values ('$name' , '$pass' )";
		mysqli_query($con, $reg);
		echo '<script type="text/javascript">alert("Registered Succesfully")</script>';
		 
	}
?>

	<!-- ########################## Captcha verification for Register.html ############################ -->
<?php
if(isset($_POST['submit']))
{
if(isset($_POST['g-recaptcha-response']))
{
    $secretKey = '6LfiSN0UAAAAAKmh8BkBivSbc1yR7i3pG1SS1E6H'; 
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 
    $response=json_decode($verifyResponse);
    if($response->success)
    {
        $name = $_POST['user'];
        $pass = $_POST['password'];
        //sanitize
        $password=htmlentities($password);
        $name=htmlentities($name);
        //mysqli_real_escape_string($conn,$username)
$sql="insert into users(user,password) values('$name','$password')";
$res=mysqli_query($conn,$sql);
if($res)
{
echo '<script type="text/javascript">alert("Success")</script>';


}
else 
{
echo '<script type="text/javascript">alert("Something went wrong")</script>';
}
    }
    else
    {
        header("Sorry captcha went wrong");
    }
}
else
{
    header("Location: index.php");
}
}
else
{
    header("Location: index.php");
}
?>

<!-- ########################## Captcha verification for Account-reset.html ############################ -->
<?php
if(isset($_POST['RESET']))
{
if(isset($_POST['g-recaptcha-response']))
{
    $secretKey = '6Lfq-NwUAAAAAJvgr1WGzi3lGOUomJ5KxBSActMl'; 
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 
    $response=json_decode($verifyResponse);
    if($response->success)
    {
        $Email = $_POST['E-mail'];
        //sanitize
        $Email=htmlentities($Email);
        //mysqli_real_escape_string($conn,$username)
$sql="insert into users(usern,email) values('$name','$password')";
$res=mysqli_query($conn,$sql);
if($res)
{
echo "Success";
}
else
{
echo "Something went wrong";
}
    }
    else
    {
        header("Sorry captcha went wrong");
    }
}
else
{
    header("Location: index.php");
}
}
else
{
    header("Location: index.php");
}
?>

