<?php
session_start();

$description = "Solomon Rubin: I am currently a student at Rochester Institute of Technology majoring in Computer Science. Throughout the last 6 years I have developed an  extensive skillset in Programming and System Administration with a particular focus on Linux tools and Web technologies. As my education continues my interests and skills develop exponentially.";

?>
<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Solomon Rubin</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<meta name="description" content="<?php echo $description; ?>" />
		<meta name="keywords" content="Solomon Rubin, Computer Science, Employment, Programming, System Administration, Development" />
		
		<meta property="og:title" content="Solomon Rubin" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://serubin.net/" />
		<meta property="og:description" content="<?php echo $description; ?>" />
		<meta property="og:image" content="http://serubin.net/images/preview.png" />
		
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/jquery-scrollspy.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="index">
	
		<!-- Header -->
		<header id="header" class="alt">
				<h1 id="logo"><a href="./" class="logo"><span>S</span>olomon Rubin</a></h1>
				<nav id="nav">
					<ul>
						<li id="welcome-nav"><a class="navscroll" href="#welcome">Welcome</a>
							<ul>
								<li><a class="scrolly" href="#intro">Introduction</a></li>
							</ul>
						</li>
						<li id="skills-nav"><a class="navscroll" href="#skills">Skills</a></li>
						<li id="experience-nav"><a class="navscroll" href="#experience">Experience</a></li>
						<li id="contact-nav"><a class="navscroll" href="#contact">Contact</a></li>
						<li><a href="https://github.com/Serubin" alt="Github" target="_blank" class="button special">Github</a></li>
					</ul>
				</nav>
			</header>	

		<!-- Banner -->		
			<section id="welcome" class="banner">
				<!--
					".inner" is set up as an inline-block so it automatically expands
					in both directions to fit whatever's inside it. This means it won't
					automatically wrap lines, so be sure to use line breaks where
					appropriate (<br />).
				-->
				<div class="inner wrapper">
					
					<header>
						<h2 class="logo"><span>S</span>olomon Rubin</h2>
					</header>
					<p>A portfolio for a highly skilled and experienced <br/>

					<b>Developer</b> and <b>System Administrator</b>

					</p>
					<footer>
						<ul class="buttons vertical">
							<li><a href="#intro" class="button fit scrolly">Learn more</a></li>
						</ul>
					</footer>
				
				</div>
				
			</section>
		<!-- Main -->
			<article id="intro" class="wrapper">

				<header class="special container" id="intro-inner">
					<span class="icon circle serubin"></span>
					<h2>Solomon Rubin</h2>
					
					<div class="rule"></div>

					<p>I am currently a student at <b>Rochester Institute of Technology</b> majoring in</br>
					<b>Computer Science</b>. Throughout the last 6 years I have developed an </br> 
						extensive skillset in <b>Programming</b> and <b>System Administration</b><br />
						with a particular focus on <b>Linux</b> tools and <b>Web</b> technologies. <br/>
					    As my education continues my interests and skills develop exponentially.
					 </p>
				</header>

			</article>

			<article id="skills" class="banner">
				<!-- Skills -->
				<div id="skills-inner">
					<section class="wrapper style2 container special">
							<header class="major">
								<h2><strong>Skills</strong></h2>
							</header>
						<div class="row 50%">
							<div class="4u 12u(2)">
							
								<section>
									<span class="icon featured fa-folder"></span>
									<header>
										<h3>Linux Administration</h3>
									</header>
									<ul>
										<li>5+ years experience</li>
										<li>Debian, RHEL, Arch</li>
										<li>Bash</li>
										<li>Databases</li>
										<li>Web Stacks</li>
									</ul>
								</section>
							
							</div>
							<div class="4u 12u(2)">
							
								<section>
									<span class="icon featured fa-cloud"></span>
									<header>
										<h3>Programming</h3>
									</header>
									<ul>
										<li>6+ years of experience</li>
										<li>C, Java, Python</li>
										<li>JavaScript, NodeJS</li>
										<li>HTML/CSS, PHP</li>
										<li>Git, SVN</li>
									</ul>
								</section>
							
							</div>
							<div class="4u 12u(2)">
							
								<section>
									<span class="icon featured fa-check"></span>
									<header>
										<h3>Employable</h3>
									</header>
									<ul>
										<li>Exceptional Reputation</li>
										<li>Excellent Communication Skills</li>
										<li>Valuable Teamwork skills</li>
										<li>Eager to learn</li>
										<li>Extremely Adaptable</li>
									</ul>
								</section>
							
							</div>
						</div>
					</section>
				</div>
				</article>

				<article>
				<!-- Examples -->
				<div id="experience">
					<section class="wrapper style3 container special">
						<header class="major">
							<h2><strong>Experience</strong></h2>
						</header>
						
						<div class="row">
							<div class="6u 12u(2)">
							
								<section>
									<a href="#" class="image featured"><img src="images/projects/mitll.png" height="300" alt="MIT Lincoln Lab" /></a>
									<header>
										<h3>MIT Lincoln Lab</h3>
									</header>
									<p>MIT Lincoln Lab is a research facility that is under contract of the US Department of Defense. I worked on several pieces of large scale projects during my time here. I was able to explore a large diversity of topics like machine learning and detection algorithms as well as high level parallel computing.</p>
									<p><small>Due to the nature of this work I can't provide examples of projects I worked on</small></p>
								</section>

							</div>
							<div class="6u 12u(2)">
							
								<section>
									<a href="#" class="image featured"><img src="images/projects/ritcat.png" height="300" alt="RIT ITS" /></a>
									<header>
										<h3>RIT ITS: End-Point Engineering</h3>
									</header>
									<p>As a part of the Endpoint Engineering team of RIT's Information Infrastructure I've balanced out a lot of my skills. I've explored new ideas and techniques in web application design as well as expand my system administration skills to Windows. Being able to work on projects that are relevant to my personal learning have been a huge asset in my growth.</p>
									<p><small>Due to the nature of this work I can't provide examples of projects I worked on</small></p>
								</section>

							</div>

						</div>
						<div class="row">
							<div class="4u 12u(2)">
							
								<section>
									<a href="#" class="image featured"><img src="images/projects/escapecraft.png" height="200" alt="" /></a>
									<header>
										<h3>Escapecraft</h3>
									</header>
									<p>Escapecraft is a Minecraft gaming community where I was able to work for 4 wonderful years. I was introduced to System Administration and helped to maintain live gaming servers with a very large player-base, experiencing working within a team on large scale projects.</p>
									<p>Project links: <a href="https://github.com/Serubin/SeruBans" alt="SeruBans" target="_blank">SeruBans (Java)</a>, <a href="https://github.com/Serubin/HatMe/" alt="HatMe" target="_blank">Hatme (Java)</a>, <a href="https://github.com/Escapecraft/EscapePlug" alt="EscapePlug" target="_blank">EscapePlugin (Java)</a></p>
								</section>

							</div>
							<div class="4u 12u(2)">
							
								<section>
									<a href="#" class="image featured"><img src="images/projects/serunified.png" height="200" alt="" /></a>
									<header>
										<h3>Serunified</h3>
									</header>
									<p>Serunified is the suite of websites I created in high school, it has been much more than a project. It's been a learning tool for many years. As I've grown it's grown. It's been the home to my PHP and JavaScript learning as ever line of code is my own.</p>
									<p>Project Links: <a href="https://github.com/Serubin/Serubin-net" alt="Serubin.net Source" target="_blank">Serubin.net</a>, More source code coming soon.</p>
								</section>

							</div>
							<div class="4u 12u(2)">
							
								<section>
									<a href="#" class="image featured"><img src="images/projects/mindcloud.png" height="200" alt="" /></a>
									<header>
										<h3>Mindcloud</h3>
									</header>
									<p>The Mindcloud project was one of the largest scale projects I've ever worked on. The goal of creating a social conversation framework was only a small piece. It tested everyone web techniques I have ever learned as well as pushing my time management and planning skills to a new limit.</p>
									<p>Project links: <a href="https://github.com/Serubin/Mindcloud" alt="Mindcloud Source" target="_blank">Source code</a>, <a href="https://mindcloud.io" alt="Mindcloud Website" target="_blank">Website</a></p>
								</section>

							</div>
						</div>

						<footer class="major">
							<ul class="buttons">
								<li><a href="#contact" class="button navscroll"> <strong>Let's </strong>talk</a></li>
							</ul>
						</footer>
					
					</section>
				</div>
					
			</article>

		<!-- Contact-->
			<section id="contact" class="banner wrapper">
				<header>
					<h2>Let's <strong>talk</strong></h2>
					<p>Send me an email</p>
				</header>
				<footer>
					<?php
						$name = "";
						$email = "";
						$subject = "";
						$message = "";


						if(isset($_REQUEST['action'])){
							require_once "./mail/mail.php";
							$mailer = new Mail();

							$action=$_REQUEST['action'];

							$error = false;

														if(isset($_REQUEST['name']))
								$name = $_REQUEST['name']; 
							if(isset($_REQUEST['email']))	
								$email=$_REQUEST['email'];
							if(isset($_REQUEST['subject']))
								$subject=$_REQUEST['subject']; 
							if(isset($_REQUEST['message']))
								$message=$_REQUEST['message']; 

							// Filled forms check
							if ($action !="" && ($name=="")||($email=="")||($subject=="")||($message=="")) { 
								echo "<p>All fields are required, please be sure everything is filled out correctly.</p>";
								$error = true;
							}

							// Captcha check
							if($action != "" && $_REQUEST['captcha'] != $_SESSION['captcha'] ) {
								echo "<p>Captcha mismatch: Are you sure you got that problem correct?</p>";
								$error = true;
							}

							// Mail if no error
							if ($action != "" && !$error) {               /* send the submitted data */ 
								$mail = $mailer->send($name, $email, $subject, $message);
								echo "<h2>Email sent! Send another?</h2>";
								
								// Clear fields
								$name = "";
								$email = "";
								$subject = "";
								$message = "";

							}
						}
					?>
					<form action="./#contact" method="POST" enctype="multipart/form-data">
						<div class="row 50%">
							<div class="6u 12u(3)">
							<input type="text" name="name" placeholder="Name" value="<?php echo $name ?>"/>
							</div>
							<div class="6u 12u(3)">
								<input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>"/>
							</div>
						</div>
						<div class="row 50%">
							<div class="12u">
								<input type="text" name="subject" placeholder="Subject" value="<?php echo $subject; ?>" />
							</div>
						</div>
						<div class="row 50%">
							<div class="12u">
								<textarea name="message" placeholder="Message" rows="7"><?php echo $message; ?></textarea>
							</div>
                        </div>
						<div class="row">
  	                        <div class="2u 6u(3)">
								<img src="/captcha/" class="noframe" alt="" id="captchaImage" />
							</div>
							<div class="7u 6u(3)">
                                <input type="text" placeholder="Answer" name="captcha" size="2" id="captchaInput"/>
							</div>
							<div class="2u 12u(3)">
								<ul class="buttons">
									<li><input style="min-width: 9em;" id="captchaReload" type="button" class="special" value="Reload?" /></li>
								</ul>
							</div>

                        </div>
						<div class="row">
							<div class="12u">
								<ul class="buttons">
									<li><input type="submit" class="special" value="Send Message" /></li>
								</ul>
							</div>
						</div>
						<input type="hidden" name="action" value="submit"> 
					</form>
				</footer>

			</section>

		<!-- Footer -->
			<footer id="footer">

				<ul class="buttons">
					<li style="padding:5px;"><a href="http://github.com/Serubin" alt="Github" target="_blank" class="button special"> <strong>Github</a></li>
					<li><a href="http://linkedin.com/in/serubin" alt="Linkedin" target="_blank" class="button special"> <strong>LinkedIn</a></li>
				</ul>

				<p class="copyright">
					Copyright © 2015 Serubin.net
					| Provided by <a href="http://Serubin.net" title="Serubin.net">Serubin.net</a>.
					| <a href="https://secure.serubin.net/login/privacy" rel="nofollow" target="_blank" title="Privacy Policy">Privacy Policy</a>
				</p>
				<p class="copyright">Modified by: <a href="http://serubin.net"> Solomon Rubin</a> | Original Design: <a href="http://html5up.net">HTML5 UP</a></p>
			
			</footer>
	</body>
</html>
