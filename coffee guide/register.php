
<?php include 'Database.php'; 

include_once 'Database.php';


if(isset($_POST['reg']))
{
	$name = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['Email']);
	$pass = mysqli_real_escape_string($con, $_POST['password']);

	if(mysqli_query($con, "INSERT INTO register (username,Email,password) 
    VALUES('".$name."','".$email."','".$pass."')"))
	{
            $msg = 'Congratulation you have successfully.';
		
        
       
	}
	else
	{
            $msg = 'Error...';
	
       
        
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Coffee Guide Alkarj</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.11.1.min.js"></script>

<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>
<script src="js/modernizr.custom.97074.js"></script>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Gabriela' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header-nav -->
	<div class="header-nav">
		<div class="container">
			<div class="header-nav-bottom">
				<nav class="navbar navbar-default">
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html" class="hvr-bounce-to-bottom">Home</a></li>
							<li><a href="about.html" class="hvr-bounce-to-bottom">About</a></li>
							<li><a href="CoffeeStors.html" class="hvr-bounce-to-bottom">Coffees Menu</a></li>
							<li><a href="login.php" class="hvr-bounce-to-bottom">Login</a></li>
							<li><a href="contact.php" class="hvr-bounce-to-bottom">Contact Us</a></li>
						</ul>
					</div></nav></div></div></div>
					<!-- script-for sticky-nav -->
						<script>
						$(document).ready(function() {
							 var navoffeset=$(".header-nav").offset().top;
							 $(window).scroll(function(){
								var scrollpos=$(window).scrollTop(); 
								if(scrollpos >=navoffeset){
									$(".header-nav").addClass("fixed");
								}else{
									$(".header-nav").removeClass("fixed");
								}
							 });
							 
						});
						</script>
<!-- //header-nav -->
	<div class="map">
		<div class="container">
            <br><br><br><br>
			<div class="map-grids">
                <div class="col-md-3 contact-left"> 
                        <h3>More Info:</h3>
					<div class="line minus"> 
					</div>
					<ul>
						<li>Free Phone :+968 4589 2456</li>
						<li>Telephone :+1 078 4589 2456</li>
						<li>Fax :+1 078 4589 2456</li>
						<li><a href="mailto:info@example.com">info@gmail.com</a></li>
					</ul>
				</div>
				<div class="col-md-9 contact-left">
					<h3 style="color:#E8BB2E;">Register</h3>
					<div class="line minus1"> 
					</div>
					<form method="post" action="" >
                        <input type="text" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="" style="color:#799F61;">
                        <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="" style="color:#799F61;">
						<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="" style="color:#799F61;">
						<br><br><br><br><br><br><input type="submit" value="Register" name="reg" >
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- footer -->
	<div class="footer">
		<div class="container">
			
				<div class="clearfix"> </div>
			<div class="footer-copy">
				<p>© 2018 Coffee Guide ALkarj | All rights reserved </p>
			</div>
		</div>
	</div>
<!-- //footer -->
		<script src="js/bootstrap.js"> </script>
</body>
</html>