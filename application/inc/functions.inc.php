<?php

// Check credentials against db
function authenticateUser($username, $password) {
	try {
		$conn = new PDO('mysql:host=localhost;dbname=' . DB_DATABASE, DB_USER, DB_PASSWORD);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare('SELECT * FROM adminusers WHERE username = :username AND password = :password');
	    $stmt->execute(array(
	    	'username' => $username,
	    	'password' => $password)
	    );

	    //MySQL will only return a value if a match found.
	    if($row = $stmt->fetch()) {
	    	return true;
	    }
	}
	catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
}

function getTable() {
	try {
		$conn = new PDO('mysql:host=localhost;dbname=' . DB_DATABASE, DB_USER, DB_PASSWORD);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare('SELECT * FROM property
			LEFT JOIN house_type ON house_type.house_type_id = property.house_type_id
			LEFT JOIN address ON address.address_id = property.address_id
			LEFT JOIN county ON county.county_id = address.county_id');
	    $stmt->execute();

	    //MySQL will only return a value if a match found.
	    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	    return $results;
	    }
	catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
}

function validateSubmissionTried() {

	// $tried is hidden input, value only created after user tries to submit.
	@$tried = ($_POST['tried'] == 'yes');
	$submissionTried = (!empty($tried));

	return $submissionTried;
}

// Supress errors as function returns false if any index not found anyway
function validatePost() {
	@$addressLine1 = $_POST['address_line_1'];
	@$town = $_POST['town'];
	@$monetaryValue = $_POST['monetary_value'];

	$validated = (!empty($addressLine1) && !empty($town));

	return $validated;
}

function savePropertyDetails() {

	// Variables
	$addressLine1 = $_POST['address_line_1'];
	$addressLine2 = isset($_POST['address_line_2']) ? $_POST['address_line_2'] : ""; 
	$town = $_POST['town'];
	$county_name = $_POST['county_name'];
	$monetaryValue = $_POST['monetary_value'];
	$propertyImageName = basename( $_FILES['property_image']['name']);
	//temporaily use dummy info for county_id
	$countyId = 3;
	//$house_type = $_POST['house_type_name'];
	$houseTypeId = 4;
	$propertyIsSold = true;
	
	// Post all needed data to the address table and get the address_id back as need to post that to property table
	$insertedAddressId = saveAddress($addressLine1, $addressLine2, $town, $countyId);
	// Post data to the property table
	saveProperty($insertedAddressId, $houseTypeId, $monetaryValue, $propertyIsSold, $propertyImageName);
	header("Location: view.php");
}

function saveAddress($addressLine1, $addressLine2, $town, $countyId) {

	try {
		$conn = new PDO('mysql:host=localhost;dbname=' . DB_DATABASE, DB_USER, DB_PASSWORD);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare('INSERT INTO address (`address_line_1`, `address_line_2`, `town`, `county_id`)
			VALUES (:addressLine1, :addressLine2, :town, :countyId);');
		$stmt->bindParam(':addressLine1', $addressLine1, PDO::PARAM_STR);
		$stmt->bindParam(':addressLine2', $addressLine2, PDO::PARAM_STR);
		$stmt->bindParam(':town', $town, PDO::PARAM_STR);
		$stmt->bindParam(':countyId', $countyId, PDO::PARAM_INT);
		$stmt->execute();
		return $conn->lastInsertId('address_id');	
	}
	catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
}

function saveProperty($addressId, $houseTypeId, $monetaryValue, $propertyIsSold, $propertyImageName) {

	try {
		$conn = new PDO('mysql:host=localhost;dbname=' . DB_DATABASE, DB_USER, DB_PASSWORD);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare('INSERT INTO property (`address_id`, `house_type_id`, `monetary_value`, `property_is_sold`, `image_name`)
			VALUES (:addressId, :houseTypeId, :monetaryValue, :propertyIsSold, :imageName);');
		$stmt->bindParam(':addressId', $addressId, PDO::PARAM_INT);
		$stmt->bindParam(':houseTypeId', $houseTypeId, PDO::PARAM_INT);
		$stmt->bindParam(':monetaryValue', $monetaryValue, PDO::PARAM_INT);
		$stmt->bindParam(':propertyIsSold', $propertyIsSold, PDO::PARAM_INT);
		$stmt->bindParam(':imageName', $propertyImageName, PDO::PARAM_INT);
		$stmt->execute();	
	}
	catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}

}


?>