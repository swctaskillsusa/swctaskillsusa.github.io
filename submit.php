<!DOCTYPE html>
<html lang="en">

	<head>

		<title>SkillsUSA - Submit </title>

			<meta name="description" content=" ">
			<meta name="viewport" content="width=device-width">
			<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
			<link rel='stylesheet' type='text/css' href='css/styles.css'/>
			<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Oswald' rel='stylesheet' type='text/css'>
			<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
			<script type="text/javascript" src="js/submit_validation.js"></script>

	</head>

	<body>

		<!--Header-->
		<div id="navwrapper">

			<div id="navtop">

				<ul class="menu">

					<li><a href="index.html" ><img src="images/skills.png" alt="home"> </a> </li>
					<li><a href="search.html" > SEARCH </a> </li>
					<li><a href="shop.html" > SHOP</a> </li>
					<li><a href="submit.php" > SUBMIT </a> </li>
					<li><a href="#" > ABOUT </a> </li>

				</ul>

			</div>

		</div>

		<!--Wrapper-->
		<div id="wrapper">

			<!--First-->
			<section id="fill">

				<div id="sub">

					<h1 class="lead">SUBMIT YOUR INFORMATION</h1>

					<form id="info-form" method="post" action="insert.php">

						<input id="nombre" class="oc" type="name" name="name" placeholder="  Name" required> </input>
						</br></br>
						<input id="numero" class="oc" type="id" name="id" placeholder="    ID#" required> </input>

							<select id="grado" class="oc" name="grade" required>

								  <option value="" default selected>Grade</option>
	  							  <option value="freshman">Freshman</option>
								  <option value="sophomore">Sophomore</option>
								  <option value="junior">Junior</option>
								  <option value="senior">Senior</option>

							</select>

							<select id="camisa" class="oc" name="shirtSize" required>

								  <option value="" default selected>Shirt Size</option>
	  							  <option value="small">Small</option>
								  <option value="medium">Medium</option>
								  <option value="large">Large</option>
								  <option value="x-large">X-Large</option>

							</select>
							</br></br>

							<select id="programa" class="oc" name="programArea" required>

								  <option value="" default selected>Program Area</option>
	  							  <option value="auto">Automotive</option>
								  <option value="culinary">Culinary</option>
								  <option value="dental">Dental</option>
								  <option value="engineering">Entertainment Engineering</option>
								  <option value="fashion">Fashion</option>
								  <option value="hospitality">Hospitality</option>
								  <option value="interior">Interior Design</option>
								  <option value="nursing">Nursing</option>
								  <option value="respiratory">Respiratory</option>
								  <option value="videogame">Video Game Design</option>
								  <option value="web">Web Design</option>

							</select>

							<select id="sexo" class="oc" name="sex" required>

								  <option value="" default selected>Sex</option>
	  							  <option value="male">Male</option>
	  							  <option value="female">Female</option>

							</select>

							<select id="chaqueta" class="oc" name="jacket" required>

								  <option value="" default selected>Jacket</option>
	  							  <option value=" ">Something</option>

							</select>
							</br></br>

							<select id="event" class="oc" name="skillsComp" required>

								  <option value="" default selected>Skills Competiton</option>
	  							  <option value=" ">3-D Visualization and Animation</option>
	  							  <option value=" ">Action Skills</option>
	  							  <option value=" ">Additive Manufacturing (Demonstration)</option>
	  							  <option value=" ">Advertising Design</option>
	  							  <option value=" ">Architectural Drafting</option>
	  							  <option value=" ">Audio/Radio Production</option>
	  							  <option value=" ">Automated Manufacturing Technology</option>
	  							  <option value=" ">Automotive Refinishing Technology</option>
	  							  <option value=" ">Automotive Service Technology</option>
	  							  <option value=" ">Aviation Maintenance Technology</option>
	  							  <option value=" ">Basic Health Care Skills</option>
	  							  <option value=" ">Broadcast News Production</option>
	  							  <option value=" ">Building Maintenance</option>
	  							  <option value=" ">Cabinetmaking</option>
	  							  <option value=" ">Career Pathways Showcase</option>
	  							  <option value=" ">Carpentry</option>
	  							  <option value=" ">CNC Milling Specialist</option>
	  							  <option value=" ">CNC Technician</option>
	  							  <option value=" ">CNC Turning Specialist</option>
	  							  <option value=" ">Collision Repair Technology</option>
	  							  <option value=" ">Commercial Baking</option>
	  							  <option value=" ">Community Action Project (Demonstration)</option>
	  							  <option value=" ">Computer Programming</option>
	  							  <option value=" ">Cosmetology</option>
	  							  <option value=" ">Crime Scene Investigation</option>
	  							  <option value=" ">Criminal Justice</option>
	  							  <option value=" ">Culinary Arts</option>
	  							  <option value=" ">Customer Service</option>
	  							  <option value=" ">Dental Assisting</option>
	  							  <option value=" ">Diesel Equipment Technology</option>
	  							  <option value=" ">Digital Cinema Production</option>
	  							  <option value=" ">Early Childhood Education</option>
	  							  <option value=" ">Electrical Construction Wiring</option>
	  							  <option value=" ">Electronics Technology</option>
	  							  <option value=" ">Employment Application Process</option>
	  							  <option value=" ">Engineering Technology/Design</option>
	  							  <option value=" ">Entrepreneurship</option>
	  							  <option value=" ">Esthetics</option>
	  							  <option value=" ">Firefighting</option>
	  							  <option value=" ">First Aid/CPR</option>
	  							  <option value=" ">Graphic Communications</option>
	  							  <option value=" ">Graphic Imaging Sublimation (Demonstration)</option>
	  							  <option value=" ">Health Knowledge Bowl</option>
	  							  <option value=" ">Health Occupations Professional Portfolio</option>
	  							  <option value=" ">Heating, Ventilation, Air Conditioning &amp; Refrigeration (HVACR)</option>
	  							  <option value=" ">Humanoid Robotics (Demonstration)</option>
	  							  <option value=" ">Industrial Motor Control</option>
	  							  <option value=" ">Information Technology Services (formerly Computer Maintenance)</option>
	  							  <option value=" ">Interactive Application and Game Development (Demonstration)</option>
	  							  <option value=" ">Internetworking</option>
	  							  <option value=" ">Major Appliance and Refrigeration Technology</option>
	  							  <option value=" ">Marine Service Technology</option>
	  							  <option value=" ">Masonry</option>
	  							  <option value=" ">Mechatronics</option>
	  							  <option value=" ">Medical Assisting</option>
	  							  <option value=" ">Medical Math</option>
	  							  <option value=" ">Medical Terminology</option>
	  							  <option value=" ">Mobile Electronics Installation (Demonstration)</option>
	  							  <option value=" ">Mobile Robotics Technology</option>
	  							  <option value=" ">Motorcycle Service Technology</option>
	  							  <option value=" ">Nail Care</option>
	  							  <option value=" ">Nurse Assisting</option>
	  							  <option value=" ">Outstanding Chapter</option>
	  							  <option value=" ">Photography</option>
	  							  <option value=" ">Pin Design</option>
	  							  <option value=" ">Plumbing</option>
	  							  <option value=" ">Power Equipment Technology</option>
	  							  <option value=" ">Practical Nursing</option>
	  							  <option value=" ">Principles of Engineering/Technology</option>
	  							  <option value=" ">Related Technical Math</option>
	  							  <option value=" ">Residential Systems Installation and Maintenance</option>
	  							  <option value=" ">Restaurant Service</option>
	  							  <option value=" ">Robotics: Urban Search and Rescue (Demonstration)</option>
	  							  <option value=" ">Robotics and Automation Technology</option>
	  							  <option value=" ">Screen Printing Technology</option>
	  							  <option value=" ">Sheet Metal</option>
	  							  <option value=" ">T-shirt Design</option>
	  							  <option value=" ">TeamWorks</option>
	  							  <option value=" ">Technical Computer Applications</option>
	  							  <option value=" ">Technical Drafting</option>
	  							  <option value=" ">Telecommunications Cabling</option>
	  							  <option value=" ">Television (Video) Production</option>
	  							  <option value=" ">Web Design</option>
	  							  <option value=" ">Welding</option>
	  							  <option value=" ">Welding Fabrication</option>
	  							  <option value=" ">Welding Art/Sculpture</option>
	  							  <option value="none">None</option>

							</select>
							</br></br>

							<select id="leadcomp" class="oc" name="leadComp" required>

								  <option value="" default selected>Leadership Competiton</option>
	  							  <option value=" ">American Spirit</option>
	  							  <option value=" ">Chapter Business Procedure</option>
	  							  <option value=" ">Chapter Display</option>
	  							  <option value=" ">Community Service</option>
	  							  <option value=" ">Extemporaneous Speaking</option>
	  							  <option value=" ">Job Interview</option>
	  							  <option value=" ">Job Skill Demonstration A</option>
	  							  <option value=" ">Job Skill Demonstration Open</option>
	  							  <option value=" ">Occupational Health and Safety</option>
	  							  <option value=" ">Opening and Closing Ceremonies</option>
	  							  <option value=" ">Prepared Speech</option>
	  							  <option value=" ">Promotional Bulletin Board</option>
	  							  <option value=" ">Quiz Bowl</option>
	  							  <option value="none">None</option>
	  							  
							</select></br></br>

							<input id="done" type="submit" value="SUBMIT">

					</form>



				</div>

			</section>
			<!--End First-->

	<!--Footer-->


</html>