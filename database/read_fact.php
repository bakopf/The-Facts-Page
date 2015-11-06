<?php
    include('connection.php');	

    $sql = "SELECT * FROM facttable ORDER BY RAND() LIMIT 1";
	$result = mysqli_query($mysqli, $sql);
    $fact = $result->fetch_assoc();
?>


