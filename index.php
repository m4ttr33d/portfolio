<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <link rel=icon href=img/favicon.ico>
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
		<!-- Footer -->
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
				<div class="col-lg-4 col-md-6 col-xs-12"><a href="#modal_database">
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
							<li> OracleDB </li>
						</ul>
						<br>
						<button data-remodal-action="confirm" class="remodal-confirm">Close</button>
					</div>
				</div></a>
				<div class="col-lg-4 col-md-6 col-xs-12"><a href="#modal_server">
					<div id="server">
						<i class="fa fa-server fa-5x skillIcon" aria-hidden="true"></i>
						<h4> Server </h4>
					</div>
					<div class="skillsDesc remodal" data-remodal-id="modal_server">
						<button data-remodal-action="close" class="remodal-close"></button>
						<h3> Server/Web </h3>
						<hr> 
						<ul class="list-unstyled">
							<li> PHP </li>
							<li> Bash/Unix/CURL </li>
							<li> Batch </li>
							<li> Node.js </li>
							<li> Coldfusion </li>
							<li> Amazon AWS </li>
							<li> IBM BlueMix </li>
							<li> Oracle WebLogic </li>
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
				<div class="col-lg-4 col-md-6 col-xs-12"><a href="#modal_code">
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
							<li> Python/Jython </li>
							<li> Groovy </li>
							<li> Xtend </li>
							<li> C#/.NET </li>
							<li> Visual Studio </li>
							<li> VIM </li>
							<li> GIT </li>
							<li> Windows/MacOS </li>
							<li> Linux/Unix </li>
							<li> iOS/Android </li>
							<li> Slack </li>
							<li> Atlassian Suite </li>
							<li> XebiaLabs Software </li>
							<li> Jenkins </li>
							<li> Agile methodologies </li>
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
					<h3> Development Release Engineer </h3>
					<h5> at </h5>
					<h4> Paychex </h4>
					<h5> November 2017 - Present </h5>
					<p>
						Responsible for the accurate and timely release of software products into test and production environments, coordinating activities of internal teams such as Web Engineering, DBAs, Delivery, and Development to ensure accurate and timely software releases. Additionally, designing and optimizing processes to ensure software builds and artifacts are fast, automated, and reliable as well as ensuring availability of test environments for developer. Tools utilized - XebiaLabs Software, Jenkins, Oracle WebLogic, JIRA, Agile methodologies
					</p>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<h3> Software Engineer Summer Associate </h3>
					<h5> at </h5>
					<h4> HealthVerity </h4>
					<h5> May 2016 to August 2016 </h5>
					<p>
						Wrote a field-map generation script to automate and streamline the data-supplier integration process into the “de-identification” engine; performed testing, debugging, and code-optimization on the engine; administered and managed engine testing platforms to simulate real-world hardware and software configurations on Mac, Windows, and Linux-based Amazon AWS Instances.
					</p>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<h3> IT Capture and Development Intern </h3>
					<h5> at </h5>
					<h4> EDM Americas </h4>
					<h5> May 2014 - May 2016 </h5>
					<p>
						Developed file importer applications using C#/.Net, scripted SQL statements, prepared files for use in internal and client-facing web solutions in Adobe Coldfusion, re-designing production web portals in accordance with EDM Group standards, and maintaining ISO-9001 compliancy.
					</p>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<h3> Information Technology Technician </h3>
					<h5> at </h5>
					<h4> CIAS at RIT </h4>
					<h5> August 2015 - May 2017 </h5>
					<p>
						Solved complex hardware and networking issues, built and integrated servers into RIT’s infrastructure, and performed advanced technical problem solving within the College of Imaging Arts and Sciences at Rochester Institute of Technology.
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
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<h3> Paychex Releases </h3>
						<p> Lead the automation and timely delivery of major and minor releases; ensured the deliverables were fast, accurate and functional.</p>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<h3> Portfolio Website </h3>
						<p> Personal website using modern web-design concepts to showcase my development and automation capabilities. </p>
						</p>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<h3>Field-Map Automation</h3>
						<p>
							Python script written to streamline and automate the data-supplier integration process at HealthVerity.
						</p>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<h3>EDM Americas Portals</h3>
						<p>
							Two data pipelines and front-end interfaces for company stakeholders and 400+ clients to view and pay invoices online.
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