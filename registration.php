<?php
    $error = []; // Initialize $error as an empty array
    
    if (isset($_POST['signup'])) {
        $oldValue = $_POST;
        require_once('registrationValidation.php');
        $check = registrationValidation();
        if ($check['status'] == 'error') {
            $error = $check['message'];
        } else {
            /*$success = $check['message'];
			header(refresh:5; url=registration.php'); */
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <!-- stylesheet css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleForRegistration.css">
</head>
<body>
    <header></header>
    <main>
        <section class="container">
            <div>
                <h1>Sign up</h1>
                <h2>Or Log in now</h2>
            </div>
        </section>

        <!-- signup/login status will show here  -->
        <?php
            if (isset($success)) {	?> 
                <div style="text-align: center; ">
                    <strong>Registration Hoya Gese</strong>
                </div> 	
        <?php 
            }
        ?>
				
       
        <section>
            <div>
                <form method="post">
                    <label for="name">Enter your name : </label>
                    <input type="text" name="name" value="<?php if (isset($error) and count($error) > 0) {echo $oldValue['name'];}else {echo '';} ?>" placeholder="enter your name">
                    <?php if (isset($error) and isset($error['name'])) {echo $error['name'];} ?>
                    <br>
                    
                    <label for="email">Enter your email : </label>
                    <input type="email" name="email" value="<?php if (isset($error) and count($error) > 0) {echo $oldValue['email'];}else { echo '';} ?>" placeholder="enter your email">
                    <?php if (isset($error) and isset($error['email'])) {echo $error['email'];} ?>
                    <br>
                    
                    <label for="phone">Enter your phone number : </label>
                    <input type="phone" name="phone" value="<?php if (isset($error) and count($error) > 0) {echo $oldValue['phone'];}else {echo '';} ?>" placeholder="enter your phone number">
                    <?php if (isset($error) and isset($error['phone'])) {echo $error['phone'];} ?>
                    <br>
                    
                    <label for="password">Enter your password : </label>
                    <input type="password" name="password" value="<?php if (isset($error) and count($error) > 0) {echo $oldValue['password'];} else {echo '';} ?>" placeholder="enter new password">
                    <?php if (isset($error) and isset($error['password'])) {echo $error['password'];} ?>
                    <br>
                  
                    <label for="confirmPassword">Confirm your password : </label>
                    <input type="password" name="confirmPassword" value="" placeholder="confirm your password">
                    <!-- <?php if (isset($error) and $error['password']) {echo $error['password'];} ?> -->
                    <!-- <?php if (isset($error) and $error['password']) {echo 'Confirm your password';} ?> -->
                    <br>
                  
					<!-- 	sign up / Registration button  -->
					<div id="signupbtn" style="background-color: coral; padding: 20px 0 20px 0; text-align: center;">
                        <button type="submit" name="signup" style="font-size: larger;">Sign up</button>
                    </div>
              </form>
            </div>
        </section>
    </main>
    <footer></footer>
</body>
</html>