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
c
		<?php
			if (!empty($_POST["cc"] && $_POST["name"] && $_POST["quantity"] && $_POST["wPrice"]&& $_POST["rPrice"]&& $_POST["sID"]))
			{
				$sql = "INSERT INTO items (ID, ItemName, Quantity, Wholesale_Price, Retail_Price, Supplier)
							VALUES (
										\"{$_POST["cc"]}\", 
										\"{$_POST["name"]}\",	
										\"{$_POST["quantity"]}\",
										\"{$_POST["wPrice"]}\",
										\"{$_POST["rPrice"]}\",
										\"{$_POST["sID"]}\"
										)";
										
				$result = $conn->query($sql);	
						
			}else{
			echo "Please try again later."; }								
		?>

<br>			   	         
	<main> <br>	<br><br><br>
		<body>
		  <h2> Your record has been successfully added to the database.  </h3> 		  
		</body>
	</main> 					
</form>     
<br> 

    <footer>                
	            Copyright © TheSportsFan.com
	        </footer>	         
	           <i> Need Help? Find us on<a href="url here">ScootsSoltuions.com </a> </i>         
	    </wrapper>
    </body>
</html>