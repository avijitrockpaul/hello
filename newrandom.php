<!DOCTYPE html>
<html>
<head>
	<style type="text/css">

	table,th,td    /*style of the table is created*/
	{
		border:1px solid black;
	}

	</style>
</head>
<body>                                  <!-- Body of the program -->
<form method="post" action="">          <!-- createing a form tag with method post -->
	<table>                             <!-- creating table -->
	<tr>
		<th>Name</th>   <!--Table header-->
		<th>Submit</th>
		</tr>
		<tr>
			<td><input type="text" name="name1" required></td>             <!-- Input text box to take input "name" -->
			<td><input type="submit" name="submit" value="submit"></td>    <!--Submit button-->
		</tr>
		<?php                             /*opening of php tag*/

			if(isset($_POST['submit']))    /*return a true value if it is set*/
			{
				$name=$_POST['name1'];    /*the name is stored*/

				$p= randomname($name);    /*calling function randomname() with $name parameter*/
			}
			else
			{
				$p= "empty!! put input in the above box & submit";
			}
			function randomname($name)    /*function randomname() with $name parameter*/
			{

				$num=rand(6,15);                         /*generation of random number range between 6 & 15 */
                                   
				$result=ucfirst($name)."&nbsp".$num;     /*here concatenate is done of $name and $num*/
				
				return $result;                          /*the result is returned to $p*/

			}


		?>
	</table>                   <!-- table tag is closed-->
	<br>
	<table>                    <!--New table is created for output-->
		
		<tr><th>Name Generated Number</th></tr>
		 
		 <tr><td><?php echo $p;?></td></tr>  <!-- print the output-->
	</table>
</form>
</body>
</html>
