<?php

//User server document root when fetching files outside or above the folder
include $_SERVER['DOCUMENT_ROOT'] . '/Main_System/config.php';

session_start();

if (!isset($_SESSION['driver_name'])) {
  header('location:../../login_form.php');
}

// Initialize variable first
$id = "";
$name = "";
$number = "";
$email = "";
$password = "";
$pass_count = 0;
$new_pass = "";

//MYSQL SELECT STATEMENT
$user_query = mysqli_query($conn,"SELECT * FROM `user_form` WHERE name = '{$_SESSION['driver_name']}'");

//FETCH DATA USING FETCH_ASSOC METHOD
while($row = mysqli_fetch_assoc($user_query)) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $number = $row['number'];
    $password = $row['password'];
}

$pass_count = strlen($password);

for($i = 0; $i < $pass_count; $i++) {
  $new_pass .= "*";
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Account Settings</title>
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
          <a href="../PARKING LIST\park-list.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Parking List</span>
          </a>
        </li>
        <li>
          <a href="../Account Settings\acc-set.php" class="active">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Account Settings</span>
          </a>
        </li>
        <li>
          <a href="../PARKING HISTORY\park-history.php">
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
          <a href="../../logout.php">
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
        <span class="admin_name"><?php echo $_SESSION['driver_name'] ?></span>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Account Settings</div>
          <div class="sales-details">
            <ul class="details">
              <li><a href="#">ID</a></li>
              <li><a href="#">Name:</a></li>
              <li><a href="#">Phone Number:</a></li>
              <li><a href="#">Password:</a></li>
              <li><a href="#">Email:</a></li>
            </ul>
            <ul class="details">
            <li><a href="#"><?= $id ?></a></li>  
            <li><a href="#"><?php echo $_SESSION['driver_name'] ?></a></li>
            <li><a href="#"><?= $number ?></a></li>
            <li><a href="#"><?= $new_pass ?></a></li>
            <li><a href="#"><?= $email ?></a></li>
          </ul>
          </div>
          <div class="button">
            <a href="acc-set-edit.php?id=<?= $id ?>">Edit</a>
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
