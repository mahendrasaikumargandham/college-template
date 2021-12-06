<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Details</title>
    <link rel="stylesheet" href="css/student_data.css">
</head>
<body>
    <?php 
        $pinNumberErr = "";
        $pinNumber = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["pinNumber"])) {
                $pinNumberErr = "Pin Number is required";
              } else {
                $pinNumber = test_input($_POST["pinNumber"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$pinNumber)) {
                  $pinNumberErr = "Only letters allowed";
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
            <h2>Smt. B. Seetha Polytechnic</h2>
        </div>
        <div class="box">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="content">
                    <h3>PIN Number</h3>
                    <input type="text" class="txt" name="pinNumber" value="<?php echo $pinNumber;?>" />
                </div>
                <div class="btn">
                    <button type="submit" name="submit" value="Submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
