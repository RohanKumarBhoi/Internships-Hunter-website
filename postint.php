<?php
session_start();
$con=mysql_connect("sql202.byethost12.com","b12_16055662","qwerty");
mysql_select_db("b12_16055662_InternshipHunters");
if($_SESSION['fname']==null ||$_SESSION['lname']==null||$_SESSION['email']==null)
{
	header('location:index.php');
}
if(!isset($counter))

{
	//echo "qwerty";
	$counter=0;
}
if(isset($_POST['signout']))
{
	$_SESSION['fname']=null;
	$_SESSION['lname']=null;
	$_SESSION['email']=null;
	//$_SESSION['psswrd']=null;
	//$_SESSION['mob']=null;
	//$_SESSION['address']=null;
	//$_SESSION['age']=null;
	//$_SESSION['sex']=null;
	//$_SESSION['bday']=null;
	//$_SESSION['lang']=null;
	//$_SESSION['soft']=null;
	header('location:index.php');
}
if(isset($_POST['postint']))
{
	//echo "qadasda";
	header('location:postint.php');
}
if(isset($_POST['settings']))
{
	header('location:settings.php');
}
if(isset($_POST['postin']) && !empty($_POST['postin']))
{
	$company=$_POST['company'];
	$location=$_POST['location'];
	$description=$_POST['description'];
	$edate=$_POST['edate'];
	$duration=$_POST['duration'];
	$openings=$_POST['openings'];
	$areas=$_POST['areas'];
	$eligibility=$_POST['eligibility'];
	$stipend=$_POST['stipend'];
	$link=$_POST['link'];
	$sql="select * from intern where company='$company' && location='$location' && description='$description' && edate='$edate' && duration='$duration' && openings='$openings' && areas='$areas' && eligibility='$eligibility' && stipend='$stipend' && link='$link'";
	//echo mysql_num_rows(mysql_query($sql,$con));
	if(mysql_num_rows(mysql_query($sql,$con))>0)
		$counter=1;
	else
	{
	$sql="insert into intern values('$company','$location','$description','$edate','$duration','$openings','$areas','$eligibility','$stipend','$link')";
	mysql_query($sql,$con);
	
	/*echo "<script type='text/javascript'>\n";
	echo "alert('Successfully posted');\n";
	echo "</script>";*/
	$counter=2;
	//echo "qwerty";
	}
	//header('location:loggedin.php');
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
                        <h2>Post new Internship</h2><br>
                        <div id="next" style="font-size:15px;width:400px">
                        <?php if($counter==1){?>
                       <span style="letter-spacing:1px;text-align:center;color:#F00"><strong>*Duplicate Entry.</strong></span>
                        <?php }else if($counter==2){?>
                         <span style="letter-spacing:1px;text-align:center;color:#0F0;"><strong>*Successfully Posted.</strong></span>
                        <?php }
						$counter=0;
						?>
                        <br />
                        <br />
                        <form action="postint.php" method="POST">
<div style="width:400px;text-align:right;position:relative"><br />
<strong>University/Company:</strong>
<input size="35" type="text" name="company" required placeholder="company/university name"><br>
</div>
<div style="width:400px;text-align:right;position:relative"><br />
<strong>Location:</strong>
<input size="35" type="text" name="location" required placeholder="state,country"><br>
</div>
<div style="width:400px;text-align:right;position:relative"><br>
<strong>Description:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<textarea rows="5" cols="28" required="required" type="text" name="description" placeholder="description"></textarea><br>
</div>
<div style="width:400px;text-align:right;position:relative"><br />
<strong>Deadline:</strong>
<input size="35" type="date" name="edate" placeholder="last date for applying">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
</div>
<div style="width:400px;text-align:right;position:relative"><br />
<strong>Duration:</strong>
<input size="35" type="text" name="duration" placeholder="in weeks or months"><br>
</div>
<div style="width:400px;text-align:right;position:relative"><br />
<strong>seats:</strong>
<input size="35" type="text" name="openings" placeholder="seats available"><br>
</div>
<div style="width:400px;text-align:right;position:relative"><br />
<strong>Departments:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<textarea rows="5" cols="28" type="text" name="areas" placeholder="departments supported by the internship"></textarea><br>
</div>
<div style="width:400px;text-align:right;position:relative"><br />
<strong>Eligibility:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<textarea rows="5" cols="28" type="text" name="eligibility" required placeholder="eligibility criteria and qualifications"></textarea><br>
</div>
<div style="width:400px;text-align:right;position:relative"><br />
<strong>Stipend:</strong>
<input size="35" type="text" name="stipend" placeholder="if not available then write unpaid"><br>
</div>
<div style="width:400px;text-align:right;position:relative"><br />
<strong>Link:</strong>
<input size="35" type="text" name="link" placeholder="link of the source website"><br>
</div>
<div style="width:400px;text-align:right;position:relative"><br />
<input size="35" type="submit" name="postin" class="submit" value="post">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
</form>
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