<?php

include $_SERVER['DOCUMENT_ROOT'] . '/Main_System/config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:../login_form.php');
}

/*$query = "select * from user_form";
$result = mysqli_query($conn,$query); */

require_once 'function.php';

$result = display_data()

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>User Management</title>
  <link rel="stylesheet" href="admin.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
  <header class="header">
    <div class="logo">
      <a href="#">Smart Parking Space Finder</a>
      <div class="search_box">
        <input type="text" placeholder="Search">
        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
      </div>
    </div>

    <div class="header-icons">
      <i class="fas fa-bell"></i>
      <div class="account">
        <img src="login.jpg" alt="">
        <h4><span><?php echo $_SESSION['admin_name'] ?></span></h4>
      </div>
    </div>
  </header>
  <div class="container">
    <nav>
      <div class="side_navbar">
        <span>Main Menu</span>
        <a href="dashboard.php">Dashboard</a>
        <a href="parkinglist.php">Parking List</a>
        <a href="user-manage.php" class="active">User Management</a>
        <a href="../logout.php">Logout</a>

        <!--<div class="links">
          <span>Quick links</span>
          <a href="#">About Us</a>
          <a href="#">Services</a>
          <a href="#">Link 3</a>
        </div>-->
      </div>
    </nav>

    <div class="main-body">
      <h2>User Management</h2>
      <div class="promo_card">
        <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
        <span>Ad Astra Abyssosque</span>
      </div>

      <div class="history_lists">
        <div class="list1">
          <div class="row">
            <h4>Users</h4>
            <a href="#">See all</a>
          </div>
          <div class="edit-form">
              <?php
                if(isset($_GET['id'])){

                $id = mysqli_real_escape_string($conn, $_GET['id']);
                $query = "SELECT * FROM user_form WHERE id='$id'";
                $query_run = mysqli_query($conn, $query);

                if (mysqli_num_rows($query_run) > 0) 
                {  
                  $user = mysqli_fetch_array($query_run);
                    ?>      
                  <form action="code.php" method="POST">
                    <h3>Edit User</h3>
                    <div><input type="hidden" name="user_id" value="<?=$user['id']?>"></div>
                    <div><input type="text" name="name" value="<?=$user['name']?>" autocomplete="off"></div>
                    <div><input type="email" name="email" value="<?=$user['email']?>" autocomplete="off"></div>
                    <div><input type="number" name="number" value="<?=$user['number']?>" autocomplete="off"></div>
                    <div><input type="password" name="password" value="<?=$user['password']?>" autocomplete="off"></div>
                    <div><input type="submit" name="Update-user" value="Update" class="form-btn"></div>
                  </form>
                  <?php
                } else 
                {
                  echo "<h4>No Id Found</h4>";
                }
              }
              ?>
          </div>
        </div>
      </div>
    </div>

    <div class="sidebar">
      <h4>Exchange Rate???</h4>
      
      <div class="balance">
        <i class="fas fa-dollar icon"></i>
        <div class="info">
          <h5>Dollar</h5>
          <span><i class="fas fa-dollar"></i>25,000.00</span>
        </div>
      </div>
      
      <div class="balance">
        <i class="fa-solid fa-rupee-sign icon"></i>
        <div class="info">
          <h5>PKR</h5>
          <span><i class="fa-solid fa-rupee-sign"></i>300,000.00</span>
        </div>
      </div>

      <div class="balance">
        <i class="fas fa-euro icon"></i>
        <div class="info">
          <h5>Euro</h5>
          <span><i class="fas fa-euro"></i>25,000.00</span>
        </div>
      </div>

      <div class="balance">
        <i class="fa-solid fa-indian-rupee-sign icon"></i>
        <div class="info">
          <h5>INR</h5>
          <span><i class="fa-solid fa-indian-rupee-sign"></i>220,000.00</span>
        </div>
      </div>

      <div class="balance">
        <i class="fa-solid fa-sterling-sign icon"></i>
        <div class="info">
          <h5>Pound</h5>
          <span><i class="fa-solid fa-sterling-sign"></i>30,000.00</span>
        </div>
      </div>

    </div>
  </div>
</body>
</html>
