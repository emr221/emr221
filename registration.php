<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="calculation.php">Calculation</a></li>
                <li><a href="registration.php">Register</a></li>
            </ul>
        </nav>
        <form action="welcome.php" method="POST">
            <label for="fullname">Full Name:</label>
            <input type="text" name="fullname" id="fullname" required><br>

            <label for="age">Age:</label>
            <input type="number" name="age" id="age"><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>

            <label for="phone">Phone number:</label>
            <input type="tel" name="phone" id="phone"><br>

            <input type="submit" value="Register">
    </body>
</html>