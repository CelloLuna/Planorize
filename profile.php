<!-- This page was completed by Caytlin Lindeland -->

<?php
	//Setting the page title
	$pageTitle = "Profile";

	//Include config
	include "config/core.php";

	//Include database connection
	include "config/database.php";

	//Include the Header
	include_once "headerLayout.php";
?>

	<!-- beginning of the three boxes -->
	<div class="row">
		<!-- User Information Box -->
		<div class="col-lg-6 mb-4">
			<div class="card shadow mb-4">
	            <div class="card-header py-3">
	                <h6 class="m-0 font-weight-bold text-primary">User Information</h6>
	            </div>
	            <div class="card-body">
	                <?php
	                	#$id = isset($_GET['ID']) ?$_GET['ID'] : die("ERROR: ID not found.");

	                	#View the user's data
	                	try
	                	{

	                		#Prepare select query
		                	$query = "SELECT DateOfBirth, Email, FirstName, ID, LastName, Password, PhoneNumber, RegDate, TimeZone, Username From Users WHERE ID = ? LIMIT 0,1";

		                	$stmt = $con -> prepare($query);
		                	$stmt -> bindParam(1,$id);

		                	#Execute the Query
		                	$stmt -> execute();

		                	#Store retrieved row to a variable
		                	$row = $stmt -> fetch(PDO::FETCH_ASSOC);

		                	#Values to fill up
		                	$DOB = $row["DateOfBirth"];
		                	$Email = $row["Email"];
		                	$FirstName = $row["FirstName"];
		                	$LastName = $row["LastName"];
		                	$Password = $row["Password"];
		                	$Phone = $row["PhoneNumber"];
		                	$TimeZone = $row["TimeZone"];
		                	$Username = $row["Username"];
		                	$RegDate = $row["RegDate"];

	                	}
	                	#Show any errors
	                	catch(PDOException $e)
	                	{
	                		die("Error: ".$e -> getMessage());
	                	}

	                ?>
	                <table class="table table-hover">
	                	<tr>
	                		<th>Username: </th>
	                		<td><?php echo $Username;?></td>
	                	</tr>
	                	<tr>
	                		<th>First Name: </th>
	                		<td><?php echo $FirstName;?></td>
	                	</tr>
	                	<tr>
	                		<th>Last Name: </th>
	                		<td><?php echo $LastName;?></td>
	                	</tr>
	                	<tr>
	                		<th>Birthday: </th>
	                		<td><?php echo $DOB;?></td>
	                	</tr>
	                	<tr>
	                		<th>Email: </th>
	                		<td><?php echo $Email;?></td>
	                	</tr>
	                	<tr>
	                		<th>Phone Number: </th>
	                		<td><?php echo $Phone;?></td>
	                	</tr>
	                	<tr>
	                		<th>Timezone: </th>
	                		<td><?php echo $TimeZone;?></td>
	                	</tr>
	                	<tr>
	                		<th>Member since: </th>
	                		<td><?php echo $RegDate;?></td>
	                	</tr>
	                </table>
	            </div>
	        </div>
	    </div>

	    <!-- Theme Selector Box -->
	    <div class="col-lg-6 mb-4">
			<div class="card shadow mb-4">
	            <div class="card-header py-3">
	                <h6 class="m-0 font-weight-bold text-primary">Theme Selector</h6>
	            </div>
	            <div class="card-body">
	                <div class="row">
	                	<div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    	<a href="#">THEME PIC</a>
                                    	<br>
                                    	<p>THEME NAME</p>
                                    </div>
                                </div>
                            </div>
                        </div>
	                </div>
	                <div class="row">
	                	
	                </div>
	                <div class="row">
	                	
	                </div>
	            </div>
	        </div>
	    </div>

        <!-- User Information box
        	As this is no longer going to be applied to the project, I'm commenting out this section
		<div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">UI Settings By Page</h6>
            </div>
            <div class="card-body">
                
            </div>
        </div>
        -->

    </div>

<?php
	//Include the footer
	include_once 'footerLayout.php';
?>