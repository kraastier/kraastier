<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
label{width:200px;}
input{width:250px;}

.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}
.buttonz {
  background-color: grey;
  border-radius: 5px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.form-inline input {
  vertical-align: middle;
  margin: 5px 40px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}


.containers {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.form-inline button:hover {
  background-color: royalblue;
}

@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
</style>
</head>
<body style="font-family:bahnschrift ;">
<div  style="width:100%;height:80px;background-color:darkblue;">
					
					<div  style="width:70%;height:100%;background-color:white; float:left; border-top-right-radius: 100%;">
					<img src="img/onlinef1.png" style="height:100%; margin-left:30px;" />
					</div>
					
					<div  style="width:30%;height:100%;background-color:darkblue;float:right">
					<img src="img/onlinedell.png" style="height:100%;float:right; margin-right:30px;" />
					</div>
					
						
					</div>
<div class="container containers">

<!-- ====================================================================================================== -->
<!-- ====================================================================================================== -->
<!-- ====================================================================================================== -->
<!-- ====================================================================================================== -->
<?php

if(isset($_POST['submit']))
{
$msg="
	
<b>FEEDBACK</b><br>
==================================<br>
name=".$_POST['name']."<br>
company name=".$_POST['org']."<br>
phno=".$_POST['contact']."<br>
email=".$_POST['email']."<br>
address=".$_POST['address']."<br>
no of servers=".$_POST['nos']."<br>
no of locations=".$_POST['nol']."<br>
no of PCs=".$_POST['nop']."<br>
ILL/MPLS link=".$_POST['ill']."<br>
Existing customer of=".implode(", ",$_POST['customerfor'])."<br>
==================================<br>
<b>Any current challenges in:-</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;Storage=".$_POST['storage']."<br>
&nbsp;&nbsp;&nbsp;&nbsp;Backup archiving=".$_POST['backup']."<br>
&nbsp;&nbsp;&nbsp;&nbsp;Data center=".$_POST['data']."<br>
&nbsp;&nbsp;&nbsp;&nbsp;Network=".$_POST['network']."<br>
&nbsp;&nbsp;&nbsp;&nbsp;Infrastructure=".$_POST['infra']."<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process automation/Asset mgmt/Compliance mgmt=".$_POST['process']."<br>
==================================<br>
<b>Need assessment study on=</b>".implode(", ",$_POST['study'])."<br>
==================================<br>
<b>Rating:-</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;Technical Content/Presentation=".$_POST['r1']."<br>
&nbsp;&nbsp;&nbsp;&nbsp;About overall event=".$_POST['r2']."<br>
==================================<br>
<b>Any other suggestion/Feedback<=</b>".$_POST['r3']."<br>

";



require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = 'smtp.rediffmailpro.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = "auto";
$mail->Port = 587;
$mail->Username = "kunal@f1infotech.com";
$mail->Password = "incorrect";

$mail->From = "events@f1infotech.com";
$mail->FromName = "PowerStore MasterClass Registration";
$mail->AddAddress("kunal@f1infotech.com");

$mail->IsHTML(true);

$mail->Subject = "Event Registration";
$mail->Body = $msg;;
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
	
											
}
else
{
	echo "<script>
										alert('Thank You!');
										
										</script>";
	
}


}

?>
<!-- ====================================================================================================== -->
<!-- ====================================================================================================== -->
<!-- ====================================================================================================== -->
<!-- ====================================================================================================== -->

	<h2 class="mb-sm mt-sm" style="color:darkblue;"><strong >Feedback</strong><strong> Form</strong></h2>
<form  method="POST">
<div class="form-inline">
	  <label >Name:</label>
	  <input type="text"  autocomplete="off" placeholder="" name="name" required>
	  <label >Organisation:</label>
	  <input type="text"  autocomplete="off" placeholder="" name="org"  required>
	  <label>

	  </label>
</div>


 <div class="form-inline">
	  <label >Email:</label>
	  <input type="email"  autocomplete="off" placeholder="" name="email"  required>
	  <label >Contact No:</label>
	  <input type="text"  autocomplete="off" placeholder="" name="contact" required>
	  <label>

	  </label>
</div>

 <div class="form-inline">
	  <label >Address:</label>
	  <input type="text"  autocomplete="off" placeholder="" name="address">
	  <label>

	  </label>
</div>

<hr>

 <div class="form-inline">
	  <label >No. of Servers:</label>
	  <input type="text"  autocomplete="off" placeholder="" name="nos">
	  <label >No. of Locations:</label>
	  <input type="text"  autocomplete="off" placeholder="" name="nol">
	  <label>

	  </label>
</div>


 <div class="form-inline">
	  <label >No. of PCs:</label>
	  <input type="text"  autocomplete="off" placeholder="" name="nop">
	  <label >ILL/MPLS Link:</label>
	  <input type="text"  autocomplete="off" placeholder="" name="ill">
	  <label>

	  </label>
</div>

<hr>
Are you existing customer for:
<p></p>
 <div class="form-inline">
	  <input type="checkbox" name="customerfor[]" value="-" style="width:auto;" hidden checked>
	 <span><input type="checkbox" name="customerfor[]" value="dell" style="width:auto;">  Dell &nbsp; </span>
</div>
 <div class="form-inline">
	  
 <span><input type="checkbox" style="width:auto;" value="f1 InfoTech" name="customerfor[]">  F1 InfoTech &nbsp;</span>
</div>

<hr>
Any Current Challenges in:
<p></p>
 <div class="form-inline">
	  <label >Storage:</label>
	  <input type="text"  autocomplete="off" placeholder="" name="storage">
	  <label >Backup Archiving:</label>
	  <input type="text"  autocomplete="off" placeholder="" name="backup">
	  <label>

	  </label>
</div>


 <div class="form-inline">
	  <label >Data Center:</label>
	  <input type="text"  autocomplete="off" placeholder="" name="data">
	  <label >Network:</label>
	  <input type="text"  autocomplete="off" placeholder="" name="network">
	  <label>

	  </label>
</div>


 <div class="form-inline">
	  <label >Infrastructure:</label>
	  <input type="text"  autocomplete="off" placeholder="" name="infra">
	  <label >Process Automation/Asset Management/Compliance Management:</label>
	  <input type="text"  autocomplete="off" placeholder="" name="process">
	  <label>

	  </label>
</div>

<hr>
Do you need any assessment study on:
<p></p>
 <div class="form-inline">
 <input type="checkbox" name="study[]" value="-" style="width:auto;" checked hidden > 
	 <span><input type="checkbox" name="study[]" value="Storage" style="width:auto;">  Storage &nbsp; </span>
</div>

 <div class="form-inline">	  
 <span><input type="checkbox" style="width:auto;" value="Backup" name="study[]">  Backup  &nbsp;</span>
</div>

 <div class="form-inline">	  
 <span><input type="checkbox" style="width:auto;" value="File assessment" name="study[]">  File Assessment &nbsp;</span>
</div>

 <div class="form-inline">	  
 <span><input type="checkbox" style="width:auto;" value="Security" name="study[]">  Security &nbsp;</span>
</div>

 <div class="form-inline">	  
 <span><input type="checkbox" style="width:auto;" value="Network" name="study[]">  Network &nbsp;</span>
</div>

 <div class="form-inline">	  
 <span><input type="checkbox" style="width:auto;" value="Process automation using RFID" name="study[]">  Process Automation using RFID &nbsp;</span>
</div>

<hr>

Share us your experience about this event (Pl rate 1 to 10 (10 being the best)
<p></p>
 <div class="form-inline">
	  <label >Technical Content/Presentation:</label>
	  <input type="text"  autocomplete="off" placeholder="" name="r1" required>
	  <label >About Overall Event:</label>
	  <input type="text"  autocomplete="off" placeholder="" name="r2" required>
	 
	  <label>

	  </label>
</div>
 <div class="form-inline">
	  <label >Any other suggestion:</label>
	  <input type="text"  autocomplete="off" placeholder="" name="r3">
	  
	  <label>

	  </label>
</div>
<hr>
  <button class="buttonz" name="submit" type="submit">Submit</button>
</form>
</div>
</body>
</html>
