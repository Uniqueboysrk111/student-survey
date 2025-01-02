<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin panel</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="respo.css">
</head>

<body>
    <div class="container">

        <div class="navbar">
            <h3> <span class="tag1">ADMIN</span> PANEL 2025</h3>
            <p class="dynamic">fill this form and join the survay. your data is safe in this platform .its just a trail versoin of admin panel devloped by Siba prasad gouda</p>
            <button class="check"  onclick="window.location.href='database.php'"> Check Form </button>

        </div>
        <div class="contents">
            <center>
                <h4 style="color: white;">SURVEY OF ENGINEERING STUDENTS </h4>
            </center>

            <center>
                <form action="" method="POST">
                    <input required placeholder="Name of the student" type="text" name="Username" id="Username" class="inputs">
                    <input required placeholder=" Institute Name " type="text" name="Number" id="Number" class="inputs">
                    <input required placeholder="Qualification (ie: diploma btech Mtech)" type="text" name="year" id="year" class="inputs">
                    <input required placeholder="Branch" type="text" name="branch" id="branch" class="inputs">
                    <input required placeholder="e-mail" type="email" name="student_id" id="student_id" class="inputs">
                    <input required placeholder="Create a Password" type="password" name="password" id="password" class="inputs">
            </center>
            <center><input type="submit" value="REGISTER" class="submit" name="reg"></center>
            </form>


        </div>


    </div>


    <center>
        <div class="asence" id="data" onclick="cancel()"></div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
<?php

include 'connection.php';

if (isset($_POST['reg'])) {
    $Student_name = $_POST['Username'];
    $Mobile_number = $_POST['Number'];
    $Admission_year = $_POST['year'];
    $Branch = $_POST['branch'];
    $Student_Id = $_POST['student_id'];
    $password = $_POST['password'];


    $insertData = "insert into admission(name,number,year,branch,id,password) values('$Student_name','$Mobile_number','$Admission_year','$Branch','$Student_Id','$password')";

    $final = mysqli_query($Connection, $insertData);

    if ($final) {

?>
        <script>
            let data = document.getElementById('data');
            data.textContent = "Data updated... sucessfully";
            data.style.opacity = "1";


            function cancel() {
                data.style.opacity = "0"
            }
        </script>
    <?php
    } else {

    ?>
        <script>
            let data = document.getElementById('data');
            data.textContent = "Data Update Faild ! Retry";
            data.style.opacity = "1";
            data.style.backgroundColor = "red";
            data.style.color = "white";
        </script>


<?php
    }
}


?>