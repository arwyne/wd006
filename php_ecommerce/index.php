<?php 
	// PHP stands for PHP: Hypertext Processor
	// it allows devs to take what used to be
	// static html content and make it responsive
	// to user's requests, or do the same with permanently
	// stored data that resides in a database

	// to serve a project:
	// php -S address:port
	// php -S localhost:8000

	// to make our web server accessible by remote machines, serve it using 0.0.0.0
	// PHP -S 0.0.0.0:3000

	// echo "hello";		

	// the header function will redirect the user to the indicated path
	header('Location: ./views/register.php');



 ?>