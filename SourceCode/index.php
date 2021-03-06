<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Angry Bosses: A Job Portal!</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
<!-- HTML5 shim for IE backward compatibility -->
	<!--[if lt IE9]>
    	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
    	</script>
    <![endif]-->
    <script>
		function radioEmployeer(){
			document.getElementById("employeerform").style.display="block";
			document.getElementById("employeeform").style.display="none";
		}
		window.onload=radioEmployeer;
	</script>
</head>
<body>
<?php
	include('./db.inc.php');
?>
<div class="container-fluid">

	<div class="row-fluid">
    	<header class="span12 hero-unit ">
		<img src = "./img/logo.png">
        </header>
    </div>
    
    <div class="row-fluid">
        <ul class=" nav nav-tabs" id="loginsignuptabs">
                <li class="active"><a href="#login" data-toggle="tab" >Login</a></li>
                <li><a href="#signup" data-toggle="tab" onclick="radioEmployeer()" >Sign Up</a></li>
        </ul>
    </div>  
    <div class="tab-content">

        <div class="tab-pane active" id="login">
        	<section class="row-fluid">
            	<div class="span11 offset1">
                    <form>
                        <fieldset>
                            <legend>Log In!</legend>
                            <label id="uName">User Name</label>
                            <input class="input-medium" id="loginuname" type="text">
                            <label id="pass">Password</label>
                            <input class="input-medium" id="loginpass" type="password">
                          	<label id="login">Login as: </label>
                            <select  required id="loginas">
                                <option selected value="employee">Employee</option>
                                <option value="employeer">Employeer</option>
                            </select>
                        </fieldset>
                    </form>
                    <div class="row-fluid">
                    	<div > <button  type="button" class="btn btn-primary" id="button"  data-loading-text="Logging in..." onClick="login()">Log In</button></div>
                    	
                    </div>
					<div class=" statusMessage" id="loginstatus">Not Logged In.</div>
            	</div>
            </section>
        </div>
        
        <div class="tab-pane" id="signup">
            <div class="row-fluid">
            	<div class="span11 offset1">
               		<legend>Sign Up!</legend>
                    <div class="btn-group" data-toggle="buttons-radio">
                    	<button id="type_employeer" type="button" class="btn btn-small active" onClick="radioEmployeer()">Empoyeer</button>
                    	<button id="type_employee" type="button" class="btn btn-small" onClick="radioEmployee()" >Employee</button>
                    </div>
                    <br>
                    <div id="employeerform" style="margin-top:25px" >
                    	<div class="span12">
                        	<label><b>Company Name</b></label>
                            <input class="input-xlarge" id="newcName" type="text"  placeholder="Comany Name">
                            <label><b>About</b></label>
                            <textarea id="newcAbout" placeholder="About"  rows="6"></textarea>
                            <label><b>Number of Departments</b></label>
                            <input class="input-mini" id="newcNDept" type="number" onchange="makeList()" value="1" min="1" max="10" >
                            <label><b>Departments</b></label>
                            <div class="row-fluid"  >
                            	<div class="span2" id="deptdrop">
									<script>
                                        function makeList(){
                                            var totaldept=document.getElementById("newcNDept").value;
                                            manydeptlist(totaldept);
                                        }
                                        window.onload=makeList;
                                    </script>
                                </div>
                            </div>
                            <label><b>User Name</b></label>
                            <input class="input-medium" id="newcUName" type="text" placeholder="User Name">
                            <label><b>Password</b></label>
                            <input class="input-medium" id="newcPass" type="password" placeholder="Password">
                            <label><b>Email Address</b></label>
                            <input class="input-large" id="newcEmail" type="email" placeholder="Email Address">
                            <label><b>Other Information</b></label>
                            <textarea id="newcInfo" placeholder="Other Information" rows="6" ></textarea>
                        </div>
                        <div class="row-fluid">
                        	<div class="span2"> <button  type="button" class="btn btn-primary" id="newcbutton"  data-loading-text="Processing..." onClick="newcsubmit()">Submit</button></div>
                            
                        </div>                     
					<div  class=" statusMessage" id="result"></div>   
                    </div>
                    <div style="margin-top:25px" >
                    </div>
                    <div id="employeeform" style="margin-top:25px" >
                    	<div class="span12" >
                        	<label><b>Employee Name</b></label>
                            <input class="input-xlarge" id="newempName" type="text"  placeholder="Employee Name">
                        	<label><b>Employee Age</b></label>
                            <input class="input-small" id="newempAge" type="number"  placeholder="Age">
                        	<label><b>Employee Name</b></label>
                            <input class="input-large" id="newempDOB" type="date"  placeholder="Employee DOB">
                            <label><b>Employee Address</b></label>
                            <textarea id="neweAddress" placeholder="Employee Address"  rows="6"></textarea>
                            <label><b>University Name</b></label>
                            <input class="input-xlarge" id="newempUni" type="text" placeholder="University Name" >
                            <label><b>Employee Major</b></label>
                            <input class="input-large" id="newempMajor" type="text" placeholder="Employee Major" >
                            <label><b>Graduation Date</b></label>
                            <input class="input-xlarge" id="newempGDate" type="date">
                            <label><b>Number of Departments</b></label>
                            <input class="input-mini" id="neweNDept" type="number" onchange="makeListEmp()" value="1" min="1" max="10" >                            
                            <label><b>Interested Departments</b></label>
                            <div class="row-fluid"  >
                            <div class="span2" id="depdrop">
                            	<script>
									function makeListEmp(){
										var totaldep=document.getElementById("neweNDept").value;
										manydeptlistemp(totaldep);
									}
									window.onload=makeListEmp;
									
                                </script>
                                </div>
                            </div>
                            <label><b>Preferred City</b></label>
                            <input class="input-medium" id="neweCity" type="text" placeholder="Preferred City" >
                            <label><b>Looking for</b></label>
                            <select required id="lookingfor">
                            	<option value="Internship">Internship</option>
                                <option value="Job">Job</option>
                            </select>
                            <label><b>User Name</b></label>
                            <input class="input-medium" id="neweuname" type="text" placeholder="User Name">
                            <label><b>Password</b></label>
                            <input class="input-medium" id="newepass" type="password" placeholder="Password">
                            <label><b>Email Address</b></label>
                            <input class="input-large" id="neweemail" type="email" placeholder="Email Address">
                            <label><b>Other Information</b></label>
                            <textarea id="neweInfo" placeholder="Other Information" rows="6" ></textarea>
                        </div>
                        <div class="row-fluid">
                          <div class="span2"> <button  type="button" class="btn btn-primary" id="newebutton"  data-loading-text="Processing..." onClick="newesubmit()">Submit</button></div>
                        </div> 
                           <div class="statusMessage" id="signupemp"></div>             
                    </div>
					
                    <div style="margin-top:25px" >
                    </div>
            	
                </div>
            </div>       
        </div>
    </div>
</div>
<script>
	function radioEmployeer(){
		makeList();
		document.getElementById("employeerform").style.display="block";
		document.getElementById("employeeform").style.display="none";
	}
	function radioEmployee(){
		document.getElementById("employeerform").style.display="none";
		document.getElementById("employeeform").style.display="block";		
	}

	function onedeptlist(idname){
		
		//var opt="<option selected value='employee'>Employee</option><option value='employeer'><?php echo('Employeer')?></option>";
		document.getElementById("deptdrop").innerHTML=document.getElementById("deptdrop").innerHTML+("<select class='span12' required id='"+idname+"'>"+" "+"</select>");
	}
	function makeListEmp(){
		var totaldep=document.getElementById("neweNDept").value;
		manydeptlistemp(totaldep);	
	}
	function makeList(){
		var totaldept=document.getElementById("newcNDept").value;
		manydeptlist(totaldept);
	}
	function get_XmlHttp() {
	  // create the variable that will contain the instance of the XMLHttpRequest object (initially with null value)
	  var xmlHttp = null;
	
	  if(window.XMLHttpRequest) {		// for Forefox, IE7+, Opera, Safari, ...
		xmlHttp = new XMLHttpRequest();
	  }
	  else if(window.ActiveXObject) {	// for Internet Explorer 5 or 6
		xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  return xmlHttp;
	}
	function login(){
		var loginname=document.getElementById("loginuname").value;
		var loginpass=document.getElementById("loginpass").value;
		var logintype=document.getElementById("loginas").value;
		var data='uname='+loginname+'&pass='+loginpass+'&type='+logintype;
		var request = get_XmlHttp();
		request.open("POST","login.php",true);
		request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		request.send(data);
		request.onreadystatechange = function() {
			if (request.readyState == 4) {
		  		var state=request.responseText;
				document.getElementById("loginstatus").innerHTML=state;
				if (state=="true"){
					//$user=new user();
					//$user->username=loginname;
					//$user->usertype=logintype;
					//$user->login();
					window.location="profile.php";	
				}
				else if (state=="false"){
					document.getElementById("loginstatus").innerHTML="Invalid login credentials";
				}
			}
	  	}
	}
	function newesubmit(){
		var empname=document.getElementById("newempName").value;
		var empage=document.getElementById("newempAge").value;
		var empdob=document.getElementById("newempDOB").value;	
		var empaddress=document.getElementById("neweAddress").value;
		var empuni=document.getElementById("newempUni").value;
		var empmajor=document.getElementById("newempMajor").value;
		var empgdate=document.getElementById("newempGDate").value;
		var empcity=document.getElementById("neweCity").value;
		var emplookingfor=document.getElementById("lookingfor").value;
		var empuname=document.getElementById("neweuname").value;
		var emppass=document.getElementById("newepass").value;
		var empemail=document.getElementById("neweemail").value;
		var empinfo=document.getElementById("neweInfo").value;
		var data='name='+empname+'&age='+empage+'&dob='+empdob+'&address='+empaddress+'&uni='+empuni+'&major='+empmajor+'&gdate='+empgdate+'&city='+empcity+'&lookingfor='+emplookingfor+'&uname='+empuname+'&pass='+emppass+'&email='+empemail+'&info='+empinfo;
		var totaldepartments=document.getElementById("neweNDept").value;
		data=data+'&size='+totaldepartments;
		for (var i=0;i<totaldepartments;i++){
			var id="depemp"+i;
			data=data+'&depemp'+i+'='+document.getElementById(id).value;
		}
		var request =  get_XmlHttp();
		request.open("POST", "newemployee.php", true);
		request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	  	request.send(data);
	  	request.onreadystatechange = function() {
			if (request.readyState == 4) {
		  	document.getElementById("signupemp").innerHTML = request.responseText;
			}
	  	}
	}
	function newcsubmit(){
		var companyname=document.getElementById("newcName").value;
		var about=document.getElementById("newcAbout").value;
		var username=document.getElementById("newcUName").value;
		var password=document.getElementById("newcPass").value;
		var email=document.getElementById("newcEmail").value;
		var information=document.getElementById("newcInfo").value;

		var data1='compname='+companyname+'&abt='+about+'&uname='+username+'&pass='+password+'&emailid='+email+'&info='+information;			
		var request =  get_XmlHttp();		// call the function for the XMLHttpRequest instance
	 	// create pairs index=value with data that must be sent to server
	  	request.open("POST", "newcompany.php", true);			// set the request
		
		var totaldepartments=document.getElementById("newcNDept").value;
		data1=data1+'&size='+totaldepartments;
		for (var i=0;i<totaldepartments;i++){
			var id="depcmp"+i;
			data1=data1+'&depcmp'+i+'='+document.getElementById(id).value;
		}	
	  	// adds  a header to tell the PHP script to recognize the data as is sent via POST
	  	request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	  	request.send(data1);		// calls the send() method with datas as parameter
	
	  // Check request status
	  // If the response is received completely, will be transferred to the HTML tag with tagID
	  	request.onreadystatechange = function() {
			if (request.readyState == 4) {
		  	document.getElementById("result").innerHTML = request.responseText;
			}
	  	}

				
	}
	function ajaxrequest(php_file, tagID) {
	  var request =  get_XmlHttp();		// call the function for the XMLHttpRequest instance
	
	  // create pairs index=value with data that must be sent to server
	  var  the_data = 'test='+document.getElementById('txt2').innerHTML;
	
	  request.open("POST", php_file, true);			// set the request
	
	  // adds  a header to tell the PHP script to recognize the data as is sent via POST
	  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	  request.send(the_data);		// calls the send() method with datas as parameter
	
	  // Check request status
	  // If the response is received completely, will be transferred to the HTML tag with tagID
	  request.onreadystatechange = function() {
		if (request.readyState == 4) {
		  document.getElementById(tagID).innerHTML = request.responseText;
		}
	  }
	}	

</script>
<script src="js/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/spin.js"></script>
<?php echo("<script> function manydeptlistemp(count){
		$(document.getElementById(\"depdrop\")).empty();")?>
		
		<?php
			$opt1="<option value='";
			$opt2="'>";
			$opt3="</option>";

			$list="<select id='depemp'>";
			$query=mysql_query("SELECT Dept_Name FROM `departments` ORDER BY Dept_Name");
			//$departments = mysql_fetch_array($query, MYSQL_ASSOC);
			while ($dep = mysql_fetch_array($query, MYSQL_ASSOC)) {
				$list=$list.$opt1.$dep['Dept_Name'].$opt2.$dep['Dept_Name'].$opt3;
			}
			$list=$list."</select>";
			$test=("document.getElementById('depdrop').innerHTML=\"");
			//echo($test.$list."\";");
		?>
        
<?php 
		//onedeptlist(\"deptlist\"+i);
		echo("		
		for (var i=0;i<count;i++)
		{ 
			document.getElementById(\"depdrop\").innerHTML=document.getElementById(\"depdrop\").innerHTML+(\"".$list."\");
			document.getElementById(\"depemp\").id=\"depemp\"+i;
		}
	}	
	</script>");
	?>


<?php echo("<script> function manydeptlist(count){
		$(document.getElementById(\"deptdrop\")).empty();")?>
		
		<?php
			$opt1="<option value='";
			$opt2="'>";
			$opt3="</option>";
			include('./db.inc.php');
			$list="<select id='depcmp'>";
			$query=mysql_query("SELECT Dept_Name FROM `departments` ORDER BY Dept_Name");
			//$departments = mysql_fetch_array($query, MYSQL_ASSOC);
			while ($dep = mysql_fetch_array($query, MYSQL_ASSOC)) {
				$list=$list.$opt1.$dep['Dept_Name'].$opt2.$dep['Dept_Name'].$opt3;
			}
			$list=$list."</select>";
			$test=("document.getElementById('deptdrop').innerHTML=\"");
			//echo($test.$list."\";");
		?>
        
<?php 
		//onedeptlist(\"deptlist\"+i);
		echo("		
		for (var i=0;i<count;i++)
		{ 
			document.getElementById(\"deptdrop\").innerHTML=document.getElementById(\"deptdrop\").innerHTML+(\"".$list."\");
			document.getElementById(\"depcmp\").id=\"depcmp\"+i;
		}
	}	
	</script>");
	?>

<div class = "span12 hero-unit footer">
AngryBosses 2013. All Rights Reserved.
</div>
</body>
</html>
