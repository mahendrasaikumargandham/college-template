<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css" />
    <title>Document</title>
</head>
<body>
    <?php
        phpinfo();
        $chooseErr = "";
        $choose = "";
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="index">
            <button name='loginPage' value='loginPage'>Login Page</button>
            <button name='marksDetails' value='marksDetails'>Marks Details</button>
            <button name='studentData' value='studenData'>Student Data</button>
            <button name='detailsFetch' value='detailsFetch'>Fetch Details</button>
        </div>
        <?php 
            if (isset($_POST['loginPage'])) {
                header("Location: loginpage.php");
            }
            if (isset($_POST['marksDetails'])) {
                header("Location: marks_details.php");
            }
            if (isset($_POST['studentData'])) {
                header("Location: student_data.php");
            }
            if (isset($_POST['detailsFetch'])) {
                header("Location: details_fetch.php");
            }
        ?>
    </form>
</body>
</html>
