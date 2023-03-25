<?php
include './connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/account.css">
    <link rel="shortcut icon" href="./logo/logo.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <section id="formHolder">
       <div class="row">
          <div class="col-sm-6 brand">
             <a href="./index.html" class="logo"><img src="./logo/logo.png" alt=""></a>
             <div class="heading">
                <h2>HOMEDESIGN</h2>
                <p>Your Right Choice</p>
             </div>
 
             <div class="success-msg">
                <p>Great! You are one of our members now</p>
                <a href="./profile.php" class="profile">Your Profile</a>
             </div>
          </div>
          <!-- Form Box -->
          <div class="col-sm-6 form">
 
             <!-- Login Form -->
             <div class="login form-peice  switched">
                <form class="login-form" method="post">
                   <div class="form-group">
                      <label for="loginemail">Name Account</label>
                      <input type="text" name="loginemail" id="loginemail" required>
                      <span class="error error_login"></span>
                     </div>
                   <div class="form-group">
                      <label for="loginPassword">Password</label>
                      <input type="password" name="loginPassword" id="loginPassword" required>
                      <span class="error  error_password"></span>
                     </div>
 
                   <div class="CTA">
                      <input type="submit" class="btn_login" value="Login">
                      <a href="#" class="switch">I'm New</a>
                   </div>
                </form>
             </div><!-- End Login Form -->
 
 
             <!-- Signup Form -->
             <div class="signup form-peice">
                <form class="signup-form" method="post" action="./client/signup-account.php">

                   <div class="form-group">
                      <label for="name">Full Name</label>
                      <input type="text" name="username" id="name" class="name">
                      <span class="error error-account"></span>
                   </div>
 
                   <div class="form-group">
                      <label for="email">Email Adderss</label>
                      <input type="email" name="emailAdress" id="email" class="email">
                      <span class="error"></span>
                   </div>
 
                   <div class="form-group">
                      <label for="phone">Phone Number - <small>Optional</small></label>
                      <input type="text" name="phone" id="phone">
                      <span class="error"></span>
                   </div>
 
                   <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password" class="pass">
                      <span class="error"></span>
                   </div>
 
                   <div class="form-group">
                      <label for="passwordCon">Confirm Password</label>
                      <input type="password" name="passwordCon" id="passwordCon" class="passConfirm">
                      <span class="error"></span>
                   </div>
                   <div class="CTA">
                      <input name="singn_up_account" type="submit" class="btn_signup confirm-account" value="Signup Now" >
                      <a href="#" class="switch ">I have an account</a>
                     </div>
                  </form>
                  
                  <a href="./client/check-name-account.php?name_account" class="link-account" style="position:absolute;"></a>
                  <a href="./client/login-account.php?name_login" class="link-check-account-login" style="position:absolute;"></a>
                  <a href="./client/login-account.php?password_login" class="link-check-password-login" style="position:absolute;"></a>
                  <a href="./client/login-account.php?confirm_password" class="link_confirm_password"></a>
               </div><!-- End Signup Form -->
          </div>
       </div>
    </section>
 
 
    <footer>
       <p>
         Contact us: <a href="#" target="_blank">Homedesign@gmail.com</a>
       </p>
    </footer>
 </div>
 
</body>
<script src="./assets/javascript/account.js"></script>
</html>