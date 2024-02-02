<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rgistration</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <h1>Rgistration</h1>
    <div class="container">
        <div class="box form-box">


       <?php
include("php/config.php");
if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $email = $_POST['email'];
   $age = $_POST['Age'];
   $password = $_POST['password'];

    //verification of unique email

    $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email ='$email'");

    if(mysqli_num_rows($verify_query)!=0){
        echo "<div class='message'>
        <p> this email is being used, try another one please!
        </div> <br>";

        echo "<a href='index.php'><button class='btn'>Login now</button>";
        
    }
    else{

        mysqli_query($con,"INSERT INTO  users(username,Email,Age,password) VALUES('$username','$email','$age','$password')") or die("ERROR OCCURRED");
              echo "<div class='message'>
        <p> REGISTRATION SUCESSFUL</P>
        </div> <br>";

        echo "<a href='index.php'><button class='btn'>Login now</button>";
    }
    
  
}else{
?>


            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="Username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
             <input type="text" name="Age" id="Age" required>
                </div>

                <div class="field input">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password" required>
                </div>


                <div class=" field">

                    <input type="submit" name="submit" value="Register" required>
                </div>

                <div class="links">
                    have an accout?<a href="index.php">Login</a>
                </div>
            </form>
        </div>
     <?php  }?>
    </div>
</body>

</html>