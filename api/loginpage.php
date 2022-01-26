<html lang="en">
<head>
    <title>Student Details</title>
    <link rel="stylesheet" href="../css/loginpage.css">
</head>
<body>
    <?php
        $userNameErr = $passwordError = "";
        $userName = $password = ""; 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["userName"])) {
                $userNameErr = "Username is required";
            } else {
                $userName = test_input($_POST["userName"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$userName)) {
                  $userNameErr = "Only letters and white space allowed";
                }
            }
            if (empty($_POST["password"])) {
                $nameErr = "Password is required";
            } else {
                $password = test_input($_POST["password"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$password)) {
                  $passwordErr = "Only letters allowed";
                }
            }
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        } 
    ?>
    <div class="main">
        <div class="container">
            <div class="title">
                <h2>Student Login</h2>
            </div>
            <div class="box">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="content">
                        <h3>Username</h3>
                        <input type="text" class="txt"  value="<?php echo $userName;?>" />
                    </div>
                    <div class="content">
                        <h3>Password</h3>
                        <input type="password" class="txt" value="<?php echo $password;?>" />
                    </div>
                    <div class="btn">
                        <button type="submit" name="submit" value="Submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="title">
                <h2>Faculty Login</h2>
            </div>
            <div class="box">
                <form>
                    <div class="content">
                        <h3>Username</h3>
                        <input type="text" class="txt" value="<?php echo $userName;?>" />
                    </div>
                    <div class="content">
                        <h3>Password</h3>
                        <input type="password" class="txt" value="<?php echo $password;?>" />
                    </div>
                    <div class="btn">
                        <button type="submit" name="submit" value="Submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
