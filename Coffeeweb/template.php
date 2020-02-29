<?php declare(strict_types=1) 
?>

<?php
$first_num = rand(1,10);
$second_num = rand(1,10);

$operators = array("+", "-", "*");
$operator = rand(0, count($operators) -1);
$operator = $operators[$operator];

$answer = 0;
switch($operator)   {
    case "+":
        $answer = $first_num + $second_num;
        break;
    case "-":
        $answer = $first_num - $second_num;
        break;

    case "*":
        $answer = $first_num + $second_num;
        break; 
}

$_SESSION["answer"] = $answer;

?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title;?></title>
        <link rel="stylesheet" href="/w3css/3/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css"/>
    </head>
    <body onload="myFunction()">
        <div id="loader"></div>
        
        <div id="wrapper">
            <div id="banner">
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="coffee.php">Coffee</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="#" onclick="document.getElementById('modal-wrapper').style.display='block'">Management</a></li>
                    <li><a href="About.php">About</a></li>
                </ul>
            </nav>
            
            <div id="sidebar">  
            </div>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            <footer id="footer"><?php echo "Copyright © 2013 by Owner" ?>
           </footer>
        </div>

        <!-- ################## LogIn form box ################# -->

<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" action="loginvalid.php" method="post">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="https://media.giphy.com/media/AxhxIcTMEMqR2/giphy.gif" alt="Avatar" class="avatar">
      <h1 style="text-align:center;margin-left: 40px;">LogIn is Required!</h1>
    </div>

    <div class="container">
      <input type="text" placeholder="Enter Username" name="user" required><a href="#" class=" icon user"></a>
      <input type="password" placeholder="Enter Password" name="password" required><a href="#" class=" icon lock"></a> 
      
            <div>
                <?php echo $first_num . " " . $operator . " " . $second_num . " = "; ?>
                <input type="number" name="answer" required/> 
            </div>

      <h6><a href="ACCOUNT-RESET.php">Forgot Password ?</a> </h6>     
      <button type="submit" value="submit">Login</button>
    </div>

    <!--
    <div class="social-icons">
					<p>Or you can Login with one of the following</p>
						<ul class="soc_icons2">
							<li class="pic"><a href="#"><i class="icon_4"></i></a></li>
							<li class="pic"><a href="#"><i class="icon_5"></i></a></li>
							<li class="pic"><a href="#"><i class="icon_6"></i></a></li>
								<div class="clear"> </div>
						</ul>
                </div> -->
                <h5>Don't have an account ?<a href="REGISTER.php"> Sign Up </a></h5>
    
  </form>
  
</div>
<!-- #################### scripting for Login box pop up ###################### -->

<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<!-- #################### scripting for pre-loading ###################### -->
        <script>
        var preloader = document.getElementById('loader');

        function myFunction(){
            preloader.style.display = 'none';     
        }
    </script> 
        
    </body>
</html>
