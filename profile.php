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
	                	#$ID = isset($_GET['ID']) ?$_GET['ID'] : die("ERROR: User not found.");

	                	#View the user's data
	                	try
	                	{

	                		#Prepare select query
		                	$query = "SELECT ID, FirstName, LastName, Password, Username, Email, PhoneNumber, DateOfBirth, TimeZone, RegDate, Status From users";

		                	$stmt = $con -> prepare($query);

		                	#Execute the Query
		                	$stmt -> execute();

		                	#Store retrieved row to a variable
		                	$row = $stmt -> fetch(PDO::FETCH_ASSOC);

		                	#Values to fill up
		                	$Id = $row["ID"];
		                	$FirstName = $row["FirstName"];
		                	$LastName = $row["LastName"];
		                	$Password = $row["Password"];
		                	$Username = $row["Username"];
		                	$Email = $row["Email"];
		                	$Phone = $row["PhoneNumber"];
		                	$DOB = $row["DateOfBirth"];
		                	$TimeZone = $row["TimeZone"];
		                	$RegDate = $row["RegDate"];
		                	$Status = $row["Status"];

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
                            <div class="card shadow py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center" id="Amathyst">
                                    	<a href onClick='ChangeTheme("./css/Amathyst.css")'><img src="./img/Amethyst.png" alt="Theme titled Amathyst. Theme is shades of purple" height="75" width="125"></a>
                                    	<br>
                                    	<figcaption style="text-align: center;">Amathyst</figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    	<a href onClick='ChangeTheme("./css/Beloved.css")'><img src="./img/Beloved.png" alt="" height="75" width="125"></a>
                                    	<br>
                                    	<figcaption style="text-align: center;">Beloved</figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    	<a href onClick='ChangeTheme("./css/Blue-Green.css")'><img src="./img/Blue-Green.png" alt="" height="75" width="125"></a>
                                    	<br>
                                    	<figcaption style="text-align: center;">Blue-Green</figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>
	                </div>
	                <div class="row">
	                	<div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    	<a href onClick='ChangeTheme("./css/CherryTomato.css")'><img src="./img/CherryTomato.png" alt="" height="75" width="125"></a>
                                    	<br>
                                    	<figcaption style="text-align: center;">Cherry Tomato</figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    	<a href onClick='ChangeTheme("./css/Cotton_Candy.css")'><img src="./img/Cotton_Candy.png" alt="" height="75" width="125"></a>
                                    	<br>
                                    	<figcaption style="text-align: center;">Cotton Candy</figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    	<a href onClick='ChangeTheme("./css/Dusk.css")'><img src="./img/Dusk.png" alt="" height="75" width="125"></a>
                                    	<br>
                                    	<figcaption style="text-align: center;">Dusk</figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>
	                </div>
	                <div class="row">
	                	<div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    	<a href onClick='ChangeTheme("./css/Garnet.css")'><img src="./img/Garnet.png" alt="" height="75" width="125"></a>
                                    	<br>
                                    	<figcaption style="text-align: center;">Garnet</figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    	<a href onClick='ChangeTheme("./css/LandSea.css")'><img src="./img/LandSea.png" alt="" height="75" width="125"></a>
                                    	<br>
                                    	<figcaption style="text-align: center;">Land and Sea</figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    	<a href onClick='ChangeTheme("./css/Mystery.css")'><img src="./img/Mystery.png" alt="" height="75" width="125"></a>
                                    	<br>
                                    	<figcaption style="text-align: center;">Mystery</figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>
	                </div>
	                <div class="row">
	                	<div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    	<a href onClick='ChangeTheme("./css/Summer_Special.css")'><img src="./img/Summer_Special.png" alt="" height="75" width="125"></a>
                                    	<br>
                                    	<figcaption style="text-align: center;">Summer Special</figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    	<a href onClick='ChangeTheme("./css/Sunshine.css")'><img src="./img/Sunshine.png" alt="" height="75" width="125"></a>
                                    	<br>
                                    	<figcaption style="text-align: center;">Sunshine</figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    	<a href onClick='ChangeTheme("./css/Under_the_Waves.css")'><img src="./img/Under_the_Waves.png" alt="" height="75" width="125"></a>
                                    	<br>
                                    	<figcaption style="text-align: center;">Under The Waves</figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <script type="text/javascript">
    	function ChangeTheme(){
    		document.getElementById('Amathyst').setAttribute('href');
    		document.getElementById('Beloved').setAttribute('href');
    		document.getElementById('Blue-Green').setAttribute('href');
    		document.getElementById('CherryTomato').setAttribute('href');
    		document.getElementById('Cotton_Candy').setAttribute('href');
    		document.getElementById('Dusk').setAttribute('href');
    		document.getElementById('Garnet').setAttribute('href');
    		document.getElementById('LandSea').setAttribute('href');
    		document.getElementById('Mystery').setAttribute('href');
    		document.getElementById('Summer_Special').setAttribute('href');
    		document.getElementById('Sunshine').setAttribute('href');
    		document.getElementById('Under_the_Waves').setAttribute('href');
    	}
    </script>

<?php
	//Include the footer
	include_once 'footerLayout.php';
?>
