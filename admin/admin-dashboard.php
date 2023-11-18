<?php 
    include 'includes/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin-Dashboard</title>
	<link rel="icon" href="../assets/img/logo.jpg" type="image/x-icon"> 
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
	<header>
		<!-- ---- Navbar Section ---- -->
		<nav class="navbar" style="background-color: green; border-radius: 0%;">
			<div class="container-nav">
				<a class="navbar-brand" style="color: white; padding-left: 50px;"><b>ADMIN- DASHBOARD</b></a>
				<ul class="navbar-nav" style="list-style: none; display: flex; justify-content: flex-end;">
					<li class="navbar-brand" style="font-size: large; padding-left: 1100px;">
						<a href="logout.php" style="color: white;"><b>Log-Out</b></a>
					</li>
				</ul>
			</div>
		</nav>
	</header><br>
	
	<section style="padding-left: 130px; padding-top: 40px; padding-bottom: 80px;">
        <div class="tabs" style="width: 1250px;">
          <button class="tablinks" onclick="openTab('dashboard')" id="defaultOpen"><b>Dashboard</b></button>
          <button class="tablinks" onclick="openTab('distributor')"><b>Manage Distributor</b></button>
          <button class="tablinks" onclick="openTab('feedback')"><b>Complaints/Feedback</b></button>
        </div>

        <div id="dashboardTab" class="tabPanel active" style="background-color: white; width: 1250px; padding-top: 30px;">
          <h4 style="padding-left: 10px;"><b>Admin Dashboard -</b></h4>
            
        </div>
        <div id="distributorTab" class="tabPanel" style="background-color: white; width: 1250px; padding-top: 30px;">
          <h4 style="padding-left: 10px;"><b>Manage Distribution -</b></h4>
            
        </div>
        <div id="feedbackTab" class="tabPanel" style="background-color: white; width: 1250px; padding-top: 30px;">
          <h4 style="padding-left: 10px;"><b>Complaints/Feedback -</b></h4>
            
        </div>

      </div>
    </section>

	

    <!-- --- Footer Section --- -->
    <footer class="site-footer" style="background-color: rgb(11, 68, 11);">
        <div class="container">
            <div class="row" style="color: white;">
                <h7><b>Online Gas Distribution System | Copyright © Pritviraj Keot & Hirokjyoti Kalita</b></h7>
			</div>
        </div>
    </footer>

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

    <script src="../assets/js/jquery.min.js"></script>
    <script src="''/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>