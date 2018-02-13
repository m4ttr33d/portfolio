<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
		<title> Matthew Reed Portfolio </title>
		<!-- Custom Javascript -->
		<script src='js/main.js'></script>
		<!-- JQuery Google Library -->
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
		<!-- Bootstrap CSS -->
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' 
		integrity='sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7' crossorigin='anonymous'>
		<!-- Bootstrap JavaScript -->
		<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js' 
		integrity='sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS' 
		crossorigin='anonymous'></script>
		<!-- Fontawesome CDN -->
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
		<!-- Custom CSS -->
		<link rel='stylesheet' type='text/css' href='css/main.css'>
		<!-- Favicon Stuff -->
		<link rel='shortcut icon' href='img/1467686685.ico' type='image/x-icon'>
		<link rel='icon' href='img/1467686685.ico' type='image/x-icon'>
		<script src='//code.jquery.com/jquery-2.1.1.min.js'></script>
		<!-- Roboto Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:thin" rel="stylesheet">
		<!-- Oh, is that a footer? -->
		<link rel='stylesheet' href='css/footer-distributed.css'>
		<link rel='stylesheet' href='css/footer-distributed-with-contact-form.css'>
		<!-- Scroller JavaScript -->
		<script src='js/scrolling-nav.js'></script>
		<!-- Scroller jquery.easing.min.js -->
		<script src='js/jquery.easing.min.js'></script>
		<!-- Remodal -->
		<link rel="stylesheet" href="css/remodal.css">
		<link rel="stylesheet" href="css/remodal-default-theme.css">
	</head>
	<body onload="init()" data-spy="scroll" data-target=".navbar-fixed-top" >
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed pull-left " data-toggle="collapse" data-target="#navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="#home"> Matthew <strong> Reed </strong> </a>
				</div> <!--/.nav-collapse -->
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav nav-vertical-center">
						<li class="active"><a href="#home" class="page-scroll">Home</a></li>
						<li><a href="#skills" class="page-scroll">Skills</a></li>
						<li><a href="#experience" class="page-scroll">Experience</a></li>
						<li><a href="#projects" class="page-scroll">Projects</a></li>
					</ul>
				</div>				
			</div><!--/.container-fluid -->
		</nav>
		<div class="remodal-bg">
			<div class="cd-fixed-bg cd-bg-1 col-xs-12 text-center vertical-center" id="home">
				<div class="col-xs-4"></div>
				<div class="col-xs-4">
					<script src="js/typed.js"></script>
					<h1> Matthew Reed </h1>
					<h2> I am <div class="typed"></div></h2>
				</div>
				<div class="col-xs-4"></div>
			</div>
			<!-- Skills Section -->
			<div class="cd-scrolling-bg cd-bg-2 col-xs-12 text-center vertical-center" id="skills">
				<div class="col-lg-3 col-md-6 col-xs-12"><a href="#modal_database">
					<div id="database">
						<i class="fa fa-database fa-5x skillIcon" aria-hidden="true"></i>
						<h4> Database </h4>
					</div>
					<div class="skillsDesc remodal" data-remodal-id="modal_database">
						<button data-remodal-action="close" class="remodal-close"></button>
						<h3> Database </h3>
						<hr> 
						<ul class="list-unstyled">
							<li> SQL </li>
							<li> MySQL </li>
							<li> NoSQL </li>
							<li> Microsoft SQL Server </li>
							<li> MongoDB </li>
							<li> Pentaho </li>
							<li> Weka </li>
						</ul>
						<br>
						<button data-remodal-action="confirm" class="remodal-confirm">Close</button>
					</div>
				</div></a>
				<div class="col-lg-3 col-md-6 col-xs-12"><a href="#modal_server">
					<div id="server">
						<i class="fa fa-server fa-5x skillIcon" aria-hidden="true"></i>
						<h4> Server </h4>
					</div>
					<div class="skillsDesc remodal" data-remodal-id="modal_server">
						<button data-remodal-action="close" class="remodal-close"></button>
						<h3> Server-Side </h3>
						<hr> 
						<ul class="list-unstyled">
							<li> PHP </li>
							<li> Bash/Unix Shell </li>
							<li> Batch </li>
							<li> Node.js </li>
							<li> Coldfusion </li>
							<li> Amazon AWS </li>
							<li> IBM BlueMix </li>
						</ul>
						<br>
						<button data-remodal-action="confirm" class="remodal-confirm">Close</button>					
					</div>
				</div></a>
				<div class="col-lg-3 col-md-6 col-xs-12"><a href="#modal_code">
					<div id="code"> 
						<i class="fa fa-code fa-5x skillIcon" aria-hidden="true"></i>
						<h4> Code and Software</h4>
					</div>
					<div class="skillsDesc remodal" data-remodal-id="modal_code">
						<button data-remodal-action="close" class="remodal-close"></button>
						<h3> Code and Software </h3>
						<hr>
						<ul class="list-unstyled">
							<li> Java </li>
							<li> Python </li>
							<li> C#/.NET </li>
							<li> Visual Studio </li>
							<li> VIM </li>
							<li> GitHub </li>
							<li> Windows </li>
							<li> MacOS </li>
							<li> Linux/Unix </li>
							<li> iOS </li>
							<li> Android </li>
							<li> Google Apps </li>
							<li> Trello </li>
							<li> Slack </li>
							<li> Microsoft Office </li>
							<li> Apple Keynote </li>
						</ul>
						<br>
						<button data-remodal-action="confirm" class="remodal-confirm">Close</button>					
					</div>
				</div></a>
				<div class="col-lg-3 col-md-6 col-xs-12"><a href="#modal_front">
					<div id="desktop">
						<i class="fa fa-desktop fa-5x skillIcon" aria-hidden="true"></i>
						<h4> Front End </h4>
					</div>
					<div class="skillsDesc remodal" data-remodal-id="modal_front">
						<button data-remodal-action="close" class="remodal-close"></button>
						<h3> Front-End </h3>
						<hr>
						<ul class="list-unstyled">
							<li> HTML </li>
							<li> CSS </li>
							<li> JavaScript </li>
							<li> jQuery </li>
							<li> Angular </li>
						</ul>
						<br>
						<button data-remodal-action="confirm" class="remodal-confirm">Close</button>					
					</div>
				</div></a>
			</div>
			<!-- Another background -->
			<div class="cd-fixed-bg cd-bg-2 col-xs-12 text-center vertical-center">
				<div class="cd-container">
				</div>
			</div>
			<div class="cd-scrolling-bg cd-bg-2 col-xs-12 text-center" id="experience">
				<h2> Experience </h2>
				<hr>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<h3> Assistant SharePoint Administrator </h3>
					<h5> at </h5>
					<h4> The Huntzinger Management Group </h4>
					<h5> January 2017 </h5>
					<p>
						Renaming,restructuring,and performing other CRUD operations on
						3 collaboration sites for a national consulting firm using <skill>Sharepoint</skill>,
						<skill>Sharepoint API</skill>,<skill>Python</skill>, and<skill>Node.js</skill>.
					</p>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<h3> Software Engineer Summer Associate </h3>
					<h5> at </h5>
					<h4> HealthVerity </h4>
					<h5> May 2016 to August 2016 </h5>
					<p>
						Developing a <skill>Python</skill> based data supplier integration system, testing
						<skill>Java</skill> applications on <skill>AWS</skill>, and testing performance of code
						commited to GitHub as a member of the engineering team of a
						healthcare IT startup utilizing a <skill>UNIX/MacOS</skill> based environment.
					</p>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<h3> IT Capture and Development Intern </h3>
					<h5> at </h5>
					<h4> EDM Americas </h4>
					<h5> May 2014 - May 2016 </h5>
					<p>
					Developing file importer applications using <skill>C#/.NET</skill>, scripting <skill>SQL</skill> statements to perform ISO compliant operations, and preparing the files for use in internal and client-facing web portals based on <skill>AdobeColdFusion</skill>. Also redesigned the <skill>CSS</skill> in accordance with EDM standards for integration on all client-facing web portals.
					</p>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<h3> Information Technology Technician </h3>
					<h5> at </h5>
					<h4> CIAS at RIT </h4>
					<h5> August 2015 - Present </h5>
					<p>
					Solving advanced computer issues, aiding in server architecture and maintenance, IT aseet tracking, and providing technical support throughout the College of Imaging Arts and Sciences at Rochester Institute of Technology.
					</p>
				</div>
			</div>
			<!-- Another background -->
			<div class="cd-fixed-bg cd-bg-3 col-xs-12 text-center vertical-center">
				<div class="cd-container">
					<!-- words and things -->
				</div>
			</div>
			<div class="cd-scrolling-bg cd-bg-2 col-xs-12 text-center" id="projects">
				<h1> Projects </h1>
				<hr>
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6">
					<h3> EDM Portals </h3>
					<p> Internal portal for HR employees to view employee information and client-facing portal for clients to view and pay invoices.</p>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6">
					<h3>ActiviMe</h3>
					<p>
					Event presentation application developed and presented for a digital entrepreneurship class. Wireframes were developed, and a full
					application will be developed using a MEAN architecture. </p>
					</p>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6">
					<h3>PatientMed</h3>
					<p>
						PatientMed is a patient information viewing portal developed for a building a web business class. The user is able to store medical information
						in a secure location, that is also user friendly.
					</p>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6">
					<h3>RJK Photography</h3>
					<p>
						Portfolio photography website developed using modern web-design concepts as well as Flickr's REST API to provide a live feed and full-resolution versions
						of the photographs taken by the photographer.
					</p>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6">
					<h3>CampusMaps</h3>
					<p>
						Micro-navigational application developed and presented at ImagineRIT 2016 by the CampusMaps team. In addition to a user interface demo, the team also conducted market research, outlined next steps, and went through a product pitch in order to sell the application.
					</p>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6">
					<h3>Chattr</h3>
					<p>
						Lightweight and multilinguistic chat application built on IBM's Bluemix platform developed at BrickHack 2017. 
					</p>
				</div>			
			</div>
			<div class="cd-fixed-bg cd-bg-4 col-xs-12 text-center vertical-center" id="lastSection">
				<div class="cd-container">
					<!-- words and things -->
				</div>
			</div>
			<footer class="footer-distributed">

				<div class="footer-right">
					<a href="mailto:mdr2130@rit.edu"><i class="fa fa-envelope"></i></a>
					<a href="https://github.com/m4ttr33d"><i class="fa fa-github"></i></a>
					<a href="https://www.linkedin.com/in/matthew-d-reed-a2b80757/"><i class="fa fa-linkedin"></i></a>

				</div>
				<div class="footer-left">
					<p class="footer-links">
						<a href="#">Home</a>
						|
						<a href="#">Skills</a>
						| 
						<a href="#">Experience</a>
						|
						<a href="#">Projects</a>
					</p>
					<p>Matthew Reed &copy; 2017</p>
				</div>
			</footer>
			<script src="js/remodal.min.js"></script>
		</div>
	</body>