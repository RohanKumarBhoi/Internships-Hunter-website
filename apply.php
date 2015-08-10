<?php
session_start();
$con=mysql_connect("sql202.byethost12.com","b12_16055662","qwerty");
mysql_select_db("b12_16055662_InternshipHunters");
if($_SESSION['fname']==null ||$_SESSION['lname']==null||$_SESSION['email']==null)
{
	header('location:index.php');
}
if(isset($_POST['apply0']) && !empty($_POST['apply0']))
{
	$description=$_POST['description0'];
}
else if(isset($_POST['apply1']) && !empty($_POST['apply1']))
{
	$description=$_POST['description1'];
}
else if(isset($_POST['apply2']) && !empty($_POST['apply2']))
{
	$description=$_POST['description2'];
}
else if(isset($_POST['apply3']) && !empty($_POST['apply3']))
{
	$description=$_POST['description3'];
}
else if(isset($_POST['apply4']) && !empty($_POST['apply4']))
{
	$description=$_POST['description4'];
}
if(isset($description) && !empty($description))
{
	$con=mysql_connect("localhost","root","");
	mysql_select_db("bhuban");
	$sql="select * from intern where description='$description'";
	if(mysql_num_rows(mysql_query($sql,$con))>0)
	{
		$company=mysql_result(mysql_query($sql,$con),0,0);
		$location=mysql_result(mysql_query($sql,$con),0,1);
		$edate=mysql_result(mysql_query($sql,$con),0,3);
		$duration=mysql_result(mysql_query($sql,$con),0,4);
		$openings=mysql_result(mysql_query($sql,$con),0,5);
		$areas=mysql_result(mysql_query($sql,$con),0,6);
		$eligibility=mysql_result(mysql_query($sql,$con),0,7);
		$stipend=mysql_result(mysql_query($sql,$con),0,8);
		$link=mysql_result(mysql_query($sql,$con),0,9);
	}
}
else
header('location:loggedin.php');

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
                        <h2>Internship Details</h2><br><br />
                        <div class="entry">
                        <?php if($company!=null){?>
							<strong>Company/University:</strong><br>
							<div style="width:500px;position:relative;left:70px;word-wrap:normal">
							<?php echo $company?><br><br />
    						</div>
    					<?php }?>
  						<?php if($location!=null){?>
    						<strong>Location:</strong><br>
							<div style="width:500px;position:relative;left:70px;word-wrap:normal">
							<?php echo $location?><br><br />
    						</div>
    					<?php }?>
    					<?php if($description!=null){?>
    						<strong>Description:</strong><br>
							<div style="width:500px;position:relative;left:70px;word-wrap:normal">
							<?php echo $description?><br><br />
    						</div>
    					<?php }?>
    					<?php if($edate!=null){?>
    						<strong>Deadline:</strong><br>
							<div style="width:500px;position:relative;left:70px;word-wrap:normal">
							<?php echo $edate?><br><br />
    						</div>
    					<?php }?>
    					<?php if($duration!=null){?>
    						<strong>Duration:</strong><br>
							<div style="width:500px;position:relative;left:70px;word-wrap:normal">
							<?php echo $duration?><br><br />
    						</div>
    					<?php }?>
    					<?php if($openings!=null){?>
    						<strong>Openings:</strong><br>
							<div style="width:500px;position:relative;left:70px;word-wrap:normal">
							<?php echo $openings?><br><br />
    						</div>
    					<?php }?>
    					<?php if($areas!=null){?>
    						<strong>Branch:</strong><br>
							<div style="width:500px;position:relative;left:70px;word-wrap:normal">
							<?php echo $areas?><br><br />
    						</div>
    					<?php }?>
    					<?php if($eligibility!=null){?>
    						<strong>Eligibility:</strong><br>
							<div style="width:500px;position:relative;left:70px;word-wrap:normal">
							<?php echo $eligibility?><br><br />
    						</div>
    					<?php }?>
    					<?php if($stipend!=null){?>
    						<strong>Stipend:</strong><br>
							<div style="width:500px;position:relative;left:70px;word-wrap:normal">
							<?php echo $stipend?><br><br />
    						</div>
    					<?php }?>
    					<?php if($link!=null){?>
    						<strong>To apply <a href="<?php echo $link?>">click here</a></strong><br>
    						</div>
    					<?php }?>    
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