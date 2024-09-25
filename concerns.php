<?php 

	session_start();

	include "indexstyle.php";



 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Concerns</title>
</head>
<body>



<form action="#" method="post">

<div class="sidebar">
	<div class="top">
		<div class="logo">
			<!--<i class="bx bxl-codepen"></i>-->
			<div class="imahe">
			<img src="pics/SCHOOL-LOGO.png" alt="school" class="user-img" height="50px" width="50px">
			</div>
			<span>Central Colleges</span>
		</div>
			<i class="bx bx-menu" id="btn"></i>
	</div>
	<ul>
		<li>
			<a href="admin.php">
					<i class="bx bxs-grid-alt"></i>
					<span class="nav-item">Dashboard</span>
			</a>
			
		</li>
		<li>
			<a href="concerns.php" class="active">
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
			<div class="loader"></div>
			<h1>Online Concerns System</h1>

			<?php 

$csv="https://docs.google.com/spreadsheets/d/e/2PACX-1vQAkhL38rGQPLR9For4omzOseoGjvv4PIcVge9ouPfdf54uH6GHvrq9M8nqykYbe2k82zX0qQvCf_uH/pub?output=csv"; //Sheet Contents "CSV"


$Get=file_get_contents($csv);//get contents from csv

$boom=explode("\r\n", $Get); //explode the contents using delimiters

$data= array(); //container of data in the array

$row=0;
$ctr=0; //counter

//---------------------------------------------------------------------------------------------//


echo "<table class='tab' border='1'>";

echo "<tr>";
echo "<th>#</th>";
echo "<th>Student Number</th>";
echo "<th>Student Name</th>";
echo "<th>Student Concerns</th>";
echo "<th>Images of the Concern/s</th>";
echo "<th>Action</th>";
echo "</tr>";


foreach ($boom as $value) {
	if($value!=NULL){

		$row++;
		if($row==1){continue;}

		$ctr++;
		$data = str_getcsv($value); //str_getcsv(input)
	 	//$Tstamp = $data[0];
	 	$stunum = $data[1];
	 	$_SESSION['stunum'] = $stunum; 
	 	$stuname = $data[2];
	 	$_SESSION['stuname'] = $stuname; 
	 	$stucorn = $data[3];
	 	$_SESSION['stucorn'] = $stucorn;

	 	$Pic=$data[4];
	 	$_SESSION['pic']=$Pic;
	 	
	 	$link = substr($Pic, 33);
	 	
	 	
	 	//Kulay ng row
	 	if ($ctr % 2 == 0) {
					$clr = "#fff";
				}
				else{
					$clr = "#eee";
				}

		echo "<tr>";
		echo "<td style='background-color:{$clr}'>{$ctr}</td>";
	 	echo "<td style='background-color:{$clr}'>{$stunum}</td>";
	 	echo "<td style='background-color:{$clr}'>{$stuname}</td>";
	 	echo "<td style='background-color:{$clr}'>{$stucorn}</td>";
	 	
	 	echo "<td><iframe src='https://drive.google.com/file/d/{$link}/preview' width='250' height='250'></iframe></td>";	 	
	 	
	 	echo "<td>"."<a href='viewconcern.php?id={$stunum}'><input type='button' class='buton1' name='upd' value='Manage'></a>"."</td>";
	 	echo "</tr>"; 

	}
}

echo "</table>";









 ?>

 



 </body>
 </html>
		</div>
	</div>
</form>


</body>


	<script type="text/javascript">
		let btn = document.querySelector('#btn');
		let sidebar=document.querySelector('.sidebar');

		btn.onclick = function(){
			sidebar.classList.toggle('active');
		};

		
		window.addEventListener("load",() => {

			const loader = document.querySelector(".loader");

			loader.classList.add("loader--hidden");

			loader.addEventListener("transitionend",()=> {
				document.body.removeChild(loader);
			});
		});
	
	</script>
</html>