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
	 </body>	   	   
<br>			   	         
	<main>  	
		<body>
			<p>		
				  <form action="listSuppliers.php" method="POST">
					<tr> 
							<td>
								<select name="searchSubmission">				
								  <option value="All">List All</option>
								  <option value="Add">Add</option>
								  <option value="Edit">Edit</option>
								  <option value="Search">Search</option>				  
								</select>			
							</td>	
								<td>ID: <input type="text" name="searchValue" value=""></td>
								<td>Restrictions: <input type="text" name="lastname" value=""></td>
				     </tr>	
		     </p>
	   </body>
   </main>
      
	<main>
		<br><br>
		<input type="submit" value="Submit">
		<input type="reset" name="reset" value="Reset">
	</main>
	    <br><br><br>
		     <p><b>Notice:</b> To add an item into the records simply select <b>'Add'</b> from 
		     the drop down menu and select submit. You will then be redirected to another page and
		     prompted to confirm additions to the record system. </p>
  <footer>                
      Copyright © TheSportsFan.com
  </footer>
  
     <i> Need Help? Find us on<a href="url here">ScootsSoltuions.com </a> </i> 
		</form> 	
	</wrapper>
 </body>
</html>