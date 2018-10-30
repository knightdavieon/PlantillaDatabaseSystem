<?php 
include("../accessdb.php");

if(!empty($_POST[])){
	//personal information
	$surname = $_POST['surname'];
	$firstname = $_POST['firstname'];

	if(!empty($_POST['extent'])){
		$extention = $_POST['extent'];
	}else{
		$extention = " ";
	}

	$middlename = $_POST['middlename'];
	$dateofbirth = $_POST['dateofbirth'];
	$placeofbirth = $_POST['birthplace'];
	$sex = $_POST['sex'];
	$civilstatus = $_POST['civilstatus'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];
	$blood = $_POST['blood'];

	//government id's

	$gsis = $_POST['gsis'];
	$pagibig = $_POST['pagibig'];
	$philhealth = $_POST['philhealth'];
	$sss = $_POST['sss'];
	$tin = $_POST['tin'];
	$aen = $_POST['aen'];

	$citizenship = $_POST['citizenship'];

	//addresses
	$residentialadd = $_POST['residentialadd'];
	$razip = $_POST['razip'];
	$ratelno = $_POST['ratelno'];
	$permanentadd = $_POST['permanentadd'];
	$pazip = $_POST['pazip'];
	$patelno = $_POST['patelno'];

	//Family backgrounds
	$spouselast = $_POST['spouselast'];
	$spousefirst = $_POST['spousefirst'];
	if(!empty($_POST['spouseextent'])){
		$spouseextent = $_POST['spouseextent'];
	}else{
		$spouseextent = " ";
	}
	$spousemiddle = $_POST['spo'];


}
?>