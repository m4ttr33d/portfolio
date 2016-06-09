<?include_once("resources/lib.php"); $class = new lib; echo $class->echoHeader("Matthew Reed Portfolio")?>
 	<?$class = new lib; echo $class->echoNavBar()?>
		<div id="fullpage">
			<!-- Section 0 -->
			<div class="section" id="homeSection">
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="col-xs-4"></div>
						<div class="col-xs-4">
							<div id="homeBox">
								<h2 class="text-center"> Matthew Reed </h2>
								<h3 class="text-center"> Developer <br> Photographer <br> Enthusiast </h3>
							</div>
						</div>
						<div class="col-xs-4"></div>
					</div> <!-- end row -->
				</div> <!-- end container fluid  -->
				<!-- Footer -->
				<? echo $class->echoPageFooter("footer") ?>
			</div> <!-- End section0--> 

			<!-- Section 1 -->
			<div class="section" id="whoSection">
				<!-- Header -->
				<? echo $class->echoPageFooter("header") ?>
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="col-xs-2">
						</div>
						<div class="col-xs-5" id="picture">
							<!-- <img src="img/DSC_0212.jpg" class="img-responsive" alt="One of my photos"> -->
							<img src="img/c7.jpg" class="img-responsive" alt="One of my photos">
						</div>
						<div class="col-xs-5">
							<p class="text-left"> My name is Matthew Reed and I am currently a 4th year Information Technology Student
								at Rochester Institute of Technology in Rochester, New York.
								My academics at R.I.T are as follows: </p>
								<ul>
									<li> Major: Information Technology </li>
									<li> Minor: Digital Business </li>
									<li> Concentration: Database and Database Application Development </li>
									<li> Projected Graduation: May 2017 </li>
								</ul>
								<p class="text-left">While studying and homework take up most of my time, I manage to find 
								free time to do some of the things I love: driving, cars, computer building, food tasting, photography (automotive and landscape), skiing,
								and playing golf. 
								If you would like to contact me, please send me an email using the email in the bottom left corner. Thank you. </p>
						</div>
					</div> <!-- end row -->
				</div> <!-- end container fluid  -->	
				<!-- Footer -->
				<? echo $class->echoPageFooter("footer") ?>
			</div> <!-- End section1-->  
						
			<!-- Section 2-->
			<div class="section" id="languagesSection">
				<!-- Header -->
				<? echo $class->echoPageFooter("header") ?>
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="col-xs-12">
							<div id="languageCloud" class="languageCloud"></div>
						</div>
					</div> <!-- end row -->
				</div> <!-- end container fluid  -->
				<!-- Footer -->
				<? echo $class->echoPageFooter("footer") ?>
			</div> <!-- End section2--> 

			<!-- Section 3 
			<div class="section" id="projectsSection"> <!-- one column for each job, so 3 at the moment-->
				<!-- Header 
				<? //echo $class->echoPageFooter("header") ?>
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="col-xs-3">
						</div>
						<div class="col-xs-3"id="jobfield">
							<!-- <img class="img-thumbnail" id="joblogo" src="img/EDM.png" alt="Rochester Institute of Technology">
							<h2 class="text-center">Culinary Artistry</h2>
							<h4 class="text-center"> <a target="_blank" href="http://matthewreed.tech/mgis360/CulinaryArtistry/"> Culinary Artistry </a> </h4>
						</div>			
						<div class="col-xs-3" id="jobfield">
							<!-- <img class="img-thumbnail" id="joblogo" src="img/EDM.png" alt="EDM Americas">
							<h2 class="text-center">Roux Academic</h2>
							<h4 class="text-center"> <a target="_blank" href="http://matthewreed.tech/mgis360/RouxAcademic/"> Roux Academic </a> </h4>
						</div>			
						<div class="col-xs-3" id="jobfield">
							<!-- <img class="img-thumbnail" id="joblogo" src="img/EDM.png" alt="The Home Depot">
							<h2 class="text-center">Final Project</h2>
							<h4 class="text-center"> <a class="text-center" href="http://patientmed.matthewreed.tech"> Final Project </a> </h4>
						</div>
					</div> <!-- end row 
				</div> <!-- end container fluid  	
				<? //echo $class->echoPageFooter("footer") ?>
			</div> <!-- End section3--> 

			<!-- Section 4 -->
			<div class="section" id="jobsSection"> <!-- one column for each job, so 3 at the moment-->
				<!-- Header -->
				<? echo $class->echoPageFooter("header") ?>
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="col-xs-3">
						</div>
						<div class="col-xs-3"id="jobfield">
							<!-- <img class="img-thumbnail" id="joblogo" src="img/EDM.png" alt="Rochester Institute of Technology"> -->
							<h2 class="text-center">CIAS at RIT</h2>
							<h4 class="text-center"> Employment Date: August 2015 - Present </h4>
							<h4 class="text-center"> Job Title: Lab Technician </h4>
							<p> I clean labs, attend to printers, solve technical issues, and make sure all equipment is accounted for at the end of the night in the College of Imaging Arts and Sciences at the Rochester Institute of Technology. </p>
						</div>			
						<div class="col-xs-3" id="jobfield">
							<!-- <img class="img-thumbnail" id="joblogo" src="img/EDM.png" alt="EDM Americas"> -->
							<h2 class="text-center">EDM Americas</h2>
							<h4 class="text-center"> Employment Date: May 2014 - Present </h4>
							<h4 class="text-center"> Job Title: Information Technology Development Intern </h4>
							<p>I shadow and work in the Information Technology Capture/Development department of the company. My responsibilities include usage of SQL and database queries, web development, application and software programming, and user interface front end. I work primarily with HTML, ColdFusion, C#, and SQL. I work in person when I am on break, and "remote" in when I am at RIT.</p>
						</div>			
						<div class="col-xs-3" id="jobfield">
							<!-- <img class="img-thumbnail" id="joblogo" src="img/EDM.png" alt="The Home Depot"> -->
							<h2 class="text-center">The Home Depot</h2>
							<h4 class="text-center"> Employment Date: May 2013 - August 2013 </h4>
							<h4 class="text-center"> Job Title: Cashier </h4>
							<p>Carried and processed customers transactions and helped customers satisfy their needs while maintaining exceptional customer service.</p>
						</div>
					</div> <!-- end row -->
				</div> <!-- end container fluid  -->	
				<!-- Footer -->
				<? echo $class->echoPageFooter("footer") ?>
			</div> <!-- End section 4--> 
						
			<!-- Section 5 -->
			<div class="section" id="resumeSection">
				<!-- Header -->
				<? echo $class->echoPageFooter("header") ?>
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="col-xs-4"></div>
						<div class="col-xs-4">
							<!-- Using PDFObject http://pdfobject.com/markup/ -->
							<object data="resources/Matthew_Reed_Resume.pdf" type="application/pdf" width="125%" height="90%">	 
							  <p> Hm. It seems you don't have a PDF Plugin for this Browser. However, you can
							  	also <a href="Matthew_Reed_Resume.pdf">click here to
							  download the PDF file.</a></p>
							</object>
						</div>
						<div class="col-xs-4"></div>
					</div> <!-- end row -->
				</div> <!-- end container fluid  -->
			</div> <!-- End section 5--> 
		</div> <!-- end fullpage -->
<?$class = new lib; echo $class->echoFooter()?>