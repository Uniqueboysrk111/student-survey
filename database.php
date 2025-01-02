<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="database.css">
</head>

<body>

    <div class="container">
        <div class="box">
<caption> STUDENT ADMISSON DATA </caption>
            <table border="1" class="table" style="border-collapse: collapse;" >
                <thead>
                    <tr class="data-line">
                        <th>SL.</th>
                        <th>Name</th>
                        <th>Institute</th>
                        <th>Qualification</th>
                        <th>Branch</th>
                        <th>mail id</th>
                        <th>Password</th>
                        <th>Status</th>
                    </tr>
                </thead>


                <?php

                include 'connection.php';

                $selectData = "select * from admission";
                $Result = mysqli_query($Connection, $selectData);

                $i = 0;
                while ($fetching = mysqli_fetch_array($Result)) {
                    $i++;
                   

                 

                ?>

                    <tbody>
                        <center>
                            <tr class="res-line">
                              <center> <td><?php echo  $i . "<br>" ?></td></center> 
                                <td><?php echo  $fetching['name'] . "<br>" ?></td>
                                <td><?php echo  $fetching['number'] . "<br>" ?></td>
                                <td><?php echo  $fetching['year'] . "<br>" ?></td>
                                <td><?php echo $fetching['branch'] . "<br>" ?></td>
                                <td><?php echo  $fetching['id'] . "<br>" ?></td>
                                <td><?php echo  $fetching['Password'] . "<br>" ?></td>
                                <td>Complete</td>




                            </tr>
                        </center>

                    </tbody>
                <?php
                }


                ?>





            </table>

        </div>

    </div>



</body>

</html>