<?php 
  session_start();
  if (isset($_SESSION['adminId'])) {
    header ("Location: admin/admin-dashboard.php");
  }

  else if (isset($_SESSION['consumerId'])) {
    header ("Location: consumer/consumer-dashboard.php");
  }

  else if (isset($_SESSION['distributorId'])) {
    header ("Location: distributor/distributor-dashboard.php");
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel = "icon" href =  "assets/img/logo.jpg" type = "image/x-icon"> 
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
	<link rel="icon" href="fev.png" type="image/png" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
    <!-- ---- Navbar Section starts ---- -->
    <?php 
    include 'includes/navbar.php';
    ?>
    <!-- ---- Navbar Section ends ---- -->

    <!-- ---- Login Form ---- -->
    <section style="padding-left: 450px; padding-top: 80px; padding-bottom: 80px;">
        <div class="tabs" style="width: 600px;">
          <button class="tablinks" onclick="openTab('consumer')" id="defaultOpen"><b>Consumer</b></button>
          <button class="tablinks" onclick="openTab('distributor')"><b>Distributor</b></button>
          <button class="tablinks" onclick="openTab('admin')"><b>Admin</b></button>
        </div>

        <!--consumer tab starts here-->

        <div id="consumerTab" class="tabPanel active" style="background-color: white; width: 600px; padding-top: 30px;">
          <h4 style="padding-left: 10px;"><b>Consumer Login -</b></h4>
            <form method="post" style="padding-top: 20px; padding-left: 50px; padding-right: 50px; padding-bottom: 60px; " action="consumer_login.php">
              
              <label class="control-label" for="password-input" ><b>Consumer ID: </b></label>
              <input type="text" name="cid">

              <label class="control-label" for="password-input" ><b>Password: </b></label>
              <input type="password" name="cpwd">

              <div class="remember-forgot text-center" style="font-size: 14px;">
                <a href="password-recovery.php"><b>Forgot Password?</b></a>
              </div><br>
              
              <button type="submit" name="submit" style="background-color: green; color: white; border-radius: 2px;"><b>Login as Consumer</b></button>
              <div class="login-register text-center" style="font-size: 14px;">
                <p><b>Haven't registered yet? </b><a href="register.php" class="register-link"><b>Register Here</b></a></p>
              </div>
            </form>
        </div>

        <!--consumer tab ends here-->

        <!--distributor tab starts here-->

        <div id="distributorTab" class="tabPanel" style="background-color: white; width: 600px; padding-top: 30px;">
          <h4 style="padding-left: 10px;"><b>Distributor Login -</b></h4>
            <form method="post" style="padding-top: 20px; padding-left: 50px; padding-right: 50px; padding-bottom: 60px; " action="distributor_login.php">

                <label class="control-label" for="password-input" ><b>Distributor ID: </b></label>
                <input type="text" name="did">

                <label class="control-label" for="password-input" ><b>Password: </b></label>
                <input type="password" name="dpwd">

                <div class="remember-forgot text-center" style="font-size: 14px;">
                  <a href="password-recovery.php"><b>Forgot Password?</b></a>
                </div><br>
                
                <button type="submit" name="submit" style="background-color: green; color: white; border-radius: 2px;"><b>Login as Distributor</b></button>
                <div class="login-register text-center" style="font-size: 14px;">
                  <p><b>Haven't registered yet? </b><a href="register.php" class="register-link"><b>Register Here</b></a></p>
                </div>
            </form>
        </div>

        <!--distributor tab ends here-->

        <!--admin tab starts here-->

        <div id="adminTab" class="tabPanel" style="background-color: white; width: 600px; padding-top: 30px;"><br>
          <h4 style="padding-left: 10px;"><b>Admin Login -</b></h4><br>
            <form method="post" style="padding-top: 20px; padding-left: 50px; padding-right: 50px; padding-bottom: 60px; " action="admin_login.php">
                
              <label class="control-label" for="password-input" ><b>Admin ID: </b></label>
              <input type="text" name="aid">

              <label class="control-label" for="password-input" ><b>Password: </b></label>
              <input type="password" name="apwd">
              
              <button type="submit" name="submit" style="background-color: green; color: white; border-radius: 2px;"><b>Login as Admin</b></button>
            </form><br>
        </div>

        <!--distributor tab ends here-->

      </div>
    </section>
    <!-- ---- Login Form ends ---- -->

    <!-- --- Footer Section --- -->
    <?php 
      include 'includes/footer.php';
    ?>
    <!-- --- Footer Section --- -->
    
    <script>
      function openTab(tabName) {
          let i;
          const tabContent = document.getElementsByClassName('tabPanel');
          const tablinks = document.getElementsByClassName('tablinks');

          for (i = 0; i < tabContent.length; i++) {
              tabContent[i].style.display = 'none';
              tablinks[i].classList.remove('active');
          }

          document.getElementById(tabName + 'Tab').style.display = 'block';

          for (i = 0; i < tabLabels.length; i++) {
              if (tabLabels[i].id === tabName) {
                  tabLabels[i].classList.add('active');
              }
          }
      }
    </script>
</body>
</html>