<?php

function authenticateUser($username, $password) {
	$stmt = $conn->prepare('SELECT * FROM adminusers WHERE username = :username AND password = :password');
    $stmt->execute(array('id' => $id));
 
    while($row = $stmt->fetch()) {
        print_r($row);
    }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}






	echo "Hello";
}

?>