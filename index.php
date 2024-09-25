<?php 

session_start();

include "style.php";
include "config.php";

//setting timezone
date_default_timezone_set('Asia/Manila');

//storing current timestamp
$_SESSION['logdate'] = date("Y-m-d H:i:s");




 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<title>Welcome!</title>
</head>
<body>

<div class="loader"></div>

<form action="#" method="post">
	




 	<section class="active">


 	<div class="herm">
 		
 		<img src="pics/herm.png">
 	</div>



	<div class="log-cont">


	<div class="picbox">	
	<img src="pics/SCHOOL-LOGO.png" class="pic" alt="CCP" width="120px" height="120px">
	</div>

	<p class="p1">Central Colleges</p>
	<p class="p2">Online Concerns System</p>

	<div class="inputbox">
	<input type="text" name="unum" placeholder="Student Number" minlength="9" maxlength="9">
	</div>

	
	<div class="inputbox1">
	<input type="password" name="upass" placeholder="Password">
	</div>

	<input type="submit" name="login" value="Login" class="logbutton">

	</div>

	</section>
</form>

<?php 




if(isset($_POST['login'])){

	if(!empty($_POST['unum']) && !empty($_POST['upass'])){


		$_POST['unum']=htmlspecialchars($_POST['unum']);
		$_POST['upass']=htmlspecialchars($_POST['upass']);

		include "config.php";

		$que=mysqli_query($conn, "SELECT * FROM user WHERE unum='".$_POST['unum']."' AND upass='".$_POST['upass']."'");
		$F=mysqli_num_rows($que);


		if($F>0){

			$R=mysqli_fetch_array($que);

			if ($R['status']=='1' && $R['type']=='user'){
			$Update = mysqli_query($conn, "UPDATE user set logtime = '".$_SESSION['logdate']."' WHERE uname= '".$R['uname']."'");

			$Logs=mysqli_query($conn, "INSERT INTO logs (user,status,logtime1) VALUES ('".$R['uname']."','Successfully LoggedIn','".$_SESSION['logdate']."')");

			$_SESSION['nakapasokna']='Pasok';
			$_SESSION['name']=$R['uname'];
			$_SESSION['level']=$R['type'];
			

			echo "<script> alert('Hello!! {$R['uname']}.)</script>";
			echo "<script> alert('Redirecting to CCP Online Concerns Form...')</script>";
			echo "<script> window.location.href='https://docs.google.com/forms/d/e/1FAIpQLSdJ08Usp-AMWAkY6apb_AByseloBp2fCIVAbhRRcJOVk76rbQ/viewform?usp=sf_link'</script>";

			

			}

			elseif($R['status']=='1' && $R['type']=='admin'){
			$Update = mysqli_query($conn, "UPDATE user set logtime = '".$_SESSION['logdate']."' WHERE uname= '".$R['uname']."'");


			$Logs=mysqli_query($conn, "INSERT INTO logs (user,status,logtime1) VALUES ('".$R['uname']."','Successfully LoggedIn','".$_SESSION['logdate']."')");
				
			$_SESSION['nakapasokna']='Pasok';
			$_SESSION['name']=$R['uname'];
			$_SESSION['level']=$R['type'];
			

			echo "<script> alert('Hello!! {$R['uname']}.')</script>";
			echo "<script> alert('Redirecting to Admin Page. Welcome!')</script>";
			echo "<script> window.location.href='admin.php'</script>";


			}

			else{


			$Logs=mysqli_query($conn, "INSERT INTO logs (user,status,logtime1) VALUES ('user','Unsuccessful entry(Account Deactivated)','".$_SESSION['logdate']."')");

			echo "<script> alert('Account Deactivated! Please coordinate with your Administrator')</script>";
			echo "<script> window.location.href='index.php'</script>";

			}
		}	

		else{



			$Logs=mysqli_query($conn, "INSERT INTO logs (user,status,logtime1) VALUES ('user','Unsuccessful entry','".$_SESSION['logdate']."')");

			echo "<script> alert('Incorrect Credentials! Please try again.')</script>";
			echo "<script>window.location.href='index.php'</script>";

			mysqli_close($conn);
		}

	}

	else{

		echo "<script> alert('Please fill-out empty fields!!!')</script>";
		echo "<script>window.location.href='index.php'</script>";
	}



}








 ?>

</body>

	<script type="text/javascript">
		
		window.addEventListener("load",() => {

			const loader = document.querySelector(".loader");

			loader.classList.add("loader--hidden");

			loader.addEventListener("transitionend",()=> {
				document.body.removeChild(loader);
			});
		});
	</script>
<footer>
	
	<div class="foot">
		
		<nav class="about">
			
			<a href="https://ccp.edu.ph/">Central Colleges of the Philippines</a>
			<a href="https://www.facebook.com/CCPofficial"><i class='bx bxl-facebook-square'></i>CCPofficial</a>
			<a href="https://www.instagram.com/ccp_edu/"><i class='bx bxl-instagram-alt'></i>ccp_edu</a>
			<a href="about.php">About</a>

			<p class=""></p>	
					
		</nav>			

	</div>
</footer>
</html>