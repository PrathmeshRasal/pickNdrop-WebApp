<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&family=Work+Sans:wght@700;900" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registration</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-md">
        <a class="navbar-brand fs-3 ms-3 " href="index.html">
            <img class="logo" src="assets/IMG/placeholder.png" alt="" height="30px" width="35px">
            <!-- pickNdrop -->
            <font color="#13375b">pickNdrop</font>
        </a>
    </nav>
    <div class="registration-form">
        <h2>Register Here!</h2>
        <form action="register.php" method="post">
            <label><b>Enter First Name:</b></label><br>
            <input type="text" name="fname" required /><br /><br>

            <label><b>Enter Last Name:</b></label><br>
            <input type="text" name="lname" required><br /><br>

            <label><b>Enter Email:</b></label><br>
            <input type="text" name="email" required><br /><br>

            <label><b> Enter Date of Birth:</b></label><br>
            <input type="date" name="dob" id="dob" required><br><br>

            <label><b>Enter Gender:</b></label><br>
            <select name="gender" required>
                <option value="gender">Gender</option>
                <option value="male">Male</option>
                <option value="femail">Female</option>
                <option value="other">Other</option>
            </select><br><br>

            <label><b>Set Password:</b></label><br>
            <input type="password" name="password" required><br /><br>

            <input type="submit" name="submit" value=" REGISTER NOW " />
            <a href="login.php">
                <h3>Alredy have an account?</h3>
            </a>
        </form>
        <script>

        </script>
    </div>

</body>

</html>