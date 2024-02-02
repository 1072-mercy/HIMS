<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Registration</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <div class="container">
        <h2>Doctor Registration</h2>
        <?php
        include("config.php");
        if(isset($_POST['submit'])) {
            $licence=$_POST['licence'];
            $name=$_POST['name'];
            $dob=$_POST['dob'];
            $id=$_POST['id'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $password=$_POST['password'];


            //verify email
            $verify_query = mysqli_query($con, "SELECT email FROM registration WHERE email='$email'");

                    if (mysqli_num_rows($verify_query) != 0) {
            echo "<p>This email is already in use.</p>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go back</button></a>";
        } else {
            mysqli_query($con, "INSERT INTO registration(licence,name,dob,id,email,phone,password) VALUES('$licence','$name','$dob','$id','$email','$phone','$password'") ;

            echo "<p>Registration successful</p>";
            echo "<a href='index.php'><button class='btn'>Login now</button></a>";
        }
    }
    else{
        
        ?>
        <form action="#">
            <div class="form-group">
                <label for="license">License Number:</label>
                <input type="text" id="license" name="license" required>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="id">ID Number:</label>
                <input type="text" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" id="submit">Register</button>
             <a href="index.php">login</a>
        </form>
        <?php }?>
    </div>
</body>

</html>