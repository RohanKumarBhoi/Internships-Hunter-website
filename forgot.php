<?php
if(!isset($counter))
$counter=0;
if(isset($_POST['recover']) && isset($_POST['email']) && isset($_POST['mob']) && !empty($_POST['email']) &&  !empty($_POST['mob']) ) 
{
	$email=$_POST['email'];
	$mob=$_POST['mob'];
	$con=mysql_connect("sql202.byethost12.com","b12_16055662","qwerty");
	mysql_select_db("b12_16055662_InternshipHunters");
	$sql="Select psswrd from users where email='$email' && mob='$mob'";
	$row=mysql_num_rows(mysql_query($sql,$con));
	if($row>0)
	{
		$psswrd=mysql_result(mysql_query($sql,$con),0);
		/*mail($email,"intern-hunter password recovery","Your password is:$psswrd. Please change your password on  login.","");*/
		/*echo "<script type='text/javascript'>\n";
		echo "alert('Recovery mail has been sent');\n";
		echo "</script>";*/
		$counter=1;
	}
	else
		$counter=2;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title>Internships Hunter</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="" />
    <link href="style.css<?php print('?'.filemtime('stil.css'));?>" rel="stylesheet" type="text/css" />
</head>

<body style="background-image:url(images/back.png);background-attachment:fixed">
    <div id="page">
        <div id="header">
            <h1><a href="#">Internships Hunter</a></h1>
            <p id="subtitle">...for those who look ahead</p>
        </div>
        <div id="menu0">
        	<div id="search" style="min-width:1px">
                <form action="index.php" method="POST">
				<input type="text" name="find">
				<input type="submit" name="search" id="submit" class="submit" value="Search"/>
                </form>
            </div>
        </div>
        <div id="menu">
            <ul>
                <li><a href="loggedin.php">Home</a></li>
                <li><a href="about1.php">About</a></li>
                <li><a href="faq1.php">FAQs</a></li>
                <li><a href="contact1.php">Contact</a></li>
                <li><a href="privacy1.php">Privacy</a></li>
                <li><a href="terms1.php">Terms</a></li>
            </ul>
        </div>
        <div id="main">	
            <div id="sidebar">
                <div id="login">
                    <h2>Account Login</h2>
                    <div class="box2">
                        <form method="post" action="index.php">
                            <p class="txtleft"><label for="user">User Name:</label></p>
                            <input type="text" name="email" id="user" class="text" /><br>
                            <p class="txtleft"><label for="password">Password:</label></p>
                            <input type="password" name="pass" id="password" class="password" /><br>
                            <p class="rem">
                            <input type="submit" name="login" id="submit" class="submit" value="Submit" />
                            <p><a href="forgot.php">Forgot your password?</a></p>
                            <p><a href="signup.php">Create an account</a></p>
                        </form>
                    </div>
                </div><!-- login -->
                <div class="box">
                    <h2>Similar sites</h2>
                    <div class="box2">
                        <ul>
                            <li><a href="http://www.letmeknow.in">letmeknow.in</a></li>
                            <li><a href="http://www.internships.com">internships.com</a></li>
                            <li><a href="http://www.internmatch.com">internmatch.com</a></li>
                            <li><a href="http://www.letsintern.com">letsintern.com</a></li>
                            <li><a href="http://www.experience.com">experience.com</a></li>
                            <li><a href="http://www.twenty19.com">twenty19.com</a></li>
                            <li><a href="http://www.internweb.com">internweb.com</a></li>
                        </ul>
                    </div>
                </div><!-- box -->					
            </div><!-- sidebar -->    	              
            <div id="content">
                <div id="contheader">
                    <h2>Welcome to <strong>INTERNSHIPS HUNTER</strong>!</h2>
                </div>		
                <div id="content2">	
                    <div class="post">
                        <h2>Password Recovery</h2><br>
                        <div style="width:350px;text-align:right;position:relative;left:70px">
                         <?php if($counter==2){?>
                        <span style="letter-spacing:1px;text-align:center;color:#F00"><strong>*Incorrect user id or password.</strong></span>
                        <?php }else if($counter==1){?>
                        <span style="letter-spacing:1px;text-align:center;color:#0F0;"><strong>*Recovery email has been sent.</strong></span>
                        <?php }
						$counter=0;
						?>
                        <br />
                        <br />
                        <div style="text-align:right" id="next">
<form action="forgot.php" method="POST">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email id:</strong>
<input type="text" size=35 name="email" placeholder="registered email id"><br><br />
<strong>mobile no.:</strong>
<input type="text" size=35 name="mob" placeholder="registered mobile number"><br><br />
<input type="submit" name="recover" class="submit" value="recover">
</form>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
                	
                    </div><!-- post -->			
                </div><!-- content2 -->								              
            </div><!-- content -->                    
            <div class="clearing">&nbsp;</div> 
            <div id="footer">
                <p>Copyright &copy; 2011 Bhubanananda Chhatriya and Rohan Kumar Bhoi,All rights reserved.</p>
            </div>
        </div><!-- main -->
    </div><!-- page -->
</body>
</html>