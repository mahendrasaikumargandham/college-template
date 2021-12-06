<html lang="en">
<head>
    <link rel="stylesheet" href="css/marks_details.css">
    <title>Total Marks</title>
</head>
<body>
    <?php 
        $pinNumberErr = "";
        $pinNumber = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["pinNumber"])) {
                $pinNumberErr = "PIN is required";
            } else {
                $pinNumber = test_input($_POST["pinNumber"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                  $nameErr = "Only letters allowed";
                }
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
    ?>
    <div class="container">
        <div class="title">
            <img src="images/vishnu_logo.bmp" alt="" />
        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="lbl">
                <h3>PIN Number</h3>
                <input type="text" name="pinNumber" />
                <button name="submit" value="Submit">Search</button>
            </div>
        </form>
    </div>
</body>
</html>
