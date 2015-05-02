<?php
// Get a connection for the database
require_once('../connect.php');?>


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
	     <li><a href="#">Employee Records</a></li>
	     <li><a href="#">Supplier Records</a></li>
	     <li><a href="#">Inventory Records</a></li>
	     <li><a href="#">Sales Records</a></li>
	     <li><a href="#">Customer Records</a></li>
	   </nav>
	   
<br>			   	         
	<main>  	
		<body>
		<p>	
		
			<table style="width:70%">
			  <form action="action_page.php">
					<tr> 
						<td></td><td></td><td></td><td></td><td></td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></td><td></td><td></td><td></td></td><td></td><td><td></td><td></td><td></td></td><td></td><td></td><td></td>
						<td><section> 
								<select>				
								  <option value="formex.php">Add</option>
								  <option value="newrecord1.php">Edit</option>
								  <option value="query1.php">Search</option>				  
								</select>			
							</section></td>	
						<td>ID: <input type="text" name="ID" value="Mickey"></td>
						<td>Restrictions: <input type="text" name="lastname" value="Mouse"></td>
					</tr>
			</table>
		</p>
		</body>
<br><br>
	<input type="submit" value="Submit">
	<input type="reset" name="reset" value="Reset">
	</form>     
	                    
<br> <br> <br> <br> <br> <br>   
             
	        <footer>                
	            Copyright © TheSportsFan.com
	        </footer>
	         <p> 
	           <i> Need Help? Find us on<a href="url here">ScootsSoltuions.com </a> </i> 
           </p>
	        
	    </wrapper>
    </body>
</html>