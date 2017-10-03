<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student reg. form</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="font-awesome/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<script src="js/jquery.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="js/jquery-ui.js" type="text/javascript" charset="utf-8" async defer></script>
	<script>
	  $( function() {
	    $( "#datepicker" ).datepicker();
	  } );
	  $( function() {
	    $( "#datepicker2" ).datepicker();
	  } );
  </script>
</head>
<body>
	<header>
		<div class="head sec-1">
			<div style="transform: skew(30deg); display: flex;justify-content: center;align-items: center;
			flex-direction: column;">
				<img src="img/1.png" alt="" style="width: 70px;height: 70px;">
				<h3 style="font-weight: 600;">Shyamoli Ideal Polytechnic Institute</h3>
				<div style="width: 200px;height: 2px;background-color:#11a5ef; "></div>
				<p>A Technical Education Institute</p>
			</div>
		</div>

		<div class="head sec-2">
			<div class="sub_div">
				<div class="school-info">
					<h4 style="font-weight: 600;letter-spacing: 1px;">Shyamoli Ideal Polytechnic Institute</h4>
					<p>14/26, Shahjahan Road, Town Hall(Near Kacha Bazar),<br> Mohammadpur, Dhaka-1207</p>
					<div style="width: 100%;height: 2px;background-color:#11a5ef;margin: 10px 0; "></div>
					<div>
						<span>Phone: 02-9133453</span>
						<span>Phone: 01711529418</span>
					</div>
					<span>E-mail: sipi_ac@yahoo.com</span>
					<span>Website(Official): www.sipi.edu.bd</span>
				</div>
				<div class="image">
					<div class="up-img">
						<h4>Photo</h4>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section id="main-body">
		<div class="container-fluid"><a href="list.php" style="width: 100px;"><h5 class="list_link" style="font-size: 17px;">Student's List</h5></a></div>
		<form action="store.php" method="post">
			<div class="body_heading">
				<div class="heading_text">
					<div class="sub-center">
						<div class="sl"></div>
						<div class="text">
							<h4 style="padding: 0;margin: 0;color: white;">Student Registration Form</h4>
						</div>
						<div class="sl"></div>
					</div>
				</div>
				<p style="text-align:center;letter-spacing: 1.5px; color:#11a5ef;">Please Fill the Gaps With Capital Letters</p>
			</div>

			<div id="date">
				<p>Please fill the submission date</p>
				<div class="date_div">
					<label for="date">Submit Date: </label>
					<input type="date" class="dr" id="datepicker" value="" name="submit_date" required>
				</div>
			</div>

			
			
			<div class="student-personal-info">
				<div class="Student-info">
					<div class="personal-info-heading">
						<div class="personal-info">
							<div class="p-info">
								<div class="info-text">
									<h4 style="padding: 0;margin: 0 50px;">personal informations</h4>
								</div>
								<div class="sll"></div>
							</div>
						</div>
						<p style="text-align:center;letter-spacing: 1.5px; color:#11a5ef; >">Please Fill the Gaps With Capital Letters</p>
					</div>
				

					<div class="personal-info-body">
						<div>
							<div>
								<label for="">Name: </label>
								<input type="text" class="ar" placeholder="Enter your Full name" name="student_name" required>
							</div>
								<br>
							<div>
								<label for="">Father Name: </label>
								<input type="text" class="ar" placeholder="Enter your father name" name="father_name" required>
							</div>
								<br>
							<div>
								<label for="">Mother Name: </label>
								<input type="text" class="ar" placeholder="Enter your mother name" name="mother_name" required>
							</div>
								<br>
							<div style="width: 100%; display: flex;justify-content: space-between; align-items: center;">
								<div>
									<label for="">Gender: </label>
									<input type="radio" name="student_gender" class="gender" " value="Male" required>
									<label for="">Male </label>
									<input type="radio" name="student_gender" class="gender" " value="Female" required>
									<label for="">Female</label>
								</div>
								<div>
									<label for="">Date of Birth: </label>
									<input type="date" class="dr" id="datepicker2" value="" name="birth_date" required>
								</div>
							</div><br>

							<div>
								<label for="">Religion: </label>
								<input type="text" class="ar" placeholder="Enter your religion" name="student_religion" required>
							</div>
								<br>
							<div style="display: flex;justify-content: space-between;width: 100%">
								<div class="wr">
									<label for="">Nationality: </label>
									<input type="text" class="ar" placeholder="Your Nationality" name="student_nationality" required>
								</div>
								<div class="wr">
									<label for="">National ID / Birth Reg No: </label>
									<input type="text" class="ar" placeholder="001122334455667788" name="ni_no" required>
								</div>
							</div>
								<br>
							<div style="display: flex;justify-content: space-between;width: 100%">
								<div class="wr">
									<label for="">SSC Roll No: </label>
									<input type="text" class="ar" placeholder="Enter your ssc roll no" name="ssc_roll" required>
								</div>
								<div class="wr">
									<label for="">SSC REG No: </label>
									<input type="text" class="ar" placeholder="Enter your ssc reg no" name="ssc_reg" required>
								</div>
							</div>
							<div>
								<label for="">CGPA: </label>
								<input type="text" class="ar" placeholder="Out of 5" name="ssc_cgpa" required>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="student-contact-info">
				<div class="contact-info-heading">
					<div class="personal-info">
						<div class="p-info">
							<div class="info-text">
								<h4 style="padding: 0;margin: 0 50px;">personal informations</h4>
							</div>
							<div class="sll"></div>
						</div>
					</div>
					<p style="text-align:center;letter-spacing: 1.5px; color:#11a5ef; >">Please Fill the Gaps With Capital Letters</p>
				</div>

				<div class="contact-info-body">
					<div>
						<div class="present address">
							<div>
								<label for="">Present Address: </label>
								<input type="text" class="ar" placeholder="Enter your present address info" name="pre_address" required>
							</div>
								<br>
							<div style="width: 100%;display: flex;justify-content: space-between;align-items: center;">
								<div>
									<label for="">City: </label>
									<input type="" class="ar" placeholder="" name="city_name" required>
								</div>
								<div>
									<label for="">State: </label>
									<input type="text" class="ar" name="state_name" required>
								</div>
								<div>
									<label for="">Zip Code: </label>
									<input type="text" class="ar" name="zip_code" required>
								</div>
								<div>
									<label for="">Country: </label>
									<input type="text" class="ar" name="country_name" required>
								</div>
							</div>
								<br>
							<div  style="width: 100%;display: flex;justify-content: space-between;align-items: center;">
								<div>
									<label for="">Student Phone: </label>
									<input type="text" class="ar" placeholder="+8801123456789" name="student_phone" required>
								</div>
								<div>
									<label>Guardian Phone: </label>
									<input type="text" class="ar" placeholder="+8801123456789" name="guardian_phone" required>
								</div>
								<div>
									<label for="">Student E-Mail: </label>
									<input type="text" class="ar" placeholder="@email.com" name="email_id" required>
								</div>
							</div>
						</div>
							<div class="br"></div>
						<div class="permanent address">
							<div>
								<label for="">Permanent Address: </label>
								<input type="text" class="ar" placeholder="Enter your permanent address info" name="per_address" required>
							</div>
								<br>
							<div style="width: 100%;display: flex;justify-content: space-between;align-items: center;">
								<div>
									<label for="">City: </label>
									<input type="" class="ar" placeholder="" name="per_city_name" required>
								</div>
								<div>
									<label for="">State: </label>
									<input type="text" class="ar" name="per_state_name" required>
								</div>
								<div>
									<label for="">Zip Code: </label>
									<input type="text" class="ar" name="per_zip_code" required>
								</div>
								<div>
									<label for="">Country: </label>
									<input type="text" class="ar" name="per_country_name" required>
								</div>
							</div>
								<br>
							<div  style="width: 100%;display: flex;justify-content: space-between;align-items: center;">
								
								<div>
									<label>Guardian Phone: </label>
									<input type="text" class="ar" placeholder="+8801123456789" name="per_guardian_phone" required>
								</div>
							</div>
						</div>
					</div>
				</div>			
			</div>

			<button class="btn-sub">Submit</button>
		</form>
	</section>

	<footer>
		<h5>We wish to all your success</h5>
	</footer>




</body>
</html>