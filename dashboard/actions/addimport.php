<?php
include("../sessionhandler.php");
include_once("../../accessdb.php");
include_once("../scriptvalidation.php");
if(isset($_POST["Import"])){
	 
	 
	$file = "your-file.xls";
	$handle = fopen($file, "r");
	$c = 0;
	while(($filesop = fgetcsv($handle, 1000, ",")) !== false){
		$name = $filesop[0];
		$email = $filesop[1];

		$sql = mysql_query("INSERT INTO xls (name, email) VALUES ('$name','$email')");
	}

	if($sql){
		echo "You database has imported successfully";
	}else{
		echo "Sorry! There is some problem.";
	}
}	 
?>		