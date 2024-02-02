<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h2>Registration</h2>
        <form method="post" action="index.php">
            <label>Name: <input type="text" name="name" id="name" required></label><br>
            <label>Email: <input type="email" name="email" id="email" required></label><br>
            <label>Age: <input type="number" name="age" id="age"required></label><br>
            <label>Gender:
                <label for="male"><input type="radio" name="gender" id="male" required>m</label>
                <label for="female"><input type="radio" name="gender" id="female" required>f</label>
                <label for="others"><input type="radio" name="gender" id="others" required>o</label><br>
        </label><br>
            <label>Password: <input type="password" name="password" id="passwd"required></label><br>
            <input type="submit" name="register" value="Register">
        </form>

</body>
</html>