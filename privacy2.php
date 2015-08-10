<?php
session_start();
	if($_SESSION['fname']==null ||$_SESSION['lname']==null||$_SESSION['email']==null)
{
	header('location:privacy1.php');
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
                        <h2>Privacy Policy</h2><br>
<p>Internweb.com has created this privacy statement to disclose its information gathering and dissemination practices for this website. </p>
<p><strong>User Data</strong></p>
<p>The Internship posting area of the site collects company and internship data, including personal information such as email addresses for storage in a searchable database. This data is not shared with any other entity. </p>
<p>We allow third-party companies to serve ads and/or collect certain anonymous information when you visit our web site. These companies may use non-personally identifiable information (e.g., click stream information, browser type, time and date, subject of advertisements clicked or scrolled over) during your visits to this and other Web sites in order to provide advertisements about goods and services likely to be of greater interest to you. These companies typically use a cookie or third party web beacon to collect this information. To learn more about this behavioral advertising practice or to opt-out of this type of advertising, you can visit <a href="http://www.networkadvertising.org/">www.networkadvertising.org. </a></p>
<p>User IP addresses are used in problem resolution and administration of the site. </p>
<p><strong>Links</strong></p>
<p>This site contains links to other sites; Internweb.com is not responsible for the privacy practices and/or the content of linked Web sites. </p>
<p><strong>Cookies</strong></p>
<p>The site uses cookies to facilitate ease of use of some areas, and to tailor content.</p>
<p>Internweb.com uses outside ad companies to display ads on the site. These ads may contain cookies. While Internweb.com uses cookies in some parts of the site, cookies received with banner ads are collected by the ad companies, and Internweb.com does not have access to this information. 
</p>
<p><strong>Contacting the Web Site</strong></p>
<p>Any questions about this privacy statement, the practices of this site, or your dealings with this Web site, can be directed to us via our <a href="contact1.php">contact us</a></p>                       	
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