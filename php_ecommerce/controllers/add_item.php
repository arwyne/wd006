<?php 
	require './connection.php';

	$productName = addslashes(htmlspecialchars($_POST['productName']));
	$productPrice = htmlspecialchars($_POST['productPrice']);
	$productDescription = addslashes(htmlspecialchars($_POST['productDescription']));
	//addslashes() - adds a back slash of the double quote or single quote or apostrophe inside our string value
	//addcslashes() - 'I\t\'s\ m\e add backslash on all characters
	$category_id = 1;

	$image_name = $_FILES['productImage']['name']; //$_FILES -> used to get files on your formdata
	$image_tmp_name = $_FILES['productImage']['tmp_name']; //$_FILES -> used to get files on your formdata
	// determines in w/c the uploaded file was stored in the server, it includes temporary filename and its location.
	// This could be anywhere on your system, depending on your settings.
	
	$filepath = "../assets/images/" . $image_name;
	// var_dump($filepath);
	// path/filename -> temporary path, new_path/destination -> set the new path & prev name of the image.
	// moves the image that is temporarily stores in our server to the new path. 
	move_uploaded_file($image_tmp_name, $filepath);

	/*
		For the images:
		1. Get the image name
		2. Get the temp name
		3. Set the image file path
		4. Concatenate the file path and the image name, now this is for the DB
		5. Move the uploaded file inside the assets/images/
	*/

	// var_dump($productName);
	// var_dump($productPrice);
	// var_dump($productDescription);
	// var_dump($image_name);
	// var_dump($image_tmp_name);
	// var_dump($category_id);

	$product_query = "INSERT INTO products(name, price, description, image_path, category_id)
				VALUES ('$productName', $productPrice, '$productDescription', '$filepath', $category_id)";

	$result = mysqli_query($conn, $product_query);
	// var_dump($result); // boolean

	if ($result) {
		echo "added the product successfully!";
		header("Location: ../views/gallery.php");
	} else {
		echo mysqli_error($conn);
	}

// 
 ?>