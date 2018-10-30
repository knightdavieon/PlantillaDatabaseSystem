<div class="modal " tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="viewrecord<?php echo $i;?>">
    <div class="modal-dialog-centered" style="width: 94%;margin-left: 3%; margin-right: 3%;" center role="document">
        <div class="modal-content">
            <form action="#" method="post">
                <div class="modal-header" style="padding-top: 0; padding-bottom: 0;">
                    <h4>View Record</h4>
                    <a><button type="button" class="btn btn-primary m-b-10">Print</button></a>
                </div>
                <div class="modal-body" >

                    <div class="container" style="text-align: right; padding-bottom: .5%;">
                        <font >Date Recieved: <?php echo $rowmasterlist['Received_Date'];?></font>
                    </div>

                            <div class="form-body">
                                <!--Start Personal Information -->
                                <h4 class="card-title m-t-15">Personal Information</h4>
                                <hr />

                                <div class="row fieldspace">
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" name="surname" class="form-control" placeholder="Surname" onkeypress="return restrictCharacters(this, event, alphaOnly);" required>
                                    </div>
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" name="firstname" class="form-control" placeholder="First Name" onkeypress="return restrictCharacters(this, event, alphaOnly);" required>
                                    </div>
                                    <div class="col-md-1" style="padding-left: 0; padding-right: 0;">
                                        <input type="text" name="extent" class="form-control" style=" background-color: #ECF4F2;" placeholder="ex. Jr." onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" name="middlename" class="form-control" placeholder="Middle Name" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                </div>

                                <div class="row fieldspace">
                                    <div class="col-md-2 rem-side-pad">
                                        <input class="form-control" type="text" id="datetimepicker2" name="dateofbirth" placeholder="Date of Birth" onkeypress="return restrictCharacters(this, event, dateOnly);" required/>
                                        
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" name="birthplace" class="form-control" placeholder="Place of Birth" onkeypress="return restrictCharacters(this, event, alphanumericunderdot);" required>
                                    </div>
                                    <div class="col-md-2 rem-side-pad" style="padding-top: 10; padding-bottom: 10; padding-right: 10; padding-left: 10;">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="sex" value="male" checked>Male
                                            </label>
                                        </div>

                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="sex" value="female">Female
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <select name="civilstatus" class="form-control">
                                            <option value=" ">Civil Status</option>
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <option value="widowed">Widowed</option>
                                            <option value="separated">Separated</option>
                                            <option value="other">Other/s</option>
                                        </select>
                                    </div>
                                    <div class="col-md rem-side-pad">
                                        <input type="text" class="form-control" name="height" placeholder="Height(m)" onkeypress="return restrictCharacters(this, event, heightOnly);" required>
                                    </div>
                                    <div class="col-md rem-side-pad">
                                        <input type="text" class="form-control" name="weight" placeholder="Weight(kg)" onkeypress="return restrictCharacters(this, event, integerOnly);" required>
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="blood" placeholder="Blood Type">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="gsis" placeholder="GSIS ID NO">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="pagibig" placeholder="PAG-IBIG NO">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="philhealth" placeholder="PHILHEALTH NO">
                                    </div>
                                    
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" class="form-control" name="sss" placeholder="SSS">
                                    </div>
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" class="form-control" name="tin" placeholder="TIN">
                                    </div>
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" class="form-control" name="aen" placeholder="AGENCY EMPLOYEE NO">
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-3 rem-side-pad">
                                        <select name="citizenship" class="form-control" required>
                                            <option value=" ">Citizenship</option>
                                            <option value="Filipino">Filipino</option>
                                            <option value="dual by birth">Dual - By Birth</option>
                                            <option value="dual by naturalization">Dual - By Naturalization</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" class="form-control" name="mobile" placeholder="MOBILE">
                                    </div>
                                    <div class="col-md-5 rem-side-pad">
                                        <input type="text" class="form-control" name="email" placeholder="EMAIL">
                                    </div>

                                </div>
                                <hr />
                                <div class="row fieldspace">
                                    <div class="col-md rem-side-pad">
                                        <input type="text" class="form-control" name="residentialadd" placeholder="Residential Lot No. / Street / Subdivision / Barangay / Municipality / Province" onkeypress="return restrictCharacters(this, event, alphanumericunderdot);" >
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" class="form-control" name="razip" placeholder="Residential Zip Code" onkeypress="return restrictCharacters(this, event, digitsOnly);" >
                                    </div>
                                    <div class="col-md-8 rem-side-pad">
                                        <input type="text" class="form-control" name="ratelno" placeholder="Residential Telephone Number" onkeypress="return restrictCharacters(this, event, phoneOnly);" >
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md rem-side-pad">
                                        <input type="text" class="form-control" name="permanentadd" placeholder="Permanent Lot No. / Street / Subdivision / Barangay / Municipality / Province" onkeypress="return restrictCharacters(this, event, alphanumericunderdot);" required>
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" class="form-control" name="pazip" placeholder="Permanent Zip Code" onkeypress="return restrictCharacters(this, event, digitsOnly);" required>
                                    </div>
                                    <div class="col-md-8 rem-side-pad">
                                        <input type="text" class="form-control" name="patelno" placeholder="Permanent Telephone Number" onkeypress="return restrictCharacters(this, event, phoneOnly);" required>
                                    </div>
                                </div>

                                <h4 class="card-title m-t-20">Family Background</h4>
                                <hr />

                                <div class="row fieldspace">
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" class="form-control" name="spouselast" placeholder="Spouse's Surname" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" class="form-control" name="spousefirst" placeholder="Spouse's First Name" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                    <div class="col-md-1" style="padding-left: 0; padding-right: 0;">
                                        <input type="text" class="form-control" name="spouseextent" style=" background-color: #ECF4F2;" placeholder="Ex Jr." onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="spousemiddle" placeholder="Spouse's Middle Name" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>

                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="spouseoccupation" placeholder="Spouse's Occupation" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="spouseemployer" placeholder="Spouse's Employer/Business Name" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="spousebusinessadd" placeholder="Spouse's Business Address" onkeypress="return restrictCharacters(this, event, alphanumericunderdot);">
                                    </div>
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="spousetelno" placeholder="Spouse's Telephone Number" onkeypress="return restrictCharacters(this, event, phoneOnly);">
                                    </div>
                                </div>
                                <h6 class=" m-t-15">Child</h6>
                                <input type="hidden" name="child[]" value=" ">
                                <input type="hidden" name="birth[]" value=" ">
                                <div class="appendchild">

                                </div>
                                <input type="button" class="btn btn-default fieldspace" id="Addchild" Value="Add Child" style=" height: 5%;padding: 0;">
                                <!--<input type="button" class="btn btn-default fieldspace" id="Clear" Value="Clear" style="width: 10%; height: 5%;padding: 0;">-->
                                <div class=" m-t-10">
                                </div>

                                <div class="row fieldspace">
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" class="form-control" name="fathersurname" placeholder="Father's Surname" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" class="form-control" name="fatherfirstname" placeholder="Father's First Name" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                    <div class="col-md-1" style="padding-left: 0; padding-right: 0;">
                                        <input type="text" class="form-control" name="fatherextent" style=" background-color: #ECF4F2;" placeholder="Ex Jr." onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="fathermiddlename" placeholder="Father's Middle Name" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="mothersmaiden" placeholder="Mothers's Maiden Name" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="motherssurname" placeholder="Mothers's Surname" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="mothersfirstname" placeholder="Mother's Firstname" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="mothersmiddlename" placeholder="Mother's Middlename" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                </div>

                                <h4 class="card-title m-t-20">Educational Background</h4>
                                <hr />

                                <h6 class=" m-t-15">Elementary</h6>
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="elementaryschool" placeholder="Name of School (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="elementarydegree" placeholder="Basic Education / Degree / Course (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="elemattendedfrom" id="datetimepicker3" placeholder="Attended From" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="elemattendedto" id="datetimepicker4" placeholder="Attended To" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="elemunitslevelearned" placeholder="Highest Level / Units Earned" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="elemyeargrad" placeholder="Year Graduated" id="yearpicker1" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="elemscholarship" placeholder="Scholarship / Academic Honors Received" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                </div>

                                <h6 class=" m-t-15">Secondary</h6>
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="secondaryschool" placeholder="Name of School (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="secondarydegree" placeholder="Basic Education / Degree / Course (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="secondattendedfrom" id="datetimepicker5" placeholder="Attended From" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="secondattendedto" id="datetimepicker6" placeholder="Attended To" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="secondunitslevelearned" placeholder="Highest Level / Units Earned" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="secondyeargrad" placeholder="Year Graduated" onkeypress="return restrictCharacters(this, event, dateOnly);" id="yearpicker2">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="secondscholarship" placeholder="Scholarship / Academic Honors Received">
                                    </div>
                                </div>

                                <h6 class=" m-t-15">Vocational / Trade Course</h6>
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="vocationalschool" placeholder="Name of School (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="vocationaldegree" placeholder="Basic Education / Degree / Course (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="vocattendedfrom" id="datetimepicker7" placeholder="Attended From" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="vocattendedto" id="datetimepicker8" placeholder="Attended To" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="vocunitslevelearned" placeholder="Highest Level / Units Earned" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="vocyeargrad" placeholder="Year Graduated" onkeypress="return restrictCharacters(this, event, dateOnly);" id="yearpicker3">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="vocscholarship" placeholder="Scholarship / Academic Honors Received" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                </div>

                                <h6 class=" m-t-15">College</h6>
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="collegeschool" placeholder="Name of School (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="collegedegree" placeholder="Basic Education / Degree / Course (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="collegeattendedfrom" id="datetimepicker9" placeholder="Attended From" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="collegeattendedto" id="datetimepicker10" placeholder="Attended To" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="collegeunitslevelearned" placeholder="Highest Level / Units Earned" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="collegeyeargrad" placeholder="Year Graduated" id="yearpicker4" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="collegescholarship" placeholder="Scholarship / Academic Honors Received" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                </div>

                                <h6 class=" m-t-15">Graduate Studies</h6>
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="graduateschool" placeholder="Name of School (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="graduatedegree" placeholder="Basic Education / Degree / Course (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="gradattendedfrom" id="datetimepicker11" placeholder="Attended From" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="gradattendedto" id="datetimepicker12" placeholder="Attended To" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="gradunitslevelearned" placeholder="Highest Level / Units Earned" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="gradyeargrad" placeholder="Year Graduated" id="yearpicker5" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="gradscholarship" placeholder="Scholarship / Academic Honors Received" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                </div>

                                <h4 class="card-title m-t-20">Civil Service Eligibility</h4>
                                <hr />
                                 <input type="hidden" name="career[]" value="">
                                  <input type="hidden" name="rating[]" value="">
                                   <input type="hidden" name="dateofexamination[]" value="">
                                   <input type="hidden" name="placeofexamination[]" value="">
                                   <input type="hidden" name="number[]" value="">
                                   <input type="hidden" name="dateofrelease[]" value="">

                                <div class="appendeligi">
                                
                                </div>
                                <input type="button" class="btn btn-default fieldspace" id="Addeligi" Value="Add Eligibility" style="height: 5%;padding: 0;">

                                <h4 class="card-title m-t-20">Work Experience</h4>
                                <hr />
                                 <input type="hidden" name="workexpinclusivefrom[]" value="">
                                 <input type="hidden" name="workexpinclusiveto[]" value="">
                                 <input type="hidden" name="positiontitle[]" value="">
                                 <input type="hidden" name="department[]" value="">
                                 <input type="hidden" name="monthlysalary[]" value="">
                                 <input type="hidden" name="salarygrade[]" value="">
                                 <input type="hidden" name="statusofappointment[]" value="">
                                 <input type="hidden" name="govtservice[]" value="">
                                <div class="appendworkexp">

                                </div>
                                <input type="button" class="btn btn-default fieldspace" id="Addworkexp" Value="Add Work Experience" style="height: 5%;padding: 0;">

                                <h4 class="card-title m-t-20">Voluntary Work or Involvement in Civic / Non - Government / People / Voluntary Organizations</h4>
                                <hr />

                                 <input type="hidden" name="organization_add[]" value="">
                                 <input type="hidden" name="voluntaryfrom[]" value="">
                                 <input type="hidden" name="voluntaryto[]" value="">
                                 <input type="hidden" name="numberofhours[]" value="">
                                 <input type="hidden" name="position[]" value="">
                                <div class="appendvoluntarywork">
                                </div>
                                <input type="button" class="btn btn-default fieldspace" id="Addvoluntarybtn" Value="Add Voluntary Work" style="height: 5%;padding: 0;" >

                                <h4 class="card-title m-t-20">Learning & Development (L&D) Interventions/Traning Programs Attended</h4>
                                <hr />

                                 <input type="hidden" name="titlelnd[]" value="">
                                 <input type="hidden" name="lndfrom[]" value="">
                                 <input type="hidden" name="lndto[]" value="">
                                 <input type="hidden" name="lndnumberofhours[]" value="">
                                 <input type="hidden" name="typeoflnd[]" value="">
                                 <input type="hidden" name="conductedby[]" value="">

                                <div class="appendlnd">

                                </div>
                                <input type="button" class="btn btn-default fieldspace" id="Addlnd" Value="Add L&D" style="height: 5%;padding: 0;" >

                                <h4 class="card-title m-t-20">Other Information</h4>
                                <hr />
                                 <input type="hidden" name="specialskills[]" value="">
                                 <input type="hidden" name="nonacademicdistinction[]" value="">
                                 <input type="hidden" name="membership[]" value="">
                                
                                <div class="appendother">

                                </div>
                                <input type="button" class="btn btn-default fieldspace" id="Addother" Value="Add Information" style="height: 5%;padding: 0;" >

                                <hr />
                                <div class="row fieldspace">
                                    <div class="col-md-6">
                                        <font>
                                        Are you related by consanguinity or affinity to the appointing or recommending authority, or to the chief of bureau or office or to the person who has immediate supervision over you in the Office, Bureau or Department where you will be apppointed,
                                        </font>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <font>a. within the third degree?</font>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" class="bs-checkbox"style="border-color: rgb(41, 41, 41);color:#424141;" id="36A<?php echo $i; ?>" name="36A" value="checked"> Yes</label>
                                                <font size="2">(unchecked if no)</font>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <font>b. within the fourth degree (for Local Government Unit - Career Employees)?</font>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" class="bs-checkbox"style="border-color: rgb(41, 41, 41);color:#424141;" id="36B<?php echo $i; ?>" name="36B" value="checked"> Yes</label>
                                                <font size="2">(unchecked if no)</font>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <input type="text" class="form-control" name=" " placeholder="If yes, give details">
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <font>
                                        a. Have you ever been found guilty of any administrative offense?
                                    </font>
                                    </div>
                                    <div class="col-md-6">
                                        <label><input type="checkbox" class="bs-checkbox"style="border-color: rgb(41, 41, 41);color:#424141;" id="36B<?php echo $i; ?>" name="36B" value="checked"> Yes</label>
                                        <font size="2">(unchecked if no)</font>
                                        <div class="row">
                                            <input type="text" class="form-control" name=" " placeholder="If yes, give details">
                                        </div>
                                    </div>

                                </div>

                                <hr />
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <font>
                                        b. Have you been criminally charged before any court?
                                    </font>
                                    </div>
                                    <div class="col-md-6">
                                        <label><input type="checkbox" class="bs-checkbox"style="border-color: rgb(41, 41, 41);color:#424141;" id="chckbox<?php echo $i; ?>" name="chckbox" value="checked"> Yes</label>
                                        <font size="2">(unchecked if no)</font>
                                        <div class="row">
                                            <div class="col-md-6 rem-side-pad">
                                                <input type="text" class="form-control" name=" " placeholder="Date Filed">
                                            </div>
                                            <div class="col-md-6 rem-side-pad">
                                                <input type="text" class="form-control" name=" " placeholder="Status of Case/s">
                                            </div>
                                        </div>
                                     </div>
                                </div>
                                
                                <hr />
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <font>
                                        Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?
                                    </font>
                                    </div>
                                    <div class="col-md-6">
                                        <label><input type="checkbox" class="bs-checkbox"style="border-color: rgb(41, 41, 41);color:#424141;" id="chckbox<?php echo $i; ?>" name="chckbox" value="checked"> Yes</label>
                                        <font size="2">(unchecked if no)</font>
                                        <div class="row">
                                            <input type="text" class="form-control" name=" " placeholder="If yes, give details">
                                        </div>
                                     </div>
                                </div>

                                <hr />
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <font>
                                        Have you ever been separated from the service in any of the following modes: resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or phased out (abolition) in the public or private sector?
                                    </font>
                                    </div>
                                    <div class="col-md-6">
                                        <label><input type="checkbox" class="bs-checkbox"style="border-color: rgb(41, 41, 41);color:#424141;" id="chckbox<?php echo $i; ?>" name="chckbox" value="checked"> Yes</label>
                                        <font size="2">(unchecked if no)</font>
                                        <div class="row">
                                            <input type="text" class="form-control" name=" " placeholder="If yes, give details">
                                        </div>
                                     </div>
                                </div>

                                <hr />
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <font>
                                        a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?
                                    </font>
                                    </div>
                                    <div class="col-md-6">
                                        <label><input type="checkbox" class="bs-checkbox"style="border-color: rgb(41, 41, 41);color:#424141;" id="chckbox<?php echo $i; ?>" name="chckbox" value="checked"> Yes</label>
                                        <font size="2">(unchecked if no)</font>
                                        <div class="row">
                                            <input type="text" class="form-control" name=" " placeholder="If yes, give details">
                                        </div>
                                     </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <font>
                                        b. Have you resigned from the government service during the three (3)-month period before the last election to promote/actively campaign for a national or local candidate?
                                    </font>
                                    </div>
                                    <div class="col-md-6">
                                        <label><input type="checkbox" class="bs-checkbox"style="border-color: rgb(41, 41, 41);color:#424141;" id="chckbox<?php echo $i; ?>" name="chckbox" value="checked"> Yes</label>
                                        <font size="2">(unchecked if no)</font>
                                        <div class="row">
                                            <input type="text" class="form-control" name=" " placeholder="If yes, give details">
                                        </div>
                                     </div>
                                </div>

                                <hr />
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <font>
                                        Have you acquired the status of an immigrant or permanent resident of another country?
                                    </font>
                                    </div>
                                    <div class="col-md-6">
                                        <label><input type="checkbox" class="bs-checkbox"style="border-color: rgb(41, 41, 41);color:#424141;" id="chckbox<?php echo $i; ?>" name="chckbox" value="checked"> Yes</label>
                                        <font size="2">(unchecked if no)</font>
                                        <div class="row">
                                            <input type="text" class="form-control" name=" " placeholder="If yes, give details(country)">
                                        </div>
                                     </div>
                                </div>

                                <hr />
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <font>
                                        Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items:

                                    </font>
                                    </div>
                                    <div class="col-md-6">

                                     </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <font>
                                        a. Are you a member of any indigenous group?
                                    </font>
                                    </div>
                                    <div class="col-md-6">
                                        <label><input type="checkbox" class="bs-checkbox"style="border-color: rgb(41, 41, 41);color:#424141;" id="chckbox<?php echo $i; ?>" name="chckbox" value="checked"> Yes</label>
                                        <font size="2">(unchecked if no)</font>
                                        <div class="row">
                                            <input type="text" class="form-control" name=" " placeholder="If yes, please specify)">
                                        </div>
                                     </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <font>
                                        b. Are you a person with disability?
                                    </font>
                                    </div>
                                    <div class="col-md-6">
                                        <label><input type="checkbox" class="bs-checkbox"style="border-color: rgb(41, 41, 41);color:#424141;" id="chckbox<?php echo $i; ?>" name="chckbox" value="checked"> Yes</label>
                                        <font size="2">(unchecked if no)</font>
                                        <div class="row">
                                            <input type="text" class="form-control" name=" " placeholder="If yes, please specify)">
                                        </div>
                                     </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <font>
                                        c. Are you a solo parent?
                                    </font>
                                    </div>
                                    <div class="col-md-6">
                                        <label><input type="checkbox" class="bs-checkbox"style="border-color: rgb(41, 41, 41);color:#424141;" id="chckbox<?php echo $i; ?>" name="chckbox" value="checked"> Yes</label>
                                        <font size="2">(unchecked if no)</font>
                                        <div class="row">
                                            <input type="text" class="form-control" name=" " placeholder="If yes, please specify)">
                                        </div>
                                     </div>
                                </div>

                                <h4 class="card-title m-t-20">Character References</h4>
                                <hr />

                                <input type="hidden" name="referencename[]" value="">
                                <input type="hidden" name="referenceaddress[]" value="">
                                <input type="hidden" name="referencetelno[]" value="">
                                <div class="appendreference">

                                </div>
                                <input type="button" class="btn btn-default fieldspace" id="Addreference" Value="Add Reference" style="height: 5%;padding: 0;" >

                                <!--End Personal Information-->
                            </div>
                            <hr />
                            <div class="container">
                            <div class="container text-right">
                                <button class="btn color-purple" type="submit" > ADD</button>
                            </div>
                        </div>

                        </form>
        </div>
    </div>
</div>
<script>
    $('#datetimepicker2').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker3').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker4').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker5').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker6').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker7').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker8').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker9').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker10').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker11').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker12').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });

    $('#yearpicker1').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'Y',
        formatDate:'Y'

    });
    $('#yearpicker2').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'Y',
        formatDate:'Y'

    });
    $('#yearpicker3').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'Y',
        formatDate:'Y'

    });
    $('#yearpicker4').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'Y',
        formatDate:'Y'

    });
    $('#yearpicker5').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'Y',
        formatDate:'Y'

    });

   
    //append child
    //names = child birth
    var childcount = 1;
    $('#Addchild').click(function(){
       $(".appendchild").append("<div class='row fieldspace appended"+childcount+"'><div class='col-md-8 rem-side-pad'><input type='text' class='form-control' name='child[]' placeholder='Child Full Name ' onkeypress='return restrictCharacters(this, event, alphaOnly);'></div><div class='col-md-3 rem-side-pad'><input type='text' class='form-control' name='birth[]' placeholder='Date of Birth (dd/mm/yyyy)'></div><div class='col-md-1 remsidepad'><input type='button' class='btn btn-danger btn-remove-child' name='remove' id='"+childcount+"' value='X'></div></div>");
       childcount++;
    });
    $(document).on('click', '.btn-remove-child',function(){
        var button_id = $(this).attr('id');
        $(".appended"+button_id+"").remove();
    });
    $('#Clear').click(function(){
        
       $(".appended").remove();
       childcount = 1;
    });
    //end append child

    //append eligibility
    //names = career rating dateofexamination placeofexamination number dateofrelease
    var eligicount = 1;
    $('#Addeligi').click(function(){
       $(".appendeligi").append('<div class="appendedeligii'+eligicount+'"><div class="row fieldspace"><div class="col-md-10 rem-side-pad"><input type="text" class="form-control" name="career[]" placeholder="Career Service / RA 1080 (Board/Bar) Under Special Laws / CSE / CSEE Barangay Eligibility / Drivers License" onkeypress="return restrictCharacters(this, event, alphanumeric);"></div><div class="col-md-2 rem-side-pad"><input type="text" class="form-control" name="rating[]" placeholder="Rating" onkeypress="return restrictCharacters(this, event, integerOnly);"></div></div><div class="row fieldspace"><div class="col-md-2 rem-side-pad"><input type="text" class="form-control" name="dateofexamination[]" placeholder="Date of Examination / Conferment" onkeypress="return restrictCharacters(this, event, dateOnly);"></div><div class="col-md-5 rem-side-pad"><input type="text" class="form-control" name="placeofexamination[]" placeholder="Place of Examination / Conferment" onkeypress="return restrictCharacters(this, event, alphanumeric);"></div><div class="col-md-2 rem-side-pad"><input type="text" class="form-control" name="number[]" onkeypress="return restrictCharacters(this, event, digitsOnly);" placeholder="Number"></div><div class="col-md-2 rem-side-pad"><input type="text" class="form-control" name="dateofrelease[]" placeholder="Date of Release" onkeypress="return restrictCharacters(this, event, dateOnly);"></div><div class="col-md-1 rem-side-pad"><input type="button" class="btn btn-danger btn-remove-eligi" name="remove" id="'+eligicount+'" value="X"></div></div></div>');
       eligicount++;
    });
    $(document).on('click', '.btn-remove-eligi',function(){
        var eligi_button_id = $(this).attr('id');
        $(".appendedeligii"+eligi_button_id+"").remove();
    });
    //end append eligibility

    //append work experience
    //append names workexpinclusivefrom workexpinclusiveto positiontitle department monthlysalary salarygrade statusofappointment govtservice
    var workcount = 1;
    $('#Addworkexp').click(function(){
       $(".appendworkexp").append('<div class="appendedwork'+workcount+'"><div class="row fieldspace"><div class="col-md-2 rem-side-pad"><input type="text" class="form-control" name="workexpinclusivefrom[]" placeholder="From (mm/dd/yyyy)" onkeypress="return restrictCharacters(this, event, dateOnly);"></div><div class="col-md-2 rem-side-pad"><input type="text" class="form-control" name="workexpinclusiveto[]" placeholder="To (mm/dd/yyyy)" onkeypress="return restrictCharacters(this, event, dateOnly);"></div><div class="col-md-8 rem-side-pad"><input type="text" class="form-control" name="positiontitle[]" placeholder="Position Title (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);"></div></div><div class="row fieldspace"><div class="col-md-9 rem-side-pad"><input type="text" class="form-control" name="department[]" placeholder="Department / Agency / Office / Company" onkeypress="return restrictCharacters(this, event, alphanumeric);"></div><div class="col-md-3 rem-side-pad"><input type="text" class="form-control" name="monthlysalary[]" placeholder="Monthly Salary" onkeypress="return restrictCharacters(this, event, moneyOnly);"></div></div><div class="row fieldspace"><div class="col-md-4 rem-side-pad"><input type="text" class="form-control" name="salarygrade[]" placeholder="Salary Grade" onkeypress="return restrictCharacters(this, event, alphanumeric);"></div><div class="col-md-4 rem-side-pad"><input type="text" class="form-control" name="statusofappointment[]" placeholder="Status of Appointment" onkeypress="return restrictCharacters(this, event, alphanumeric);"></div><div class="col-md-3 rem-side-pad" style="padding-top: 10; padding-bottom: 10; padding-right: 10; padding-left: 10;"><label>Govt Service</label><div class="form-check-inline"><label class="form-check-label"><input type="radio" class="form-check-input" name="govtservice[]" value="Y" checked>Y</label></div><div class="form-check-inline"><label class="form-check-label"><input type="radio" class="form-check-input" name="govtservice[]" value="N">N</label></div></div><div class="col-md-1 rem-side-pad"><input type="button" class="btn btn-danger btn-remove-work" name="remove" id="'+workcount+'" value="X"></div></div></div>');
       workcount++;
    });
    $(document).on('click', '.btn-remove-work',function(){
        var work_button_id = $(this).attr('id');
        $(".appendedwork"+work_button_id+"").remove();
    });

    //end append eligibility

    //voluntary work
    //append names organization_add voluntaryfrom voluntaryto numberofhours position
    var volunteercount = 1;
    $('#Addvoluntarybtn').click(function(){
       $(".appendvoluntarywork").append('<div class="appendedvoluntary'+volunteercount+'"><div class="row fieldspace"><div class="col-md-8 rem-side-pad"><input type="text" class="form-control" name="organization_add[]" placeholder="Name & Address of Organizations"></div><div class="col-md-2 rem-side-pad"><input type="text" class="form-control" name="voluntaryfrom[]" placeholder="From (dd/mm/yyyy)"></div><div class="col-md-2 rem-side-pad"><input type="text" class="form-control" name="voluntaryto[]" placeholder="To (dd/mm/yyyy)"></div></div><div class="row fieldspace"><div class="col-md-2 rem-side-pad"><input type="text" class="form-control" name="numberofhours[]" placeholder="Number of Hours"></div><div class="col-md-9 rem-side-pad"><input type="text" class="form-control" name="position[]" placeholder="Position / Nature of Work"></div><div class="col-md-1 rem-side-pad"><input type="button" class="btn btn-danger btn-remove-volunteer" name="remove" id="'+volunteercount+'" value="X"></div></div></div>');
       volunteercount++;
    });
    $(document).on('click', '.btn-remove-volunteer',function(){
        var volunteer_button_id = $(this).attr('id');
        $(".appendedvoluntary"+volunteer_button_id+"").remove();
    });
    //Learning and development training programs
    // append names titlelnd lndfrom lndto lndnumberofhours typeoflnd conductedby
    var lndcount = 1;
    $('#Addlnd').click(function(){
       $(".appendlnd").append('<div class="appendedlnd'+lndcount+'"><div class="row fieldspace"><div class="col-md-8 rem-side-pad"><input type="text" class="form-control" name="titlelnd[]" placeholder="Learning and Development (L&D) Interventions/Traning Programs"></div><div class="col-md-2 rem-side-pad"><input type="text" class="form-control" name="lndfrom[]" placeholder="From (dd/mm/yyyy)"></div><div class="col-md-2 rem-side-pad"><input type="text" class="form-control" name="lndto[]" placeholder="To (dd/mm/yyyy)"></div></div><div class="row fieldspace"><div class="col-md-2 rem-side-pad"><input type="text" class="form-control" name="lndnumberofhours[]" placeholder="Number of Hours"></div><div class="col-md-5 rem-side-pad"><input type="text" class="form-control" name="typeoflnd[]" placeholder="Type of LD ( Managerial/Supervisory/Technical/etc)"></div><div class="col-md-4 rem-side-pad"><input type="text" class="form-control" name="conductedby[]" placeholder="Conducted/Sponsored by"></div><div class="col-md rem-side-pad"><input type="button" class="btn btn-danger btn-remove-lnd" name="remove" id="'+lndcount+'" value="X"></div></div></div>');
       lndcount++;
    });
    $(document).on('click', '.btn-remove-lnd',function(){
        var lnd_button_id = $(this).attr('id');
        $(".appendedlnd"+lnd_button_id+"").remove();
    });

    //other information
    //append names specialskills nonacademicdistinction membership

    var othercount = 1;
    $('#Addother').click(function(){
       $(".appendother").append('<div class="appendedother'+othercount+'"><div class="row fieldspace"><div class="col-md-4 rem-side-pad"><input type="text" class="form-control" name="specialskills[]" placeholder="Special Skills and Hobbies"></div><div class="col-md-4 rem-side-pad"><input type="text" class="form-control" name="nonacademicdistiction[]" placeholder="Non-Academic Distinctions / Recognition"></div><div class="col-md-3 rem-side-pad"><input type="text" class="form-control" name="membership[]" placeholder="Membership in Association/Organization"></div><div class="col-md-1 rem-side-pad"><input type="button" class="btn btn-danger btn-remove-other" name="remove" id="'+othercount+'" value="X"></div></div></div>');
       othercount++;
    });
    $(document).on('click', '.btn-remove-other',function(){
        var other_button_id = $(this).attr('id');
        $(".appendedother"+other_button_id+"").remove();
    });

    //reference
    //append names

    var referencecount = 1;
    $('#Addreference').click(function(){
       $(".appendreference").append('<div class="appendedreference'+referencecount+'"><div class="row fieldspace"><div class="col-md-5 rem-side-pad"><input type="text" class="form-control" name="referencename[]" placeholder="Name"></div><div class="col-md-3 rem-side-pad"><input type="text" class="form-control" name="referenceaddress[]" placeholder="Address"></div><div class="col-md-3 rem-side-pad"><input type="text" class="form-control" name="referencetelno[]" placeholder="Tel no."></div><div class="col-md-1 rem-side-pad"><input type="button" class="btn btn-danger btn-remove-reference" name="remove" id="'+referencecount+'" value="X"></div></div></div>');
       referencecount++;
    });
    $(document).on('click', '.btn-remove-reference',function(){
        var reference_button_id = $(this).attr('id');
        $(".appendedreference"+reference_button_id+"").remove();
    });
    </script>