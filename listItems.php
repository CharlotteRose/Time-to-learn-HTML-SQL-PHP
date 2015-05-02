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
				$sql = "SELECT items.ID,items.ItemName,items.Quantity,items.Wholesale_Price,items.Retail_Price,suppliers.Name
							FROM items
							INNER JOIN suppliers
							ON items.Supplier=suppliers.ID
							ORDER BY suppliers.Name";				
				$result = $conn->query($sql);	
					if($result != NULL)
					{
						echo"<table>
						<tr><th><h2>Item Id</th>
						<th><h2>Item Name</th>
						<th><h2>Quantity on Hand</th>
						<th><h2>Wholesale Price</th>
						<th><h2>Retail Price</th>
						<th><h2>Item Supplier</th></tr>";				
							while($row = $result->fetch_assoc())
							{								
								echo "<tr><td>".$row["ID"]."</td><td>".$row["ItemName"]."</td><td>".$row["Quantity"]
								."</td><td>".$row["Wholesale_Price"]."</td><td>".$row["Retail_Price"]."</td><td>".$row["Name"]."</td></tr>";		
							}
								echo "</table>";
					}
		    }elseif($_POST["searchSubmission"] == "Add")
		    {
						?><h2> Adding a record? </h2>
							<p> To confirm the addition of a record to the database please fill out the 
							remaing fields and then select submit. <b>Please note that for quality assurance purposes all information from the previous page has been discarded.</b> 
							If you believe you have reached this form in error please select the <b>'Home'</b> link at the top of the page.</p> 
							
							<form action="entryConformationItems.php" method="post">
								Item ID: <input type="text" name="cc"><br><br>
								Item Name: <input type="text" name="name" ><br><br>
								Quantity Available: <input type="text" name="quantity" ><br><br>
								Wholesale Price: <input type="text" name="wPrice" ><br><br>
								Retail Price: <input type="text" name="rPrice" ><br><br>
								Supplier ID: <input type="text" name="sID" ><br><br>
								<input type="submit" value="Submit">
							</form>	<?php	
			}else 
				{ echo "No such record exists.";
				}			 			 						 
		?>
</aside>
</wrapper>