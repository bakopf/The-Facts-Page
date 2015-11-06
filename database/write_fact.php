<?php
    include('connection.php');	
	
  	$info = 'ja';

    $fact = $_POST['fact'];

    if(!preg_match("/[A-Za-z]{2,20}/", $fact)){
		$info = 'nein';
	}

	$sql = "INSERT INTO facttable (fact) VALUES ('$fact');";	

		if($info != "nein"){
			if ($mysqli->query($sql) === TRUE) {
			  
			} else {
				$info = "fehler";
			}
		} else{
			echo($info);
			exit();
		}
	
		$mysqli->close();
		echo($info);
		exit();
	
?>