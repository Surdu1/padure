<?php

require 'conectare.php';
$intrebare = $_POST["intrebare"];
$sql = "INSERT INTO intrebari(intrebari) VALUES('$intrebare')";
$result = mysqli_query($conectare , $sql);
header("Location: Home.php");

?>