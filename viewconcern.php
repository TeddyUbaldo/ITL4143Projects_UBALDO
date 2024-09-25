<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage Concern</title>
</head>
<body>

	<?php
	include "style.php";
	include "config.php";
	echo "<form action='#' method='post'>";
		//Get the unique id of the selected record
		$que = mysqli_query($conn,"SELECT * FROM concerns WHERE stunum ='".$_GET['id']."'");//GET METHOD
		echo "<table class='tab' border='1' style='border-collapse:collapse'>";
			
			echo "<tr>";
			echo "<th>#</th>";
			echo "<th>Student Number</th>";
			echo "<th>Student Name</th>";
			echo "<th>Student Concerns</th>";
			echo "<th>Action</th>";
			echo "</tr>";

			$ctr=0;
			while ($fet = mysqli_fetch_array($que)) {
			$ctr++;
			echo "<tr>";
				echo "<td>$ctr</td>";
				echo "<td>{$fet['stunum']}</td>";
				echo "<td>{$fet['stuname']}</td>";
				echo "<td>{$fet['stucorn']}</td>";

				echo "<td></td>";
				echo "<td>"."<input type='submit' name='Assign' class='buton1' value='Assign'>"."</td>";
			echo "</tr>";


			}//while
		
		echo "</table>";


		if (isset($_POST['Assign'])) {//update the selected project


			include "configlec5.php";
			
			$UPDATE = mysqli_query($conn,"UPDATE enrolled set task = '".$_POST['proj']."' WHERE stunum ='".$_GET['id']."'");

			mysqli_close($conn);

			include "configlec5.php";

			$Q= mysqli_query($conn,"SELECT * FROM enrolled WHERE stunum ='".$_GET['id']."'");
			
			$F=mysqli_num_rows($Q);	
		
			if($F>0){

			$R= mysqli_fetch_array($Q);

			$_SESSION['to']=$R['stuemail'];

			if($_POST['proj'] == 'Project 1'||  $_POST['proj'] == 'Project 2' || $_POST['proj'] == 'Project 3'|| $_POST['proj'] == 'Project 4'){

				include "smtpacc.php";

				echo "<script>alert('Record Updated!')</script>";
				echo "<script>window.location.href='adminlec5.php'</script>";
			}

			else{

				include "smtp5deny.php";

				echo "<script>alert('Record Updated!')</script>";
				echo "<script>window.location.href='adminlec5.php'</script>";

				}

			}

		

			else{

				echo "<script>alert('Record not on the list!')</script>";
				echo "<script>window.location.href='adminlec5.php'</script>";

			}

			

		
			mysqli_close($conn);

			
		}



		echo "<form>";
	?>

</body>
</html>