<?php

$username ="root";
$password ="";
$server = 'localhost';
$database = "student";

 $Connection= mysqli_connect($server,$username,$password,$database);


if($Connection){

?>
<script>
    alert("connection sucess")
</script>
<?php
}

else{
    echo "Connection Error ! TRY again ";
}
?>
