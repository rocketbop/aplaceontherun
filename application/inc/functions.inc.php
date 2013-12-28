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

?>