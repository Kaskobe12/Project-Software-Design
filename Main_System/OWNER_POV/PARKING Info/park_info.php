<?php

include $_SERVER['DOCUMENT_ROOT'] . '/Main_System/config.php';

session_start();

$street = "";
$comadd = "";
$description = "";
$rate = "";
$timeopen = "";
$slots = "";
$vehiclety = "";
$cnumber = "";

$query = "SELECT * FROM park_info";
$query_run = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($query_run)){
  $street = $row['street'];
  $comadd = $row['comadd'];
  $description = $row['description'];
  $rate = $row['rate'];
  $timeopen = $row['timeopen'];
  $slots = $row['slots'];
  $vehiclety = $row['vehiclety'];
  $cnumber = $row['cnumber'];

}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Parking Information</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">SmartParkingFinder</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="../Dashboard\dashboard.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="../PARKING Info\park_info.php" class="active">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Parking Information</span>
          </a>
        </li>
        <li>
          <a href="../Account Settings\acc_set.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Account Settings</span>
          </a>
        </li>
        <li>
          <a href="../PARKING History\park_history.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Parking History</span>
          </a>
        </li>
        <li>
          <a href="../PAYMENT\payment.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Payment</span>
          </a>
        </li>
        <li class="log_out">
          <a href="../../Logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="car.jpg" alt="">
        <span class="admin_name"><?php echo $_SESSION['owner_name'] ?></span>
      </div>
    </nav>

    <div class="home-content">
      <div class="Parking-boxes">
        <div class="recent-Parking box">
          <div class="title">Parking Information</div>
          <div class="Parking-details">
            <ul class="details">

              <li><a href="#">Street:</a></li>
              <li><a href="#">Complete Address:</a></li>
              <li><a href="#">Decription:</a></li>
              <li><a href="#">Rate:</a></li>
              <li><a href="#">Time open:</a></li>
              <li><a href="#">Available Slot:</a></li>
              <li><a href="#">Vehicle Type:</a></li>
              <li><a href="#">Contact Number:</a></li>
            </ul>
            <ul class="details">
            <li><a href="#"><?= $street ?></a></li>
            <li><a href="#"><?= $comadd ?></a></li>
            <li><a href="#"><?= $description ?></a></li>
            <li><a href="#"><?= $rate ?></a></li>
            <li><a href="#"><?= $timeopen ?></a></li>
            <li><a href="#"><?= $slots ?></a></li>
            <li><a href="#"><?= $vehiclety ?></a></li>
            <li><a href="#"><?= $cnumber ?></a></li>
          </ul>
          </div>
          <div class="button">
            <a href="park_info-edit.php">Edit</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
