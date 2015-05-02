<! DOCTYPE html>

<?php 
require_once('sportsfanConnect.php');?>

<html lang="en"> 
<link rel="stylesheet" type="text/css" href="style.css" media="screen">
<wrapper>  
	<body>
		<head>
		  <menu>
				<img src="thesportsfanicon.jpg" alt="The SportsFan" width="1000" height="180">
		  </menu> 	  
		  <meta charset="utf-8"> 
		  <meta name="The SportsFan Management System" content="TheSportsFan.com"> 
		  <title>The SportsFan</title>			  
		</head> 
	 	
	 	<nav>
	 	  <li><a href="SportsFanMainPage.php">Home</a></li>        
	     <li><a href="employees.php">Sales People Records</a></li>
	     <li><a href="suppliers.php">Supplier Records</a></li>
	     <li><a href="inventory.php">Inventory Records</a></li>
	     <li><a href="sales.php">Sales Records</a></li>
	     <li><a href="customers.php">Customer Records</a></li>	     
	   </nav>	     	   
<br>

<aside>
		<?php
			if ($_POST["searchSubmission"]== "All")
			{
				$sql = "SELECT * FROM suppliers";				
				$result = $conn->query($sql);	
					if($result != NULL)
					{
						echo"<table><tr><th>
						<h2>Supplier ID</th>
						<th><h2>Name</th></tr>";				
							while($row = $result->fetch_assoc())
							{								
								echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td></tr>";	
							}
								echo "</table>";
				   }
		  }elseif($_POST["searchSubmission"] == "Search")
		    {
						$sql = ("SELECT * FROM suppliers WHERE Name='".($_POST["searchValue"])."'");				
						$result = $conn->query($sql);	
					if($result != NULL)
					{
						echo"<table><tr><th>
						<h2>Supplier ID</th>
						<th><h2>Name</th></tr>";				
							while($row = $result->fetch_assoc())
							{								
								echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td></tr>";	
							}
								echo "</table>";
				   }
					else 
					{ echo "No such record exists.";
					}
			 }elseif($_POST["searchSubmission"] == "Add")
		    {
						?><h2> Adding a record? </h2>
							<p> To confirm the addition of a record to the database please fill out the 
							remaing fields and then select submit. <b>Please note that for quality assurance purposes all information from the previous page has been discarded.</b> 
							If you believe you have reached this form in error please select the <b>'Home'</b> link at the top of the page.</p> 
							
							<form action="entryConformationSalesPerson.php" method="post">
								Supplier ID: <input type="text" name="sID"><br><br>
								Supplier Name: <input type="text" name="name" ><br><br>
								<input type="submit" value="Submit">
							</form>	<?php	
			}else
		  {
				echo "No matches found";
		  }				 						 
		?>
</aside>
</wrapper>