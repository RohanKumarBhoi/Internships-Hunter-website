<?php
if(!isset($counter))
$counter=0;
	if(isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['mail'])&&isset($_POST['pass'])&&isset($_POST['cpass'])&&isset($_POST['mob'])&&isset($_POST['address'])&&isset($_POST['age'])&&isset($_POST['sex'])&&isset($_POST['bday'])&&isset($_POST['lang'])&&isset($_POST['soft'])&&!empty($_POST['fname'])&&!empty($_POST['lname'])&&!empty($_POST['mail'])&&!empty($_POST['pass'])&&!empty($_POST['cpass'])&&!empty($_POST['mob'])&&!empty($_POST['address'])&&!empty($_POST['age'])&&!empty($_POST['sex'])&&!empty($_POST['bday']))
	{
		$fstnm=$_POST['fname'];
		$lstnm=$_POST['lname'];
		$email=$_POST['mail'];
		$psswrd=$_POST['pass'];
		$cpsswrd=$_POST['cpass'];
		$mobile=$_POST['mob'];
		$address=$_POST['address'];
		$age=$_POST['age'];
		$sex=$_POST['sex'];
		$bday=$_POST['bday'];
		$lang=$_POST['lang'];
		$soft=$_POST['soft'];
		$counter=0;
		$con=mysql_connect("sql202.byethost12.com","b12_16055662","qwerty") or die(mysql_error());
		mysql_select_db("b12_16055662_InternshipHunters");
		if($psswrd!=$cpsswrd &&!empty($psswrd) && !empty($cpsswrd))
		{
			/*echo "<script type='text/javascript'>\n";
			echo "alert('password mismatch');\n";
			echo "</script>";*/ 
			$counter=5;
		}
		$sql="INSERT INTO test(fname,lname,psswrd,email,mob,address,age,sex,bday,lang,soft)VALUES('$fstnm','$lstnm','$psswrd','$email','$mobile','$address','$age','$sex','$bday','$lang','$soft')";
		mysql_query($sql,$con);
		$sql="select email from test where email like '%@%.%'";
		if(mysql_num_rows(mysql_query($sql,$con))==0)
		{
			/*echo "<script type='text/javascript'>\n";
			echo "alert('invalid email');\n";
			echo "</script>";*/
			if($counter==0)
			$counter=1;
		}
		$sql="select mob from test where mob like '__________'";
		if(mysql_num_rows(mysql_query($sql,$con))==0)
		{
			/*echo "<script type='text/javascript'>\n";
			echo "alert('invalid mobile number');\n";
			echo "</script>";*/
			if($counter==0)
			$counter=2;
		}
		$sql="select email from users where email='$email'";
		if(mysql_num_rows(mysql_query($sql,$con))!=0)
		{
			/*echo "<script type='text/javascript'>\n";
			echo "alert('duplicate email entry');\n";
			echo "</script>";*/ 
			if($counter==0)
			$counter=3;
		}
		$sql="delete from test where 1";
		mysql_query($sql,$con);
		if($counter==0)
		{
			$sql="INSERT INTO users(fname,lname,psswrd,email,mob,address,age,sex,bday,lang,soft)VALUES('$fstnm','$lstnm','$psswrd','$email','$mobile','$address','$age','$sex','$bday','$lang','$soft')";
			mysql_query($sql,$con);
			/*echo "<script type='text/javascript'>\n";
			echo "alert('Successfully registered');\n";
			echo "</script>";*/	
			if($counter==0)
			$counter=4;
		}
		
	//	$con->close();
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
                        <h2>Register an Account</h2><br>
                        <div id="search" style=" font-size:15px;width:290px;text-align:right;position:relative;left:70px">
                        <?php if($counter==5){?>
                        <span style="letter-spacing:1px;text-align:center;color:#F00"><strong>*Password Mismatch.</strong></span><br />
                        <?php }else if($counter==1){?>
                        <span style="letter-spacing:1px;text-align:center;color:#F00"><strong>*Invalid email id.</strong></span><br />
                        <?php }else if($counter==2){?>
                        <span style="letter-spacing:1px;text-align:center;color:#F00"><strong>*Invalid mobile number.</strong></span><br />
                        <?php }else if($counter==3){?>
                        <span style="letter-spacing:1px;text-align:center;color:#F00"><strong>*email id already exists.</strong></span><br />
                        <?php }else if($counter==4){?>
                        <span style="letter-spacing:1px;text-align:center;color:#0F0;"><strong>*Successfully Registered.</strong></span><br />
                        <?php }
						$counter=0;
						?>
                        <br />
<form action="signup.php" method="POST">
	<strong>First name:</strong><input required type="text" name="fname"><br><br>
	<strong>Last name:</strong>
	<input type="text" required name="lname"><br><br>
	<strong>E-mail:</strong><input type="email"  required name="mail"><br><br>
	<strong>password:</strong>
	<input type="password" required name="pass"><br><br>
	<strong>confirm password:</strong>
	<input type="password" required name="cpass"><br><br>
	<strong>mobile no:</strong>
	<input type="text" required name="mob"><br><br>
    <strong>address:</strong>
    <input type="text" required name="address"><br><br>
    <strong>age:</strong>
    <input type="text" required name="age"><br><br>
    <div style="text-align:right;position:relative;left:-24px">
    	<strong>sex:</strong>
   		<input type="radio" name="sex" value='M'> Male&nbsp;
   		<input type="radio" name="sex" value='F'> Female<br><br>
    </div>
    <strong>birthday:</strong>
    <input type="date" name="bday"><br><br>
    <strong>programming in:</strong>
    <input type="text" name="lang"><br><br>
    <strong>software learnt:</strong>
	<input type="text" name="soft">
	<input style="position:relative;left:-50px" class="submit" type="submit" value="submit">
	<br>
</form>
</div>
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