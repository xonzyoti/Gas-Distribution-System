
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gas Booking Portal</title>
	<link rel = "icon" href =  "assets/img/logo.jpg" type = "image/x-icon"> 
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/home.css">
	<link rel="icon" href="fev.png" type="image/png" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	
</head>

<body>
	<header>
		<!-- ---- Navbar Section starts ---- -->
		<?php 
		include 'includes/navbar.php';
		?>
		<!-- ---- Navbar Section ends ---- -->
	</header><br>
	
	<section class="bg-section">
		<div style="padding-top: 0;">
			<div class="carousel slide" data-ride="carousel" id="carousel-1" style="padding-top: 100px;">
				<div class="carousel-inner" role="listbox" style="height: 500px;">
					<div class="item"><img style=" margin: 0 auto;" src="assets/img/1.jpg" alt="First Image"></div>
					<div class="item active"><img style=" margin: 0 auto;" src="assets/img/2.jpg" alt="Second Image"></div>
					<div class="item"><img style=" margin: 0 auto;" src="assets/img/3.jpg" alt="Third Image"></div>
					<div class="item"><img style=" margin: 0 auto;" src="assets/img/4.jpg" width="1000px" height="400px" alt="Fourth Image"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="testimonials" style="background-color: white; padding-top: 80px; padding-bottom: 80px;">
			<h2 class="text-center"><b>Safety Tips For LPG Home - Do’s & Don’ts</b></h2>
				<div class="container" style="padding-top: 20px;">
					<div class="row" id='box'>
						<div class="col-md-6" style="padding-left: 0%;">
							<div class="row">
								<div class="col-md-12" style="text-align: center">
									<u><h3><span class="glyphicon glyphicon-ok text-success"></span><b>DO'S</b></h3></u>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<img class="bg-success" style="padding:10px; width:60px;height:60px" src="assets/img/tips/a1.png" />
								</div>
								<div class="col-md-9">
									<h4><b>- Store LPG cylinders in a well-ventilated area away from direct sunlight or heat sources.</b></h3>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3" style="padding-top: 5px;">
									<img class="bg-success" style="padding:10px; width:60px;height:60px" src="assets/img/tips/a2.png" />
								</div>
								<div class="col-md-9">
									<h4><b>- Regularly check for gas leaks using soapy water or a leak detection solution.</b></h3>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3" style="padding-top: 5px;">
									<img class="bg-success" style="padding:10px; width:60px;height:60px" src="assets/img/tips/a3.png" />
								</div>
								<div class="col-md-9" style="padding-top: 5px;">
									<h4><b>- Follow proper installation and always close the regulator knob once you finish cooking.</b></h3>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3" style="padding-top: 5px;">
									<img class="bg-success" style="padding:10px; width:60px;height:60px" src="assets/img/tips/a4.png" />
								</div>
								<div class="col-md-9" style="padding-top: 5px;">
									<h4><b>- Keep LPG cylinders in an upright position to prevent leakage and damage.</b></h3>
								</div>
							</div>
							<div class="row" style="padding-top: 5px;">
								<div class="col-md-3">
									<img class="bg-success" style="padding:10px; width:60px;height:60px" src="assets/img/tips/a5.png" />
								</div>
								<div class="col-md-9">
									<h4><b>- Replace or repair damaged or expired cylinders as per safety guidelines.</b></h3>
								</div>
							</div>
						</div>
						<div class="col-md-6" style="padding-left: 70px;">
							<div class="row">
								<div class="col-md-12" style="text-align:center">
									<u><h3><span class="glyphicon glyphicon-remove text-danger"></span><b>DON'T</b></h3></u>
								</div>
							</div>
							<div class="row" style="padding-top: 5px; width: 620px;">
								<div class="col-md-3">
									<img class="bg-danger" style="padding:10px; width:60px;height:60px" src="assets/img/tips/b1.png" />
								</div>
								<div class="col-md-9">
									<h4><b>- Don't store LPG cylinders in confined spaces, basements, or areas prone to flooding.</b></h3>
								</div>
							</div>
							<div class="row" style="padding-top: 5px; width: 620px;">
								<div class="col-md-3">
									<img class="bg-danger" style="padding:10px; width:60px;height:60px" src="assets/img/tips/b2.png" />
								</div>
								<div class="col-md-9">
									<h4><b>- Don't use open flames or matches near a suspected gas leak; use electrical switches or appliances.</b></h3>
								</div>
							</div>
							<div class="row" style="padding-top: 5px; width: 620px;">
								<div class="col-md-3">
									<img class="bg-danger" style="padding:10px; width:60px;height:60px" src="assets/img/tips/b3.png" />
								</div>
								<div class="col-md-9">
									<h4><b>- Don't tamper with safety devices, valves, or regulators on the LPG cylinder.</b></h3>
								</div>
							</div>
							<div class="row" style="padding-top: 5px; width: 620px;">
								<div class="col-md-3">
									<img class="bg-danger" style="padding:10px; width:60px;height:60px" src="assets/img/tips/b4.png" />
								</div>
								<div class="col-md-9">
									<h4><b>- Don't attempt to repair or refill LPG cylinders yourself; leave it to authorized professionals.</b></h3>
								</div>
							</div>
							<div class="row" style="padding-top: 5px; width: 620px;">
								<div class="col-md-3">
									<img class="bg-danger" style="padding:10px; width:60px;height:60px" src="assets/img/tips/b5.png" />
								</div>
								<div class="col-md-9">
									<h4><b>- Don't smoke while handling LPG cylinders or using LPG appliances.</b></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

	<?php 
		include 'includes/footer.php';
	?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>