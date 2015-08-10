<?php
session_start();
	if($_SESSION['fname']==null ||$_SESSION['lname']==null||$_SESSION['email']==null)
{
	header('location:contact1.php');
}
if(!isset($counter))
$counter=0;
if(isset($_POST['submit']))
$counter=1;
if(isset($_POST['email']))
{
	$email=$_POST['email'];
	$con=mysql_connect("sql202.byethost12.com","b12_16055662","qwerty");
	mysql_select_db("b12_16055662_InternshipHunters");
	$sql="insert into tempo values('$email')";
	mysql_query($sql,$con);
	$sql="select email from tempo where email like '%@%.%'";
	if(mysql_num_rows(mysql_query($sql,$con))==0)
		{
			//echo "<script type='text/javascript'>\n";
			/*echo "alert('invalid email');\n";
			echo "</script>";*/
			$counter=2;
		}
	$sql="delete from tempo where 1";
	mysql_query($sql,$con);

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
                        <h2>Contact us</h2><br>
                       	<div style="width:350px;text-align:right;position:relative;left:70px">
                        <?php if($counter==2){?>
                        <span style="letter-spacing:1px;text-align:center;color:#F00"><strong>*Invalid email id.</strong></span>
                        <?php }else if($counter==1){?>
                        <span style="letter-spacing:1px;text-align:center;color:#0F0;"><strong>*Your comments have been sent.</strong></span>
                        <?php }
						$counter=0;
						?>
                        <br /><br />
<form action="contact2.php" method="POST">
<strong>Name:</strong>
<input type="text" size=35 required placeholder="full name"><br><br />
<strong>Email:</strong>
<input type="text" size=35 required name="email" placeholder="email id"><br><br />
<strong>Subject:</strong>
<input type="text" size=35 placeholder="brief subject"><br><br />
<strong>Comments:</strong>
<textarea rows="5" cols="28" placeholder="write your comments here"></textarea><br><br />
<input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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