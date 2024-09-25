<?php 


include "indexstyle.php";


//setting timezone
date_default_timezone_set('Asia/Manila');

//storing current timestamp
$_SESSION['logdate'] = date("Y-m-d H:i:s");




 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="sweetalert2.min.css">
	<title>Administrator</title>
</head>
<body>

<form action="#" method="post">

<div class="sidebar">
	<div class="top">

		<div class="logo">	
			<img src="pics/SCHOOL-LOGO.png" alt="school" height="50px" width="50px">
			<span>Central Colleges</span>
		</div>
			<i class="bx bx-menu" id="btn"></i>
	</div>
	<ul>
		<li>
			<a href="admin.php" class="active">
					<i class="bx bxs-grid-alt"></i>
					<span class="nav-item">Dashboard</span>
			</a>
			
		</li>
		<li>
			<a href="concerns.php">
					<i class="bx bxs-folder-open"></i>
					<span class="nav-item">Concerns</span>
			</a>
		</li>
		<li>
			<a href="users.php">
					<i class="bx bxs-user"></i>
					<span class="nav-item">Manage Users</span>
			</a>
			
		</li>
		<li>
			<a href="logs.php">
					<i class='bx bxs-coin-stack'></i>
					<span class="nav-item">Logs</span>
			</a>
			
		</li>
		<li>
		<input type="submit" name="logout" value="Logout" class="logbutton">
		</li>
	</ul>
</div>

	<div class="main-content">
		<div class="container">
			<h1>Online Concerns System</h1>
		
		</div>
	</div>
</form>
	
	<script src="sweetalert2.min.js"></script>	

	<?php 



	if (isset($_POST['logout'])) {
		
	?>
	
	<script>

		import Swal from 'sweetalert2/dist/sweetalert2.js';
		import 'sweetalert2/src/sweetalert2.scss';


	Swal.fire({
  title: "Are you sure you want to logout?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, logout!"
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire({
      title: "Logging Out!",
      text: "Going Back to the Login Page.",
      icon: "success"
    });
  }
});
	</script>

<?php 

	}
 ?>

</body>

	<script type="text/javascript">
		let btn = document.querySelector('#btn');
		let sidebar=document.querySelector('.sidebar');

		btn.onclick = function(){
			sidebar.classList.toggle('active');
		};



	</script>

	

</html>