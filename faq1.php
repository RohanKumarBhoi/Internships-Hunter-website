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
                        <h2>Frequently Asked Questions</h2><br>
 <p> <strong>1.What is an internship?</strong></p>
 <p>Internship is job or work experience in a project of a 
 company prior to your graduation from your college.It
 helps to improve your CV and many a companies takes
 in account of your intern certificates.</p>
 <p><strong>2.How to apply for internship?</strong></p>
 <p>Well,first of all you will have to login which will give you access to more information regarding applying for an internship.</p>
 <p><strong>3.How do I login?</strong></p>
 <p>   You must register yourself first to login.The sign up
   page demands your basic information to be stored in database
   for safe side.Later you can login through your created 
 account.     </p>
 <p><strong>4.What to do login?</strong></p>
 <p>   You can browse through various internship posts and apply 
    for them.You can also create a post.Also, you can change your personal details.</p>
    <p> 	<strong>5.What if I forget my password?</strong></p>
    <p>As your details are stored in our database.We demand your email
   id and phone number for your verification and send your
  password to your email id.</p>
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