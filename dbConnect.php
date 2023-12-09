<?php

function dbConnect() {
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'registration';

    // Create a connection to the database
    $connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    // Check if the connection was successful
    if (mysqli_connect_error()) {
        die('Database Error: ' . mysqli_connect_error());
    } else {
        return $connect;
    }
}


// function dbConnect() {
// 	$db_host = 'localhost';
// 	$db_user = 'root';
// 	$db_password = '';
// 	// $db_name = 'php_registration_form1';
// 	$db_name = 'registration';
	
// 	// mysqli_connect('localhost', 'root', ' ', 'php_registration_form');
// 	$connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);
	
// 	if (mysqli_connect_error($connect)) {
// 		// die('Database Error: '. mysqli_connect_error($connect));
// 		die('Database Error: ' . mysqli_connect_error($connect));
// 	}else {
// 		/* echo 'database connected successfully.';
// 		echo '<pre>';
// 		print_r($connect);
// 		echo '</pre>'; */
// 		return $connect;
// 	}
// }
?>