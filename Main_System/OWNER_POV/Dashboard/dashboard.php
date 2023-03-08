<?php

@include '../../config.php';

session_start();

if(!isset($_SESSION['owner_name'])){
   header('location:../../login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
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
          <a href="../Dashboard\dashboard.php" class="active">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="../PARKING info\park_info.php">
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
        <span class="admin_name"><?php echo $_SESSION['owner_name'] ?></span>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Available Parking</div>
            <div class="number">-----</div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Visitors</div>
            <div class="number">-----</div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Monthly earn</div>
            <div class="number">-----</div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Balance</div>
            <div class="number">-----</div>
          </div>
        </div>
      </div>

      <div class="Parking-boxes">
        <div class="recent-Parking box">
          <div class="title">On Going Reservation</div>
          <div class="Map">
            <h1>TIP MANILA</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861
            .0660001447864!2d120.9854020748201!3d14.595314985890395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13
            .1!3m3!1m2!1s0x3397c9f618e826d3%3A0xeb7fcfb4bf255def!2sTechnological%20Institute%20of%20the%20Philippines
            !5e0!3m2!1sen!2sph!4v1670299727836!5m2!1sen!2sph" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="button">
            <a href="../PARKING Info\park_info.php">See All</a>
          </div>
        </div>
        <div class="top-Parking box">
          <div class="title">Parking Rates</div>
          <ul class="top-Parking-details">
            <table border="2">
              <tr align="bx-menu-alt-right">
                <td width="50px">
                  Vehicle
                </td>
                <td width="50px">
                  Daily
                </td>
                <td width="50px">
                  Weekly
                </td>
                <td width="50px">
                  Monthly
                </td>
              </tr>
                <tr align="center">
                  <td width="50px">
                    2 wheels
                  </td>
                  <td width="50px">
                    1-3hrs 40PHP, 10PHP succeeding hrs
                  </td>
                  <td width="50px">
                    500PHPH
                  </td>
                  <td width="50px">
                    800PHP
                  </td>
                </tr>
                <tr align="center">
                  <td width="50px">
                    4 wheels
                  </td>
                  <td width="50px">
                    1-3hrs 50PHP, 10PHP succeeding hrs
                  </td>
                  <td width="50px">
                    700PHP
                  </td>
                  <td width="50px">
                    1,500PHP
                  </td>
                </tr>
            </table>
          </ul>
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
