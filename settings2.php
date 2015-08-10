<?php
session_start();
if($_SESSION['fname']==null ||$_SESSION['lname']==null||$_SESSION['email']==null)
{
	header('location:home.php');
}
if(!isset($counter))
$counter=0;
$con=mysql_connect("sql202.byethost12.com","b12_16055662","qwerty");
mysql_select_db("b12_16055662_InternshipHunters");
$email=$_SESSION['email'];
$sql="select psswrd from users where email='$email'";
$pass=mysql_result(mysql_query($sql,$con),0);
$sql="select mob from users where email='$email'"; 
$mob=mysql_result(mysql_query($sql,$con),0);
$sql="select address from users where email='$email'";
$address=mysql_result(mysql_query($sql,$con),0);
$sql="select lang from users where email='$email'";
$lang=mysql_result(mysql_query($sql,$con),0);
$sql="select soft from users where email='$email'"; 
$soft=mysql_result(mysql_query($sql,$con),0);
if(isset($_POST['update']))
{
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	$mob=$_POST['mob'];
	$address=$_POST['address'];
	$lang=$_POST['lang'];
	$soft=$_POST['soft'];
	$counter=0;
	if($pass!=$cpass &&!empty($pass) && !empty($cpass))
		{
			/*echo "<script type='text/javascript'>\n";
			echo "alert('password mismatch');\n";
			echo "</script>";*/ 
			$counter=1;
		}
	$sql="INSERT INTO test(psswrd,mob,address,lang,soft)VALUES('$pass','$mob','$address','$lang','$soft')";
	mysql_query($sql,$con);
	$sql="select mob from test where mob like '__________'";
	if(mysql_num_rows(mysql_query($sql,$con))==0)
		{
			/*echo "<script type='text/javascript'>\n";
			echo "alert('invalid mobile number');\n";
			echo "</script>";*/
			$counter=2;
		}
	$sql="delete from test where 1";
	mysql_query($sql,$con);
	if($counter==0)
	{
		$sql="update users set psswrd='$pass',mob='$mob',address='$address',lang='$lang',soft='$soft' where email='$email'";
		mysql_query($sql,$con);
		/*echo "<script type='text/javascript'>\n";
		echo "alert('Successfully updated');\n";
		echo "</script>";*/
		$counter=3;	
	}
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
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body style="background-image:url(images/back.png);background-attachment:fixed">
    <div id="page">
        <div id="header">
            <h1><a href="#">Internships Hunter</a></h1>
            <p id="subtitle">...for those who look ahead</p>
        </div>
        <div id="menu0">
        	<div id="search" style="min-width:1px">
                <form action="loggedin.php" method="POST">
				<input type="text" name="find">
				<input type="submit" name="search" id="submit" class="submit" value="Search"/>
                </form>
            </div>
        </div>
        <div id="menu">
            <ul>
                <li><a href="loggedin.php">Home</a></li>
                <li><a href="about2.php">About</a></li>
                <li><a href="faq2.php">FAQs</a></li>
                <li><a href="contact2.php">Contact</a></li>
                <li><a href="privacy2.php">Privacy</a></li>
                <li><a href="terms2.php">Terms</a></li>
            </ul>
        </div>
        <div id="main">	
            <div id="sidebar">
                <div id="login">
                    <h2>Welcome <?php echo $_SESSION['fname']?> </h2>
                    <div class="box2">
                        <form method="post" action="loggedin.php">
                        	<input type="submit" name="postint" id="submit" class="submit" value="POST" /><br />
                            <input type="submit" value="SETTINGS" class="submit" name="settings"><br />
							<input type="submit" value="LOG OUT" class="submit" name="signout"><br />
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
                        <h2>Enter Settings</h2><br>
                         <div id="search" style=" font-size:15px;width:330px;text-align:left;position:relative;left:70px">
                         <?php if($counter==1){?>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="letter-spacing:1px;text-align:center;color:#F00"><strong>*Password Mismatch. </strong></span><br />
                         <?php }else if($counter==2){?>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="letter-spacing:1px;text-align:center;color:#F00"><strong>*Invalid Mobile number.</strong></span><br />
                        <?php }else if($counter==3){?>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="letter-spacing:1px;text-align:center;color:#0F0;"><strong>*Successfully updated.</strong></span><br />
                        <?php }
						$counter=0;
						?>
                        <br />
                        <form action="settings2.php" method="POST">
    <strong>new password</strong>
    <input type="password" name="pass" required value=<?php echo $pass?>><br><br />
    <strong>confirm new password</strong>
    <input type="password" name="cpass" required value=<?php echo $pass?>><br><br />
    <strong>new mobile number</strong>
    <input type="text" name="mob" required value=<?php echo $mob?>><br><br />
    <strong>new address</strong>
    <input type="text" name="address" required value=<?php echo $address?>><br><br />
    <strong>languages known</strong>
    <input type="text" name="lang" required value=<?php echo $lang?>><br /><br />
    <strong>software learned</strong>
    <input type="text" name="soft" required value=<?php echo $soft?>><br><br />
    <input type="submit" name="update" class="submit" value="update">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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