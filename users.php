<?php 

include "indexstyle.php";

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 	<title></title>
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
      <a href="concerns.php">
          <i class="bx bxs-folder-open"></i>
          <span class="nav-item">Concerns</span>
      </a>
    </li>
    <li>
      <a href="users.php" class="active">
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

      <?php 


  include "config.php";

  $que= mysqli_query($conn, "SELECT * FROM user");

  

    

    echo "<table class='tab' border='1'>";


    echo "<tr>";
    echo "<th>#</th>";
    echo "<th>Student Number</th>";
    echo "<th>Student Name</th>";
    echo "<th>Student Password</th>";
    echo "<th>Student Type</th>";
    echo "<th>Status</th>";
    echo "<th></th>";
    echo "</tr>";

    $ctr=0;

    while($fetch= mysqli_fetch_array($que)) {
  $ctr++; 


  echo "<tr>";

  echo "<td>".$ctr."</td>";
  echo "<td>".$fetch['unum']."</td>";
  echo "<td>".$fetch['uname']."</td>";
  echo "<td>".$fetch['upass']."</td>";
  echo "<td>".$fetch['type']."</td>";
  echo "<td>".$fetch['status']."</td>";
  echo "<td>"."<a href='viewuser.php?id={$fetch['id']}'><input type='button' value='Manage' class='tabbut'></a>"."</td>";

  echo "</tr>";


 

 
 }

  echo "</table>";


 ?>
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
  </script>
 </html>