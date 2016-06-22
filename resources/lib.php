<?php

/*
Home -> <i class='fa fa-home fa-1x'></i>
Who am I -> <i class='fa fa-question fa-1x'></i>
Languages -> <i class='fa fa-code fa-1x'></i>
Job Experience -> <i class='fa fa-briefcase fa-1x'></i>
Resume -> <i class='fa fa-paperclip fa-1x'></i>

So in all reality, I can have this in the HTML
<?echo $class->echoHeader(number of columns, name of section, number of slides)?>
in the PHP side I can do 
function createSection(numCols, sectionName, slideNum)

Colors: 
Blue: 0A8DFF;
Gray: 423E40;
Black: 333333;
White: F5F5F5;

Outside word cloud hobbies, in red B25550
Blue bar at bottom of each section
*/


class lib
{
	public function echoHeader($title)
	{
		echo
		"
		<html>
			<head>
				<title> $title </title>
				<!-- Custom Javascript -->
				<script src='resources/main.js'></script>
				<!-- Footer CSS -->
				<link rel='stylesheet' type='text/css' href='css/footer.css'>
				<!-- JQuery Google Library -->
				<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
				<!-- Fullpage CSS -->
				<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.css'>
				<!-- Fullpage JavaScript -->
				<script src='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.js'></script>
				<!-- Bootstrap CSS -->
				<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' 
				integrity='sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7' crossorigin='anonymous'>
				<!-- Bootstrap JavaScript -->
				<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js' 
				integrity='sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS' 
				crossorigin='anonymous'></script>
				<!-- Fontawesome CDN -->
				<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
				<!-- jQCloud JS -->
				<script src='https://cdnjs.cloudflare.com/ajax/libs/jqcloud/1.0.4/jqcloud-1.0.4.js'></script>
				<!-- jQCloud CSS -->
				<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jqcloud/1.0.4/jqcloud.css'>
				<!-- Footer CSS -->
				<link rel='stylesheet' type='text/css' href='css/footer.css'>
				<!-- Custom CSS -->
				<link rel='stylesheet' type='text/css' href='css/main.css'>
				<!-- Angular -->
				<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js'></script>
				<!-- Favicon Stuff -->
				<link rel='shortcut icon' href='img/light_bulb_off.ico' type='image/x-icon'>
				<link rel='icon' href='img/light_bulb_off.ico' type='image/x-icon'>
			</head>
			<body onload='init()'>
		";
	} //end echoHeader;

	//Generate navigation
	function echoNavBar()
	{
	echo "
		<nav class='navbar navbar-default navbar-fixed-top' id='menu' role='navigation'>
		  <div class='container-fluid'>
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class='navbar-header'>
		      <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'>
		        <span class='sr-only'>Toggle navigation</span>
		        <span class='icon-bar'></span>
		        <span class='icon-bar'></span>
		        <span class='icon-bar'></span>
		      </button>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
		      <ul class='nav navbar-nav'>
				<!-- <li class='pull-left'><a class='navbar-brand' href='index.php'>Matthew Reed</a></li> <!-- put the logo here-->
		        <li class='pull-left active' data-menuanchor='home'><a href='#home'> <i class='fa fa-home fa-1x'></i> Home</a></li>
		        <br>
		        <li data-menuanchor='who'><a href='#who'> <i class='fa fa-question fa-1x'></i> Who am I?</a></li>
		        <br>
		        <li data-menuanchor='skills'><a href='#skills'> <i class='fa fa-code fa-1x'></i> Skills</a></li>
		        <br>
				<!-- <li data-menuanchor='projects'><a href='#projects'> <i class='fa fa-terminal fa-1x'></i> Projects</a></li> -->
		        <br>
		        <li data-menuanchor='jobs'><a href='#jobs'> <i class='fa fa-briefcase fa-1x'></i> Job Experience</a></li>
		        <br>
				<li data-menuanchor='resume'><a href='#resume'> <i class='fa fa-paperclip fa-1x'></i> Resume</a></li>
				
				<!-- <button onClick='changeBackground()' type='button'> Change Background </button> -->


				<div class='footer-center navbar_bottom'>
					<div>
						<a href='https://www.linkedin.com/in/matthew-d-reed-a2b80757' id='indexEmail'> 
						<i class='fa fa-linkedin fa-2x'></i>
						<p>Connect on LinkedIn</p>
						</a>
					</div>

					<div>
						<i class='fa fa-phone fa-2x'></i>
						<p>+1 570 313 0983</p>
					</div>

					<div>
						<!-- <a id='indexEmail' href='#' onmouseover='openMail()'> 4/15/2016-->
						<i class='fa fa-envelope fa-2x'></i>
						<p>&#109;&#100;&#114;&#050;&#049;&#051;&#048;&#064;&#114;&#105;&#116;&#046;&#101;&#100;&#117;</p>
						<!-- </a> -->
					</div>

					<div>
						<i class='fa fa-github fa-2x'></i>
						<p>Find me on Git</p>
					</div>					
				</div>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		";
	} //end navbar

	function echoPageFooter($position)
	{
		if($position == "footer")
		{
			echo "
				<div id='$position' class='container-fluid'>
				    <div class='row-fluid'>
						<div id='footerContent' class='text-center'>
						</div>
				    </div> <!-- end row-fluid -->
				</div> <!-- end $position div -->
			";
		}

		else
		{
			echo "
				<div id='$position' class='container-fluid'>
				    <div class='row-fluid'>
						<div id='headerContent' class='text-center'>
						</div>
				    </div> <!-- end row-fluid -->
				</div> <!-- end $position div -->";
		}
	}

	function showPdf($pdfName)
	{
		$file = 'Matthew_Reed_Resume.pdf';
	  	$filename = 'Matthew_Reed_Resume.pdf';
	  	header('Content-type: application/pdf');
	  	header('Content-Disposition: inline; filename="' . $filename . '"');
	  	header('Content-Transfer-Encoding: binary');
	  	header('Accept-Ranges: bytes');
	  	@readfile($file); // See more at: http://yogeshchaugule.com/blog/2013/how-display-pdf-browser-php#sthash.OHY0ACfL.dpuf
	}


	function echoFooter()
	{
		echo "
		</body>
		</html>";
	}

} //end class
?>