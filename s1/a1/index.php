<!DOCTYPE html>
<html>
<head>
	<title>Activity 1: Multidimensional Arrays</title>
</head>
<body>

	<?php 
		//Create the following multidimensional array below:

		/*
			Create a variable called "movies"
			Assign a multidimensional arrays below:

			Comedy => Pink Panther, Johny English, See No Evil Hear No Evil
			Action => Die Hard, Expendables
			Horror => Exorcist
			Romance => Romeo and Juliet

		*/


		$movies = array(
			array("Comedy", "Action", "Horror", "Romance" ),
			array("Pink Panther", "Johnny English", "See No Evil Hear No Evil"),
			array("Die Hard", "Expendables"),
			array("Exorcist"),
			array("Rome and Juliet")
		);

	 ?>

	 <table border="1">
	 	<thead>
	 		<tr>
	 			<th>Movie Title</th>
	 			<th>Category</th>
	 		</tr>
	 		
	 	</thead>
	 	<tbody>
	 		<tr>
	 			<td><?php echo $movies[1][0] ?></td>
	 			<td><?php echo $movies[0][0] ?></td>
	 		</tr>
	 		<tr>
	 			<td><?php echo $movies[1][1] ?></td>
	 			<td><?php echo $movies[0][0] ?></td>
	 		</tr>
	 		<tr>
	 			<td><?php echo $movies[2][0] ?></td>
	 			<td><?php echo $movies[0][1] ?></td>
	 		</tr>
	 		<tr>
	 			<td><?php echo $movies[2][1] ?></td>
	 			<td><?php echo $movies[0][1] ?></td>
	 		</tr>
	 		<tr>
	 			<td><?php echo $movies[3][0] ?></td>
	 			<td><?php echo $movies[0][2] ?></td>
	 		</tr>
	 		<tr>
	 			<td><?php echo $movies[4][0] ?></td>
	 			<td><?php echo $movies[0][3] ?></td>
	 		</tr>
	 		<tr>
	 			<td><?php echo $movies[1][2] ?></td>
	 			<td><?php echo $movies[0][0] ?></td>
	 		</tr>
	 	</tbody>

	 </table>
</body>
</html>