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
				$sql = "SELECT * FROM sales ORDER by Date DESC";				
				$result = $conn->query($sql);	
					if($result != NULL)
					{
						echo"<table>
						<tr><th><h2>Invoice Number</th>
						<th><h2>Customer ID</th>
						<th><h2>Date of Sale</th>
						<th><h2>Item Purchased</th>
						<th><h2>Sales Person</th>
						<th><h2>Method of Payment</th></tr>";				
							while($row = $result->fetch_assoc())
							{								
								echo "<tr><td>".$row["InvNo"]."</td><td>".$row["Customer"]."</td><td>".$row["Date"]
								."</td><td>".$row["Item"]."</td><td>".$row["SalesPerson"]."</td><td>".$row["CashCredit"]."</td></tr>";		
							}
								echo "</table>";
					}
			 }elseif($_POST["searchSubmission"] == "Search")
		    {
					$sql = ("SELECT sales.InvNo, sales.Date, items.ItemName, customers.Name
								FROM sales, items, customers
								WHERE sales.Item = items.ID AND customers.CreditCardNumber=sales.Customer AND sales.InvNo='".($_POST["searchValue"])."'");				
					$result = $conn->query($sql);	
							if(!empty($result))
							{
								echo"<table>
								<tr><th><h2>Invoice Number</th>
								<th><h2>Date of Sale</th>
								<th><h2>Items Purchased</th>
								<th><h2>Customer Name</th></tr>";					
									while($row = $result->fetch_assoc())
									{								
										echo "<tr><td>".$row["InvNo"]."</td><td>".$row["Date"]."</td><td>".$row["ItemName"]
										."</td><td>".$row["Name"]."</td></tr>";		
									}
							echo "</table>";	
							}
							else 
							{ echo "No such record exists.";
							}
			 }		 						 
		?>
</aside>
</wrapper>