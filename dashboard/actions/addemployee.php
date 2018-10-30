<?php
include_once("../../accessdb.php");
session_start();
if (!empty($_POST)){
/////PERSONAL INFO
	$emplsurname = $_POST['surname'];
	$emplfirstname = $_POST['firstname'];
	$emplmiddlename = $_POST['middlename'];
	$emplextent = $_POST['extent'];	
	$empldateofbirth = $_POST['dateofbirth'];
	$emplbirthplace = $_POST['birthplace'];
	$emplsex = $_POST['sex'];
	$emplcs = $_POST['civilstatus'];
	$emplheight = $_POST['height'];
	$emplweight = $_POST['weight'];
	$emplblood = $_POST['blood'];
	$emplgsis = $_POST['gsis'];
	$emplpagibig = $_POST['pagibig'];
	$emplphilhealth = $_POST['philhealth'];
	$emplsss = $_POST['sss'];
	$empltin = $_POST['tin'];
	$emplaen = $_POST['aen'];
	$emplcitizenship = $_POST['citizenship'];
	$emplmobile = $_POST['mobile'];
	$emplemail = $_POST['email'];
	$emplresadd = $_POST['residentialadd'];
	$emplrazip = $_POST['razip'];
	$emplratelno = $_POST['ratelno'];
	$emplpermanentadd = $_POST['permanentadd'];
	$emplpazip = $_POST['pazip'];
	$emplpatelno =$_POST['patelno'];
///SPOUSE
	$emplspouselast = $_POST['spouselast'];
	$emplspousefirst = $_POST['spousefirst'];
	$emplspouseextent = $_POST['spouseextent'];
	$emplspousemiddle = $_POST['spousemiddle'];
	$emplspouseoccupation = $_POST['spouseoccupation'];
	$emplspouseemployer = $_POST['spouseemployer'];
	$emplspousebusinessadd = $_POST['spousebusinessadd'];
	$emplspousetelno = $_POST['spousetelno'];
///FATHER
	$emplfathersurname = $_POST['fathersurname'];
	$emplfatherfirstname = $_POST['fatherfirstname'];
	$emplfatherextent = $_POST['fatherextent'];
	$emplfathermiddlename = $_POST['fathermiddlename'];
/////MOTHER
	$emplmothersmaiden = $_POST['mothersmaiden'];
	$emplmotherssurname = $_POST['motherssurname'];
	$emplmothersfirstname = $_POST['mothersfirstname'];
	$emplmothersmiddlename = $_POST['mothersmiddlename'];
///ELEMENTARY	
	$empllevel[0] = "elementary";
	$emplschool[0] = $_POST['elementaryschool'];
	$empldegree[0] = $_POST['elementarydegree'];
	$emplattendedfrom[0] = $_POST['elemattendedfrom'];
	$emplattendedto[0] = $_POST['elemattendedto'];
	$emplunitslevelearned[0] = $_POST['elemunitslevelearned'];
	$emplyeargrad[0] = $_POST['elemyeargrad'];
	$emplscholarship[0] = $_POST['elemscholarship'];
///SECONDARY
	$empllevel[1] = "secondary";	
	$emplschool[1] = $_POST['secondaryschool'];
	$empldegree[1] = $_POST['secondarydegree'];
	$emplattendedfrom[1] = $_POST['secondattendedfrom'];
	$emplattendedto[1] = $_POST['secondattendedto'];
	$emplunitslevelearned[1] = $_POST['secondunitslevelearned'];
	$emplyeargrad[1] = $_POST['secondyeargrad'];
	$emplscholarship[1] = $_POST['secondscholarship'];
////VOCATIONAL	
	$empllevel[2] = "vocational";
	$emplschool[2] = $_POST['vocationalschool'];
	$empldegree[2] = $_POST['vocationaldegree'];
	$emplattendedfrom[2] = $_POST['vocattendedfrom'];
	$emplattendedto[2] = $_POST['vocattendedto'];
	$emplunitslevelearned[2] = $_POST['vocunitslevelearned'];
	$emplyeargrad[2] = $_POST['vocyeargrad'];
	$emplscholarship[2] = $_POST['vocscholarship'];
////COLLEGE	
	$empllevel[3] = "college";
	$emplschool[3] = $_POST['collegeschool'];
	$empldegree[3] = $_POST['collegedegree'];
	$emplattendedfrom[3] = $_POST['collegeattendedfrom'];
	$emplattendedto[3] = $_POST['collegeattendedto'];
	$emplunitslevelearned[3] = $_POST['collegeunitslevelearned'];
	$emplyeargrad[3] = $_POST['collegeyeargrad'];
	$emplscholarship[3] = $_POST['collegescholarship'];
///GRADUATESCHOOL
	$empllevel[4] = "graduateschool";
	$emplschool[4] = $_POST['graduateschool'];
	$empldegree[4] = $_POST['graduatedegree'];
	$emplattendedfrom[4] = $_POST['gradattendedfrom'];
	$emplattendedto[4] = $_POST['gradattendedto'];
	$emplunitslevelearned[4] = $_POST['gradunitslevelearned'];
	$emplyeargrad[4] = $_POST['gradyeargrad'];
	$emplscholarship[4] = $_POST['gradscholarship'];

	if($_POST['child'] == NULL || $_POST['child'] == " "){
		$numberchild = 0;
	}else{
		$numberchild = count($_POST["child"]);
	}

	if($_POST['career'] == NULL || $_POST['career'] == " "){
		$numbercareer = 0;
	}else{
		$numbercareer = count($_POST["career"]);
	}

	if($_POST['department'] == NULL || $_POST['department'] == " "){
		$numberworkexp = 0;
	}else{
		$numberworkexp = count($_POST["department"]);
	}

	if($_POST['organization_add'] == NULL || $_POST['organization_add'] == " "){
		$numberorg = 0;
	}else{
		$numberorg = count($_POST["organization_add"]);
	}

	if($_POST['titlelnd'] == NULL || $_POST['titlelnd'] == " "){
		$numbertitlelnd = 0;
	}else{
		$numbertitlelnd = count($_POST["titlelnd"]);
	}


	if($_POST['specialskills'] == NULL || $_POST['specialskills'] == " "){
		$numberother = 0;
	}else{
		$numberother = count($_POST["specialskills"]);
	}

	if($_POST['referencename'] == NULL || $_POST['referencename'] == " "){
		$numberreference = 0;
	}else{
		$numberreference = count($_POST["referencename"]);
	}

//	echo $numberchild;
//	$numberchild = count($_POST["child"]);
	
	date_default_timezone_set('Asia/Manila');
	$date = date('mdY');
	$datereceived = date('m/d/Y');
	
	function generateCode() {
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		Global $generatedId;
		Global $usercode;
		$random_string_length = 6;
		$max = strlen($characters) - 1;
		for ($i = 0; $i < $random_string_length; $i++) {
			$usercode .= $characters[mt_rand(0, $max)];
		}
	}
	generateCode();
	$upcode = $date . $usercode;
	
	
		$insertpersonal_info = $conn->prepare("INSERT INTO tblpersonal_information(ID_,Surname, First_Name, Middle_Name, Ext_Name, Date_of_Birth,Place_of_Birth,Sex,Civil_Status, Citizenship,Height,Weight,Blood_Type,GSIS,PAGIBIG,Philhealth,SSS,TIN,Agency_Employee_No, Residential_Add, RA_ZIP, RA_Tel_No, Permanent_Add, PA_ZIP, PA_Tel_No, Email_Add, Cell_No, Received_Date)
	    VALUES(:emplID, :inssurname, :insfirstname, :insmiddlename, :insextent, :insdateofbirth, :insbirthplace, :inssex, :inscivilstatus,:insciti, :insheigth, :insweight, :insblood, :insgsis, :inspagibig, :insphilhealth, :inssss, :instin, :insaen,:insreadd,:insrazip,:insratelno,:inspermanentadd,:inspazip,:inspatelno,:insmobile,:insemail, :insdate)");
		$insertpersonal_info->execute(array(
			"emplID" => $upcode,
		    "inssurname" => $emplsurname,
		    "insfirstname" => $emplfirstname,
		    "insmiddlename" => $emplmiddlename,
		    "insextent" => $emplextent,
		    "insdateofbirth" => $empldateofbirth,
		    "insbirthplace" => $emplbirthplace,
		    "inssex" => $emplsex,
		    "inscivilstatus" => $emplcs,
		    "insciti" => $emplcitizenship,
		    "insheigth" => $emplheight,
		    "insweight" => $emplweight,
		    "insblood" => $emplblood,
		    "insgsis" => $emplgsis,
		    "inspagibig" => $emplpagibig,
		    "insphilhealth" => $emplphilhealth,
		    "inssss" => $emplsss,
		    "instin" => $empltin,
		    "insaen" => $emplaen,
		    "insreadd" => $emplresadd,
		    "insrazip" => $emplrazip,
		    "insratelno" => $emplratelno,
		    "inspermanentadd" => $emplpermanentadd,
		    "inspazip" => $emplpazip,
		    "inspatelno" => $emplpatelno,
		    "insmobile" => $emplmobile,
		    "insemail" => $emplemail,
		    "insdate" => $datereceived		  

		));


		$insertfamily = $conn->prepare("INSERT INTO tblfamily_background(ID_ ,Spouse_Surname, S_First_Name, S_ext, S_Middle_Name, Occupation, EmployerBus_Name,Business_Add,Tel_No,Father_Surname, F_First_Name,F_ext,F_Middle_Name,Mother_Maiden,Mother_Surname,M_First_Name,M_Middle_Name)
	    VALUES(:emplID, :insspouselast, :insspousefirst, :insspouseextent, :insspousemiddle, :insspouseoccupation, :insspouseemployer, :insspousebusinessadd, :insspousetelno, :insfathersurname, :insfatherfirstname, :insfatherextent, :insfathermiddlename, :insmothersmaiden, :insmotherssurname, :insmothersfirstname, :insmothersmiddlename)");
		$insertfamily->execute(array(
			"emplID" => $upcode,
		    "insspouselast" => $emplspouselast,
		    "insspousefirst" => $emplspousefirst,
		    "insspouseextent" => $emplspouseextent,
		    "insspousemiddle" => $emplspousemiddle,
		    "insspouseoccupation" => $emplspouseoccupation,
		    "insspouseemployer" => $emplspouseemployer,
		    "insspousebusinessadd" => $emplspousebusinessadd,
		    "insspousetelno" => $emplspousetelno,

		    "insfathersurname" => $emplfathersurname,
		    "insfatherfirstname" => $emplfatherfirstname,
		    "insfatherextent" => $emplfatherextent,
		    "insfathermiddlename" => $emplfathermiddlename,

		    "insmothersmaiden" => $emplmothersmaiden,
		    "insmotherssurname" => $emplmotherssurname,
		    "insmothersfirstname" => $emplmothersfirstname,
		    "insmothersmiddlename" => $emplmothersmiddlename

		));


			for($i=0; $i<5; $i++){
		$inserteduc = $conn->prepare("INSERT INTO tbleducational_background(ID_ ,Level, Name_of_School, Degree_Course, Year_Graduated, Highest_Grade, From_,To_,Scholarship)
	    VALUES(:emplID, :inslevel, :insschool, :insdegree, :insyeargrad, :insunitslevelearned, :insattendedfrom, :insattendedto,  :insscholarship)");
		$inserteduc->execute(array(
			"emplID" => $upcode,
			"inslevel" => $empllevel[$i],
		    "insschool" => $emplschool[$i],
		    "insdegree" => $empldegree[$i],
		    "insyeargrad" => $emplyeargrad[$i],
		     "insunitslevelearned" => $emplunitslevelearned[$i],
		    "insattendedfrom" => $emplattendedfrom[$i],
		    "insattendedto" => $emplattendedto[$i],	   
		    "insscholarship" => $emplscholarship[$i],
		));
}
		
		
		 if($numberchild >= 1){

			for($i=0; $i<$numberchild; $i++){

				$childname = $_POST["child"][$i];
				$childbday = $_POST["birth"][$i];
				
				if(trim($_POST["child"][$i] != '')){

				$insertchild = $conn->prepare("INSERT INTO tblchild(ID_, Full_Name, Date_of_Birth)
			    VALUES(:emplID, :inschildname, :inschildbday)");
				$insertchild->execute(array(
					"emplID" => $upcode,
				    "inschildname" => $childname,
				    "inschildbday" => $childbday
				));
				}
			}
		 	//echo "Data Inserted";
			
			}


			if($numbercareer >= 1){

			for($i=0; $i<$numbercareer; $i++){

				if(trim($_POST["career"][$i] != '')){

				$emplcareer = $_POST["career"][$i];
				$emplrating = $_POST["rating"][$i];
				$empldateofexam = $_POST["dateofexamination"][$i];
				$emplplaceofexam = $_POST["placeofexamination"][$i];
				$emplnumber = $_POST["number"][$i];
				$empldaterelease = $_POST["dateofrelease"][$i];	

				$inserteligibility = $conn->prepare("INSERT INTO tbleligibility(ID_, Career, Rating, Date_of_Examination, Place_of_Examination, E_Number, Date_of_Release)
			    VALUES(:emplID, :inscareer, :insrating, :insdateofexam, :insplaceofexam, :insnumber, :insdaterelease)");
				$inserteligibility->execute(array(
					"emplID" => $upcode,
				    "inscareer" => $emplcareer,
				    "insrating" => $emplrating,
				    "insdateofexam" => $empldateofexam,
				    "insplaceofexam" => $emplplaceofexam,
				    "insnumber" => $emplnumber,
				    "insdaterelease" => $empldaterelease
				));
				}
			}
		 	//echo "Data Inserted";
			
			}

			if($numberworkexp >= 1){

			for($i=0; $i<$numberworkexp; $i++){

				if(trim($_POST["department"][$i] != '')){

				$emplworkexpinclusivefrom = $_POST["workexpinclusivefrom"][$i];
				$emplworkexpinclusiveto = $_POST["workexpinclusiveto"][$i];
				$emplpositiontitle = $_POST["positiontitle"][$i];
				$empldepartment = $_POST["department"][$i];
				$emplmonthlysalary = $_POST["monthlysalary"][$i];
				$emplsalarygrade = $_POST["salarygrade"][$i];
				$emplstatusofappointment = $_POST["statusofappointment"][$i];
				$emplgovtservice = $_POST["govtservice"][$i];		
				

				$insertworkexp = $conn->prepare("INSERT INTO tblwork_experience(ID_, From_, To_, Position_Title, Department, Monthly_Salary, Salary_Grade,Status_of_Appointment,Govt_Service)
			    VALUES(:emplID, :insworkexpinclusivefrom, :insworkexpinclusiveto, :inspositiontitle, :insdepartment, :insmonthlysalary, :inssalarygrade, :insstatusofappointment, :insgovtservice)");
				$insertworkexp->execute(array(
					"emplID" => $upcode,
				    "insworkexpinclusivefrom" => $emplworkexpinclusivefrom,
				    "insworkexpinclusiveto" => $emplworkexpinclusiveto,
				    "inspositiontitle" => $emplpositiontitle,
				    "insdepartment" => $empldepartment,
				    "insmonthlysalary" => $emplmonthlysalary,
				    "inssalarygrade" => $emplsalarygrade,
				    "insstatusofappointment" => $emplstatusofappointment,
				    "insgovtservice" => $emplgovtservice
				));
				}
			}
		 	//echo "Data Inserted";
			
			}


			if($numberorg >= 1){

			for($i=0; $i<$numberorg; $i++){

				if(trim($_POST["organization_add"][$i] != '')){

				$emplorganization_add = $_POST["organization_add"][$i];
				$emplvoluntaryfrom = $_POST["voluntaryfrom"][$i];
				$emplvoluntaryto = $_POST["voluntaryto"][$i];
				$emplnumberofhours = $_POST["numberofhours"][$i];
				$emplposition = $_POST["position"][$i];
				
				

				$insertorg = $conn->prepare("INSERT INTO tblvoluntary_work(ID_, Organization_and_Add, From_, To_, Number_of_Hours, Position)
			    VALUES(:emplID, :insorganization_add, :insvoluntaryfrom, :insvoluntaryto, :insnumberofhours, :insposition)");
				$insertorg->execute(array(
					"emplID" => $upcode,
				    "insorganization_add" => $emplorganization_add,
				    "insvoluntaryfrom" => $emplvoluntaryfrom,
				    "insvoluntaryto" => $emplvoluntaryto,
				    "insnumberofhours" => $emplnumberofhours,
				    "insposition" => $emplposition
				   
				));
				}
			}
		 	//echo "Data Inserted";
			
			}



			if($numbertitlelnd >= 1){

			for($i=0; $i<$numbertitlelnd; $i++){

				if(trim($_POST["titlelnd"][$i] != '')){

				$empltitlelnd = $_POST["titlelnd"][$i];
				$empllndfrom = $_POST["lndfrom"][$i];
				$empllndto = $_POST["lndto"][$i];
				$empllndnumberofhours = $_POST["lndnumberofhours"][$i];
				$empltypeoflnd = $_POST["typeoflnd"][$i];
				$emplconductedby = $_POST["conductedby"][$i];
				
				

				$insertlnd = $conn->prepare("INSERT INTO tbltrainings(ID_, Title, From_, To_, Number_of_Hours, Type_of_LD,Conducted)
			    VALUES(:emplID, :institlelnd, :inslndfrom, :inslndto, :inslndnumberofhours, :instypeoflnd, :insconductedby)");
				$insertlnd->execute(array(
					"emplID" => $upcode,
				    "institlelnd" => $empltitlelnd,
				    "inslndfrom" => $empllndfrom,
				    "inslndto" => $empllndto,
				    "inslndnumberofhours" => $empllndnumberofhours,
				    "instypeoflnd" => $empltypeoflnd,
				    "insconductedby" => $emplconductedby
				   
				));
				}
			}
		 	//echo "Data Inserted";
			
			}



				if($numberother >= 1){

			for($i=0; $i<$numberother; $i++){

				if(trim($_POST["specialskills"][$i] != '')){

				$emplskills = $_POST["specialskills"][$i];
				$emplnonacademic = $_POST["nonacademicdistinction"][$i];
				$emplmembership = $_POST["membership"][$i];
				
				

				$insertother = $conn->prepare("INSERT INTO tblother_information(ID_, Special_Skills, Non_Academic_Distinction, Membership)
			    VALUES(:emplID, :insskills, :insnonacademic, :insmembership)");
				$insertother->execute(array(
					"emplID" => $upcode,
				    "insskills" => $emplskills,
				    "insnonacademic" => $emplnonacademic,
				    "insmembership" => $emplmembership				    
				   
				));
				}
			}
		 	//echo "Data Inserted";
			
			}


				if($numberreference >= 1){

			for($i=0; $i<$numberreference; $i++){

				if(trim($_POST["referencename"][$i] != '')){

				$emplreferencename = $_POST["referencename"][$i];
				$emplreferenceaddress = $_POST["referenceaddress"][$i];
				$emplreferencetelno = $_POST["referencetelno"][$i];
				
				

				$insertreference = $conn->prepare("INSERT INTO tblreferences(ID_, Name, Address, Tel_No)
			    VALUES(:emplID, :insreferencename, :insreferenceaddress, :insreferencetelno)");
				$insertreference->execute(array(
					"emplID" => $upcode,
				    "insreferencename" => $emplreferencename,
				    "insreferenceaddress" => $emplreferenceaddress,
				    "insreferencetelno" => $emplreferencetelno				    
				   
				));
				}
			}
		 	//echo "Data Inserted";
			
			}





			
					$_SESSION['masterlistNotifications'] = "<div class='alert alert-primary' role='alert'><strong>Success!</strong> New Record Created!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button></div>";

		echo "<script language='JavaScript'>
						window.location.href='../masterlist';
							</SCRIPT>";	
		}	

?>