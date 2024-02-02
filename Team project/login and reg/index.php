<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <h1>login</h1>
    <div class="container">
        <div class="box form-box" >

        <?php
        include("php/config.php");
        if(isset($_POST['submit'])){

         $email = mysqli_real_escape_string($con,$_POST['email']);
         $password = mysqli_real_escape_string($con,$_POST['password']);

         $result = mysqli_query($con,"SELECT * FROM users  WHERE Email='$email' AND password='password'")or  die("select error");
         $row = mysqli_fetch_assoc($result);

         if(is_array($row) && !empty($row)){
            $_SESSION['id'] =$row['id'];
            $_SESSION['username'] =$row['Username'];
            $_SESSION['valid'] =$row['Email'];
            $_SESSION['age'] =$row['Age'];
            

         }else{
        echo "<div class='message'>
        <p> Wrong Email or Username<P></div> ";

        echo "<a href='index.php'><button class='btn'> Go back</button>";
        
         }
                  if(isset($_SESSION['valid'])){
            header("location: home.php");
         }
     }

     else{
        ?>

            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required>
                </div>
          

                <div class="field input">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password" required>
                </div>


                <div class=" field">
                    
                    <input type="submit" name="submit" value="login" required>
                </div>

                <div class="links">
                    Dont have an account? <a href="registration.php">Sign up now</a>
                </div>
            </form>
        </div>
        <?php }?>
    </div>
</body>
</html>