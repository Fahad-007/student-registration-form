

 <?php
 	require_once("db.php");
	if(isset($_POST['search']))
	{
	    $search = $_POST['search'];

	    $query = "SELECT * FROM `student_info` WHERE CONCAT(`id`, `submit_date`, `student_name`, `father_name`, `mother_name`, `student_gender`, `birth_date`, `student_religion`, `student_nationality`, `ni_no`, `ssc_roll`, `ssc_reg`, `ssc_cgpa`, `pre_address`, `city_name`, `state_name`, `zip_code`, `country_name`, `student_phone`, `guardian_phone`, `email_id`, `per_address`, `per_city_name`, `per_state_name`) LIKE '%".$search."%'";
	    $search_result = filterTable( $query );
	    
	}
	 else {
	    $query = "SELECT * FROM `student_info`";
	    $search_result = filterTable( $query );
	}

	function filterTable($query)
	{
	    $connect = mysqli_connect( "localhost", "root", "", "student_registration" );
	    $filter_Result = mysqli_query( $connect, $query );
	    return $filter_Result;
	}

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Student's List</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://use.fontawesome.com/ceef24a5dc.js"></script>
 </head>
 <body>
 	<div class="container-fluid">
 		<div class="panel-body">
 			<h2>Student's List</h2>
 			<h4><a href="index.php">Student Registration Form</a></h4>

 			<div class="srch">
 				<form action="list.php" method="post">
 					<div class="input-group search-box">
	 					<input id="search" type="text" class="form-control search-input" name="search" placeholder="Name/Phone" style="margin: 0">
	 					<button type="button submit" class="submitbtn btn btn-default btn-xl">
				          	<i class="fa fa-search" aria-hidden="true"></i> Search 
				        </button>
 					</div>
 				</form>
 			</div>

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
	 					<?php while($row = mysqli_fetch_array($search_result)):?>
	 						<tr>
								<td><?php echo $row['id'];?></td>
                    			<td><?php echo $row['submit_date'];?></td>
                    			<td><?php echo $row['student_name'];?></td>
                    			<td><?php echo $row['father_name'];?></td>
								<td><?php echo $row['mother_name'];?></td>
								<td><?php echo $row['student_gender'];?></td>
								<td><?php echo $row['student_religion'];?></td>
								<td><?php echo $row['student_nationality'];?></td>
								<td><?php echo $row['ni_no'];?></td>
								<td><?php echo $row['ssc_roll'];?></td>
								<td><?php echo $row['ssc_reg'];?></td>
								<td><?php echo $row['ssc_cgpa'];?></td>
								<td><?php echo $row['pre_address'];?></td>
								<td><?php echo $row['city_name'];?></td>
								<td><?php echo $row['state_name'];?></td>
								<td><?php echo $row['zip_code'];?></td>
								<td><?php echo $row['country_name'];?></td>
								<td><?php echo $row['student_phone'];?></td>
								<td><?php echo $row['guardian_phone'];?></td>
								<td><?php echo $row['email_id'];?></td>
								<td><a href="edit.php?id=<?php echo $row['id'];?>"class="btn btn-sm btn-info">edit</a></td>
								<td><a onclick="return confirm('Are you sure')" href="list.php?idd= <?php echo $row['id'];?>" class="btn btn-sm btn-danger">Delete</a></td>
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
						 <?php endwhile;?>
	 				</tbody>
	 			</table>
 			</div>
 		</div>
 	</div>

 </body>
 </html>