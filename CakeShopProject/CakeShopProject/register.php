<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>The Cake Shop</title>
    <meta name="author" content="Juhi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png" />
</head>

<body onload="document.registerForm.reset();" >

 <navbar>
        <div id="js-toggle"><i class="fa fa-bars opts" aria-hidden="true"></i></div>
        <div class="logo"><img src="images/logo.png" alt="logo" title="Cake Shop"></div>

        <ul class="main-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html#about">About</a></li>
            <li><a href="index.html#services">Services</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li class="active"><a href="#"><img src="images/user.svg" alt=""></a></li>
            
        </ul>
    </navbar>
    <h2 class="mtitle text-center mb-0">Sign Up</h2>
    <div class="container">
        <div class="form-container">
            <form class="mt-3" id="signup" method="POST" action="" name="registerForm">
                <div class="form-group">
                    <input type="name" class="form-control" name="uname" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="e-mail" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="Set a password" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="address" rows="3" placeholder="Address" maxlength="240" required></textarea>
                </div>
                <div class="form-group text-center">
                    <input type="submit" value="Sign Up" class="btn sb" name="submit">
                </div>
            </form>
            <div class="text text-center">Already have an account ?<a href="login.php">Log In</a></div>
        </div>
    </div>
    <footer class="bg-dark">
        <div class="row  justify-content-between px-5">
            <div class="foot" data-wow-delay="0.3s">
                <div class="name">The Cake Shop</div>
                <div class="address">Rose appartment<br>Powai plaza,<br>Mumbai-400072</div>
                <div class="socials">
                    <div class="social"><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></div><br>
                    <div class="social"><a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></div><br>
                    <div class="social"><a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div class="quick-links" data-wow-delay="0.3s">
                <div class="name">Quick Links</div>
                <div class="links">
                    <ul>
                        <li><a href="index.html/#">About</a></li>
                        <li><a href="index.html/#">Gallery</a></li>
                        <li><a href="index.html/#">Services</a></li>
                        <li><a href="index.html/#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14950954.636177184!2d36.042332204989656!3d23.813783474490165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2sSaudi%20Arabia!5e0!3m2!1sen!2sin!4v1575531830724!5m2!1sen!2sin" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
        <div class="copyright">Copyright &copy; 2021</div>
    </footer>
    <div class="to-top"><a href="#"><i class="fa fa-arrow-up"></i></a></div>
</body>
<script src="js/wow.js"></script>
<script>
    new WOW().init();

</script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.opts').click(function() {
            $('.main-nav').toggleClass('visible');
        })
    });

</script>
<script>
        $('#signup').value('');
   
</script>

<?php
if (isset($_POST['submit'])) {
$name=$_POST["uname"];
$pass=$_POST["pass"];
$email=$_POST["e-mail"];
$address=$_POST["address"];
    
$servername="localhost";
$username="root";
$password="";
$database="cakeshop";
    
$conn = new mysqli ($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
           //insert values
$sql = "INSERT INTO `users` (`uid`, `name`, `email`, `password`, `address`) VALUES (NULL, '$name', '$email', '$pass', '$address')";
if ($conn->query($sql) == TRUE) {
  }
else {
echo "Error" . $conn->error;
}
} 


?> 

</html>
