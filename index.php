<html>
<head>
<title>ONLINE BLOOD POOL</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />
<!--[if lte IE 7]><link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8" /><![endif]-->
</head>
<body>
<div id="page">
  <div id="header">
    <div id="connect"> <a href="#" class="facebook"></a> <a href="#" class="twitter"></a> </div>
    <a href="index.php" id="logo"><img src="images/logo_1457185690879.png" width="300" height="100" alt="" /></a>
    <ul id="navigation">
      <li class="selected"><a href="index.php">HOME</a></li>
      <li><a href="Registration.html">DONOR REGISTRATION</a></li>
      <li><a href="blood request.html">BLOOD REQUEST</a></li>
      <li><a href="search donor.html">SEARCH DONOR</a></li>
      <li><a href="blood tips.html">BLOOD TIPS</a></li>
    </ul>
  </div>
  <!-- /#header -->
  <div id="body">
    <div id="main"> <img src="images/donating1.jpg" alt="" />
      <div class="details">
        <h2> &nbsp;&nbsp;&nbsp;&nbsp;Welcome to Online Blood Pool</h2> 

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blood is universally recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. More than 29 million units of blood components are transfused every year. </p>
      
     <center> 
          <p style="padding-top: 0px; margin-top:0px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Despite  the increase in the number of donors, blood remains in short supply during  emergencies, mainly attributed to the lack of information and accessibility. </p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We  positively believe this tool can overcome most of these challenges by  effectively connecting the blood donors with the blood recipients.</p>
             </center>  
      
      </div>
      <div id="favorites">
        <h2>blood Donating Photos</h2>
        <p><img src="images/171.jpg" alt="" width="140" height="120" /></p>
        <p><img src="images/2.jpg" alt="" width="140" height="120"/></p>
        <p><img src="images/1.jpg" alt="" width="140" height="120"/></p>
      </div>
    </div>
    <div id="sidebar">
      <form action="login.php" method="post">
      <table width="92%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="175" height="50" align="left" valign="top" style="background: white "><div class="login_title">
            <h1> Donor Login </h1>
          </div></td>
        </tr>
        <tr>
          <td height="305" align="center" valign="top" bgcolor="white"><p>&nbsp;</p>
            <p>Username<br />
              <input name="Username"  type="text" placeholder="User Name" required maxlength="20" title="Enter the username"/>
            </p>
            <p>Password<br />
              <input name="Password"  type="password"  placeholder="Password"  required pattern="([A-Z][0-9].{8,}" title="Enter the password"/>
            </p>
            <p>
              <input name="login"  type="submit"  value="Login" />
              <input name="reset"  type="reset" value="Reset" /></form>
            <p>New Donor? <a href="Registration.html"> Register</a></p></p>                            
<tr>
                <td><div id="updates">
                <center>
                  <h2 style="color:#0CF"> DONORS</h2>
                  <marquee direction="up" align="absbottom" height="200"  scrollamount="2" >
 <?php
 session_start();
include 'connection.php';
$extract=mysqli_query($conn,"select * from registration");
echo "<table  bgcolor='#CCCCCC' border='1' width='200'>";
echo "<tr><th>NAME</th><th>BLOOD GROUP</th><th>CITY</th></tr>";
while($row=mysqli_fetch_array($extract))
{
echo "<tr><td>$row[Fullname]</td>
	 <td>$row[Bloodgroup]</td>
	 <td>$row[City]</td></tr>";
}
echo "</table>";
?>
                  </marquee>
                 
      </div>                </tr>
        </tr>
            </p>
            </form>
    </div>
      </div>
      </body>
</html>
