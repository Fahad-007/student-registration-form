<?php 
	require_once('db.php');
	$get_query = mysqli_query($connection,"SELECT * FROM student_info");

	$students = [];

	while ($row = mysqli_fetch_assoc($get_query)) {
		$students[] = $row;
	}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Student's List</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
 </head>
 <body>
 	<div class="container-fluid">
 		<div class="panel-body">
 			<h2>Student's List</h2>
 			<h4><a href="index.php">Student Registration Form</a></h4>
 		</div>

 		<div class="panel-body">
 			<div class="table_table">
	 			<table class="table table-hover table-inverse" name="members_info">
	 				<thead class="thead-inverse th_head">
	 					<tr>
							<th>SN</th>
							<th>Submit date</th>
							<th>Student name</th>
							<th>Father name</th>
							<th>Mother name</th>
							<th>Gender</th>
							<th>Religion</th>
							<th>Nationality</th>
							<th>NID No</th>
							<th>SSC Roll</th>
							<th>SSC Reg</th>
							<th>SSC CGPA</th>
							<th>Pre.Address</th>
							<th>City name</th>
							<th>State name</th>
							<th>Zip code</th>
							<th>Country</th>
							<th>Student phone</th>
							<th>Guardian phone</th>
							<th>Email id</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
	 				</thead>

	 				<tbody>
	 					<?php foreach ($students as $value) : ?>
	 						<tr>
								<td><?= $value['id']; ?></td>
								<td><?= $value['submit_date']; ?></td>
								<td><?= $value['student_name']; ?></td>
								<td><?= $value['father_name']; ?></td>
								<td><?= $value['mother_name']; ?></td>
								<td><?= $value['student_gender']; ?></td>
								<td><?= $value['student_religion']; ?></td>
								<td><?= $value['student_nationality']; ?></td>
								<td><?= $value['ni_no']; ?></td>
								<td><?= $value['ssc_roll']; ?></td>
								<td><?= $value['ssc_reg']; ?></td>
								<td><?= $value['ssc_cgpa']; ?></td>
								<td><?= $value['pre_address']; ?></td>
								<td><?= $value['city_name']; ?></td>
								<td><?= $value['state_name']; ?></td>
								<td><?= $value['zip_code']; ?></td>
								<td><?= $value['country_name']; ?></td>
								<td><?= $value['student_phone']; ?></td>
								<td><?= $value['guardian_phone']; ?></td>
								<td><?= $value['email_id']; ?></td>
								<td><a href="edit.php?id=<?= $value['id']; ?>"class="btn btn-sm btn-info">edit</a></td>
								<td><a onclick="return confirm('Are you sure')" href="list.php?idd= <?php echo $value['id']; ?>" class="btn btn-sm btn-danger">Delete</a></td>
							</tr>
							<?php 
								if (isset($_GET['idd'])) {
									$idd = $_GET['idd'];
									$result = $connection->query("DELETE FROM student_info WHERE id='$idd'");
									if ($result) {
										header("location: list.php");
									}else{
										?>
										<script>
											alert("Fail to delete data");
											window.location.herf='list.php';
										</script>
										<?php
									}
								}
							 ?>
						<?php endforeach; ?>
	 				</tbody>
	 			</table>
 			</div>
 		</div>
 	</div>
 </body>
 </html>