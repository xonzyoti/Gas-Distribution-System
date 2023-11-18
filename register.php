
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

   <!-- ---- Login Section ---- -->
   <section style="padding-left: 160px; padding-top: 20px; padding-bottom: 50px;">
        <div class="tabs" style="width: 1200px; padding-left: 80px;">
            <button class="tablinks" onclick="openTab(event, 'consumerTab')" id="defaultOpen"><b>New Consumer</b></button>
            <button class="tablinks" onclick="openTab(event, 'distributorTab')"><b>New Distributor</b></button>
        </div>

        <div id="consumerTab" class="tabcontent" style="background-color: white; width: 1200px; padding-left: 100px;">
            <h4><b>New Consumer Registration -</b></h4>
            <p class='text-success' style="width: 1000px;">After this process we will verify you.</p><br>
            <form method="post" action="consumer_registration.php" id="conRegistrationForm" style="width: 1000px;">
            <div class="form-group">
                    <label class="control-label" for="text-input"><b>Consumer Name: </b></label>
                    <input class="form-control" type="text" name="cname" id="name" maxlength=20 required />
                </div>
                <div class="form-group">
                    <label class="control-label" for="textarea-input"><b>Address: </b></label>
                    <textarea class="form-control" name="cadd" id="add" maxlength=100 required></textarea>
                </div>
                <div class="form-group">
                    <label for="inputCity"><b>City: </b></label>
                    <select id="city" name="ccity" class="form-control" required>
                        <option value='Guwahati'>Guwahati</option>
                        <option value='Kolkata'>Kolkata</option>
                        <option value='Shillong'>Shillong</option>
                        <option value='Others'>Others</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputZip"><b>Pin-Code: </b></label>
                    <input type="text" class="form-control" id="pin" name="cpin" pattern=".{6,}" title="Six Digits" maxlength=6 required>
                </div>
                <div class="form-group">
                    <label class="control-label" for="email-input"><b>Email: </b></label>
                    <input class="form-control" type="email" name="cemail" id="email" maxlength=30 required />
                </div>
                <div class="form-group">
                    <label class="control-label" for="text-input" ><b>Mobile: </b><small> (Without Country Code & Only 10 Digits.)</small></label>
                    <input class="form-control" type="text" name="cphone" pattern="[1-9]{1}[0-9]{9}" title="At least Ten Digits" maxlength=10 required/>         
                </div>
                <div class="form-group">
                    <label class="control-label" for="password-input" ><b>Password Input: </b></label><small> (Must contain at least 6 or more characters)</small>
                    <input class="form-control" type="password" name="cpassword" id="password" maxlength=16 pattern=".{6,}" title="Six or more characters" required/>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password-input" ><b>Confirm Password: </b></label> 
                    <input class="form-control" type="password" id="confirmPassword" maxlength=16 required />
                </div>
                <p id='password_message' class="text-danger"></p>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" name="con_submit"  style="background-color: darkgreen;">Submit</button>
                    <br>
                </div>
            </form>
        </div>

        <div id="distributorTab" class="tabcontent" style="display: none; background-color: white; width: 1200px; padding-left: 100px;">
            <h4><b>New Distributor Registration -</b></h4>
            <p class='text-success'>After this process we will verify you.</p><br>
            <form method="post" action="distributor_registration.php" id="disRegistrationForm" style="width: 1000px;">
                <div class="form-group">
                    <label class="control-label" for="text-input"><b>Distributor Name: </b></label>
                    <input class="form-control" type="text" name="dname" id="name" maxlength=20 required />
                </div>
                <div class="form-group">
                    <label class="control-label" for="textarea-input"><b>Address: </b></label>
                    <textarea class="form-control" name="dadd" id="add" maxlength=100 required></textarea>
                </div>
                <div class="form-group">
                    <label for="inputState"><b>City: </b></label>
                    <select id="city" name="dcity" class="form-control" required>
                        <option value='Guwahati'>Guwahati</option>
                        <option value='Kolkata'>Kolkata</option>
                        <option value='Shillong'>Shillong</option>
                        <option value='Others'>Others</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputZip"><b>Pin-Code: </b></label>
                    <input type="text" class="form-control" id="pin" name="dpin" pattern=".{6,}" title="Six Digits" maxlength=6 required>
                </div>
                <div class="form-group">
                    <label class="control-label" for="email-input"><b>Email: </b></label>
                    <input class="form-control" type="email" name="demail" id="email" maxlength=30 required />
                </div>
                <div class="form-group">
                    <label class="control-label" for="text-input" ><b>Mobile: </b><small> (Without Country Code & Only 10 Digits.)</small></label>
                    <input class="form-control" type="text" name="dphone" id="phone" pattern="[1-9]{1}[0-9]{9}" title="At least Ten Digits" maxlength=10 required/>         
                </div>
                <!-- <div class="form-group">
                    <label class="control-label" for="text-input" ><b>Identification Proof: </b><small> (Only PAN card accepted & It must be image and size sould be &lt;2MB)</small></label>
                    <input class="form-control" type="file" name="id_img" required />
                </div> -->
                <div class="form-group">
                    <label class="control-label" for="password-input" ><b>Password Input: </b></label><small> (Must contain at least 6 or more characters)</small>
                    <input class="form-control" type="password" name="dpassword" id="password" maxlength=16 pattern=".{6,}" title="Six or more characters" required/>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password-input" ><b>Confirm Password: </b></label> 
                    <input class="form-control" type="password" id="confirmPassword" maxlength=16 required/>
                </div>
                <p id='password_message' class="text-danger"></p>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" name="dis_submit"  style="background-color: darkgreen;">Submit</button>
                    <br>
                </div>
            </form>
        </div>
    </section>

    <!-- --- Footer Section --- -->
    <?php 
        include 'includes/footer.php';
    ?>
    <!-- --- Footer Section ends --- -->

    <script>
        document.getElementById("defaultOpen").click();
    
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

    <script>
        const passwordInput = document.getElementById("password");
        const confirmPasswordInput = document.getElementById("confirmPassword");
        const passwordMessage = document.getElementById("password_message");

        passwordInput.addEventListener("keyup", validatePassword);
        confirmPasswordInput.addEventListener("keyup", validatePassword);

        function validatePassword() {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;

            if (password === confirmPassword) {
                passwordMessage.textContent = "Passwords match";
                passwordMessage.style.color = "green";
            } else {
                passwordMessage.textContent = "Passwords do not match";
                passwordMessage.style.color = "red";
            }
        }

        document.getElementById("conRegistrationForm").addEventListener("con_submit", function(event) {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;
            if (password !== confirmPassword) {
                event.preventDefault(); 
                alert("Password and Confirm Password do not match. Please try again.");
            }
        });

        document.getElementById("disRegistrationForm").addEventListener("dis_submit", function(event) {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;
            if (password !== confirmPassword) {
                event.preventDefault(); 
                alert("Password and Confirm Password do not match. Please try again.");
            }
        });
    </script>
</body>
</html>