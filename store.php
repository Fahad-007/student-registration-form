<?php
require_once("db.php");

$submit_date = $_POST['submit_date'];
$student_name = $_POST['student_name'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$student_gender = $_POST['student_gender'];
$birth_date = $_POST['birth_date'];
$student_religion = $_POST['student_religion'];
$student_nationality = $_POST['student_nationality'];
$ni_no = $_POST['ni_no'];
$ssc_roll = $_POST['ssc_roll'];
$ssc_reg = $_POST['ssc_reg'];
$ssc_cgpa = $_POST['ssc_cgpa'];
$pre_address = $_POST['pre_address'];
$city_name = $_POST['city_name'];
$state_name = $_POST['state_name'];
$zip_code = $_POST['zip_code'];
$country_name = $_POST['country_name'];
$student_phone = $_POST['student_phone'];
$guardian_phone = $_POST['guardian_phone'];
$email_id = $_POST['email_id'];
$per_address = $_POST['per_address'];
$per_city_name = $_POST['per_city_name'];
$per_state_name = $_POST['per_state_name'];
$per_zip_code = $_POST['per_zip_code'];
$per_country_name = $_POST['per_country_name'];
$per_guardian_phone = $_POST['per_guardian_phone'];



$query = "INSERT INTO student_info(submit_date,student_name,father_name,mother_name,student_gender,birth_date,student_religion,student_nationality,ni_no,ssc_roll,ssc_reg,ssc_cgpa,pre_address,city_name,state_name,zip_code,country_name,student_phone,guardian_phone,email_id,per_address,per_city_name,per_state_name,per_zip_code,per_country_name,per_guardian_phone) values('{$submit_date}','{$student_name}','{$father_name}','{$mother_name}','{$student_gender}','{$birth_date}','{$student_religion}','{$student_nationality}','{$ni_no}','{$ssc_roll}','{$ssc_reg}','{$ssc_cgpa}','{$pre_address}','{$city_name}','{$state_name}','{$zip_code}','{$country_name}','{$student_phone}','{$guardian_phone}','{$email_id}','{$per_address}','{$per_city_name}','{$per_state_name}','{$per_zip_code}','{$per_country_name}','{$per_guardian_phone}')";


$insert = mysqli_query($connection,"INSERT INTO student_info(submit_date,student_name,father_name,mother_name,student_gender,birth_date,student_religion,student_nationality,ni_no,ssc_roll,ssc_reg,ssc_cgpa,pre_address,city_name,state_name,zip_code,country_name,student_phone,guardian_phone,email_id,per_address,per_city_name,per_state_name,per_zip_code,per_country_name,per_guardian_phone) values('{$submit_date}','{$student_name}','{$father_name}','{$mother_name}','{$student_gender}','{$birth_date}','{$student_religion}','{$student_nationality}','{$ni_no}','{$ssc_roll}','{$ssc_reg}','{$ssc_cgpa}','{$pre_address}','{$city_name}','{$state_name}','{$zip_code}','{$country_name}','{$student_phone}','{$guardian_phone}','{$email_id}','{$per_address}','{$per_city_name}','{$per_state_name}','{$per_zip_code}','{$per_country_name}','{$per_guardian_phone}')" );

if($insert){
	?>
		<script>
			alert("Successfully data inserted");
			window.location.href='list.php';
		</script>
	<?php
}else{
	echo "Sorry try again";
}