<html>
<head>
<title>PHP Student Registration Form</title>
<link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form name="frmRegistration" method="post" action="">
        <div class="demo-table">
        <div class="form-head">Student Registration</div>
            
<?php
if (! empty($errorMessage) && is_array($errorMessage)) {
    ?>	
            <div class="error-message">
            <?php 
            foreach($errorMessage as $message) {
                echo $message . "<br/>";
            }
            ?>
            </div>
<?php
}
?>
            <div class="field-column">
                <label>First Name</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="userFirstname"
                        value="<?php if(isset($_POST['Firstname'])) echo $_POST['Firstame']; ?>">
                </div>
            </div>
            
            <div class="field-column">
                <label>Last Name</label>
                <div><input type="UserLastname" class="demo-input-box"
                    name="UserLastname" value=""></div>
            </div>
            <div class="field-column">
                <label>Middle Name</label>
                <div>
                    <input type="Middlename" class="demo-input-box"
                        name="Middlename" value="">
                </div>
                
            <div class="field-column">
                <label>Address</label>
                <div><input type="Address" class="demo-input-box"
                    name="address" value=""></div>
            <div class="field-column">
                <label>Date of Birth</label><br>
                     <input type="date" id="birthday" name="birthday"><br>
                    </form>
            </div>
            <div class="field-column">
                <label>Place of Birth</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="firstName"
                        value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>">
                </div>
                <div class="field-column">
                <label>Gender</label><br>
                 <input type="radio" name="gender" value="female">Female
                 <input type="radio" name="gender" value="male">Male
                 </div> 
                 <div class="field-column">
                <label>Guardian Name</label>
                <div><input type="Guardianname" class="demo-input-box"
                    name="Guardianname" value=""></div>
                <div class="field-column">
                <label>Civil Status</label>
                <div><input type="Civil Status" class="demo-input-box"
                    name="Civil Status" value=""></div>
                <div class="field-column">
                    <label for="Year">Year Level</label>
                    <select id="Year level">
                    <option value="volvo">1st Year</option>
                    <option value="saab">2nd Year</option>
                    <option value="mercedes">3rd Year</option>
                    <option value="audi">4th Year</option>
                    <option value="audi">5th Year</option>
                </select>
                <div>

                    <input type="text" class="demo-input-box"
                        name="userEmail"
                        value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>">
                </div>
            </div>
               <div>
                    <input type="submit"
                        name="register-user" value="Register"
                        class="btnRegister">
                </div>
            </div>
        </div>
    </form>
</body>
</html>