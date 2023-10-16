<?php
    session_start();
    include("db.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $Gender = $_POST['gender'];
        $num = $_POST['cnum'];
        $address = $_POST['address'];
        $gmail = $_POST['email'];
        $password = $_POST['pass'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "insert into form (fname, lname, gender, cnum, address, email, pass) values ('$firstname', '$lastname', '$Gender', '$num', '$address', '$gmail', '$password')";

            mysqli_query($con, $query);

            echo "<script type='text/javascript'> alert('successfully register')</script>";

        }
        else{
            echo "<script type='text/javascript'> alert('please enter some vaild information')</script>";
        }
    }
?>
<html>
    <head>
        <title>
            form login and registration
        </title>
    </head>
    <body>
        <div class="signup">
            <form method="post">
                <label>first name:</label>
                <input type="text" name="fname" required>
                <label>last name:</label>
                <input type="text" name="lname" required>
                <label>gender</label>
                <input type="text" name="gender" required>
                <label>phone number:</label>
                <input type="tel" name="cnum" required>
                <label>address:</label>
                <input type="text" name="address" required>
                <label>email:</label>
                <input type="text" name="email" required>
                <label>password:</label>
                <input type="password" name="pass" required>
                <input type="submit" name="" value="submit">
            </form>
        </div>
    </body>
</html>