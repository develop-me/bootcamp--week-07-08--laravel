<?php
// database connection details
$db_server = "localhost";
$db_username = "root";
$db_password = "root";
$db_database = "scotchbox";

// Create connection
$db_connection = new mysqli($db_server, $db_username, $db_password, $db_database);

// Check connection
if ($db_connection->connect_error) {
    die("Connection failed: " . $db_connection->connect_error);
} 

// now get some data from database table
$query = 'SELECT * FROM animals';
$result = mysqli_query($db_connection, $query);
if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
        echo $row['name'];
        echo ' was born on ';
        echo $row['dob'];
        echo '<br>';
	}
}