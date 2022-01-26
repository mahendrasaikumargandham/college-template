<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/details_fetch.css">
    <title>Student Data</title>
</head>
<body>
<?php

    if(isset($_POST['formSubmit']) )
    {
        $scheme = $_POST['scheme'];
        $branch = $_POST['branch'];
        $acedemicYear = $_POST['acedemicYear'];
        $semester = $_POST['semester'];
        $errorMessage = ""; 
    }

?>
    <div class="container">
        <div class="box">
            <div class="option_one">
                <img src="images/vishnu_logo.bmp" alt="" />
            </div>
            <div class="options">
                <select class="slt" name="scheme">
                    <option>Scheme</option>
                    <option>c-16</option>
                    <option>c-20</option>
                </select>
            </div>
            <div class="options">
                <select class="slt" name="branch">
                    <option>Branch</option>
                    <option>CME</option>
                    <option>ECE</option>
                    <option>EEE</option>
                    <option>AEI</option>
                </select>
            </div>
            <div class="options">
                <select class="slt" name="acedemicYear">
                    <option>Accedemic Year</option>
                    <option>2021</option>
                    <option>2022</option>
                </select>
            </div>
            <div class="options">
                <select class="slt" name="semester">
                    <option>Semester</option>
                    <option>1</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select>
            </div>
            <div class="options">
                <button name="formSubmit" value="formSubmit">Submit</button>
            </div>

        </div>
    </div>
</body>
</html>
