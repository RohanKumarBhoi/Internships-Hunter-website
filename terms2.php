<?php
session_start();
	if($_SESSION['fname']==null ||$_SESSION['lname']==null||$_SESSION['email']==null)
{
	header('location:terms1.php');
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
                            <li><a href="http://www.INTERNSHIPS-HUNTER.com">INTERNSHIPS-HUNTER.com</a></li>
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
                        <h2>Terms and Conditions</h2><br>

<p>IN ORDER TO USE INTERNSHIPS-HUNTER.COM, YOU MUST AGREE TO ABIDE BY ALL OF THE TERMS AND CONDITIONS CONTAINED HERE. BY USING THIS WEB SITE, YOU ARE INDICATING YOUR ACCEPTANCE TO BE BOUND BY THE TERMS OF THESE TERMS AND CONDITIONS. WE ASK THAT YOU READ THIS AGREEMENT CAREFULLY BEFORE USING THE SITE. INTERNSHIPS-HUNTER.COM (THE "COMPANY") RESERVES THE RIGHT TO CHANGE THESE TERMS AND CONDITIONS AT ANY TIME BY UPDATING THIS DOCUMENT. VISIT THIS PAGE PERIODICALLY TO REVIEW THE TERMS AND CONDITIONS BECAUSE THEY ARE BINDING TO YOU. IF YOU DO NOT ACCEPT THESE TERMS AND CONDITIONS, DO NOT USE INTERNSHIPS-HUNTER.COM. THIS AGREEMENT APPLIES TO ALL INDIVIDUALS AND/OR ENTITIES ("YOU" AND "USER") ACCESSING THIS WEBSITE FOR ANY REASON. </p>
<p>Copyright</p> 

<p>Internships-Hunter.com is the owner of all intellectual property (including copyrights) on the Internships-Hunter.com site. You must retain all copyright, trademark, service-mark and other proprietary notices contained in the original Site Content on any copy you make of the Site Content. You may not sell or modify the Site Content or reproduce, display, publicly perform, distribute or otherwise use the Site Content in any way for any commercial purpose. You may not copy or adapt the HTML code that the Company creates to generate its pages as it is also protected by the Company's copyright. </p>
<p>Your Responsibilities </p>
<p>The Internships-Hunter.com site may be used for lawful purposes by employers seeking interns and students seeking internships. As a condition of your use, you agree to not use the site for any purpose or manner inconsistent with these terms and conditions. When using this site, you will not: </p>
<p>
1. Falsely represent yourself or another entity including but not limited to Internships-Hunter.com personnel and employer representatives.<br /> 
2. Post any inaccurate or false internship information.<br />
3. Post or transit any content that you do not have the right to transmit under contractual or fiduciary relationships (e.g. nondisclosure agreements). This also applies to content that may infringe any patent, trademark, trade secret, copyright or other proprietary rights ("Rights") of any party.<br />
4. Post or transmit unsolicited information (including but not limited to advertising, "spam", "pyramid schemes" or any other non-site-related information such as opinions or notices).<br />
5. Delete or revise any material posted by any other person or entity.<br />
6. Post to the database any franchise, pyramid scheme or other business opportunity requiring up front or periodic payment, pays only commissions with no significant salary, requires recruitment of other members, sub-distributors or sub-agents.<br />
7.Violate any applicable local, state, national or international law.<br />
8. Transmit or post any Content that is obscene, libelous, hateful, harmful, unlawful, threatening, abusive, harassing, tortious, defamatory, vulgar, sexually-explicit or otherwise objectionable that may invade another's right of privacy or publicity.<br />
9. Attempt to violate the security of the site including but not limited to a)accessing data not intended for the user by logging into an account that the user is not authorized to access b)attempting to probe, scan or test the vulnerability of a system or network or to breach security or authentication measure without prior authorization c) submitting a virus to the site or overloading, "mailbombing" or "crashing" and d)sending unsolicited email with the attempt to promote or advertise products or services. </p>
<p>Your Submissions </p>
<p>By submitting content to the site, public or non-public areas (including but not limited to forums, message boards, contests and chat rooms), you automatically grant Internships-Hunter.com the royalty-free, perpetual, irrevocable, sublicenseable, non-exclusive right (including any moral rights) and license to use, reproduce, modify, adapt, publish, distribute, create derivative works, perform and display such Content worldwide or to incorporate it in other works in any form, media, or technology now known or later developed, for the full term without restriction or reparation. You also warrant that any holders of rights (including moral rights) have completely waived these rights. You also permit any user to access, display, view, store and reproduce such content for personal use. In such a context, the owner of the content placed on the site retains any and all rights. </p>
<p>Your Information </p>
<p>When you register to use the site's services, you will be asked to provide the Company with a valid email address (Your "Information"). You understand and agree that the Company may disclose to third parties, on an anonymous basis, certain aggregate information contained in your registration. The Company will not disclose to any third party your name, address, email address or telephone number without your prior consent, except to comply with applicable laws or in legal proceedings where such information is relevant. The Company reserves the right to offer third party services and products to you based on your registration; such offers may be made by the Company or third parties. </p>
<p>THE COMPANY DOES NOT GUARANTEE THAT THE SITE WILL RUN ERROR-FREE OR FREE OF VIRUSES OR OTHER HARMFUL MECHANISMS. THE COMPANY IS NOT RESPONSIBLE FOR COSTS TO SERVICE OR REPLACE EQUIPMENT OR DATA AS A RESULT OF YOUR USE OF THE WEB SITE. </p>
<p>THE COMPANY DOES NOT PROVIDE WARRANTIES OF ANY KIND. THERE ARE NOT WARRANTIES MADE ABOUT THE ACCURACY, RELIABILITY, COMPLETENESS, OR TIMELINESS OF THE MATERIAL, SERVICES, SOFTWARE, TEXT, GRAPHICS, AND LINKS. IN NO EVENT SHALL THE COMPANY BE LIABLE FOR ANY DIRECT, INDIRECT, PUNITIVE, INCIDENTAL, SPECIAL OR CONSEQUENTIAL DAMAGES ARISING OUT OF OR IN ANY WAY CONNECTED WITH THE USE OF THIS SYSTEM OR WITH THE DELAY OR INABILITY TO USE IT (OR ANY LINKED SITES), OR FOR ANY INFORMATION, SOFTWARE, PRODUCTS AND SERVICES OBTAINED THROUGH THIS SYSTEM, OR OTHERWISE ARISING OUT OF THE USE OF THIS SYSTEM, THE INTERNET GENERALLY OR ON ANY OTHER BASIS (WHETHER BASED ON CONTRACT, TORT, STRICT LIABILITY OR OTHERWISE), EVEN IF Internships-Hunter.COM HAS BEEN ADVISED OF THE POSSIBILITY OF DAMAGES. </p>
<p>Content Monitoring </p>
<p>Internships-Hunter.com is under no obligation to monitor the information residing on or transmitted via this site. The Company reserves the right to modify, reject or eliminate any information residing on or transmitted to its site that it, in its sole discretion, believes is unacceptable or in violation of these terms and conditions. </p>
<p>Third-Party Links </p>
<p>The site contains links to third-party sites. These links are provided as a convenience to you and not as an endorsement by the Company. The Company is not responsible for the content of linked third-party sites and does not make any claims regarding the accuracy or materials or content on such third-party sites. You are at your own risk if you decide to access linked third-party sites. </p>
<p>Company Rights and Obligations </p>
<p>Internships-Hunter.com shall have the right to terminate your ability to access this site at any time without notice and to discontinue or modify any of the information contained on this site, or this service, at any time. Internships-Hunter.com shall have the right to modify these terms and conditions at any time. No waiver of any obligation or right of either party shall be effective unless in writing, executed by the party against whom it is being enforced. </p>
<p>General</p>
<p>Internships-Hunter.com makes no claim that its web site may be lawfully viewed or downloaded outside of the India. Access to the web site may not be legal by certain persons or in certain countries. If you access the web site outside of the India, you do so at your own risk and in compliance with the laws of your jurisdiction. Jurisdiction for any claims arising under this agreement shall lie exclusively with the state or federal courts within Minneapolis/St. Paul, Minnesota. If any provision of these Terms and Conditions are found to be invalid by any court having competent jurisdiction, the invalidity of such provision shall not affect the validity of the remaining provisions, which shall remain in full force and effect. These Terms and Conditions constitute the entire agreement between you and Internships-Hunter.com with respect to the use of the web site. </p>
<p>Additional Terms of Use </p>
<p>Certain areas of this web site are subject to additional terms of use. By using such areas, or any part thereof, you agree to be bound by the additional terms of use applicable to such areas. 
</p>
<p>Agreement </p>
<p>These terms represent the entire binding agreement between us, and our respective successors and assigns, and supersede any and all prior understanding, statements or representations, whether electronic, oral or written, regarding Internships-Hunter.com, its site or the information therein. A printed version of this Agreement and of any notice given in electronic form shall be admissible in judicial or administrative proceedings based upon or relating to this agreement to the same extent and subject to the same conditions as other business documents and records originally generated and maintained in printed form.</p>
                       	
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