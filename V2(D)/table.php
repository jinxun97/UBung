
<?php
//First, connect to the MySQL server.

$link = mysqli_connect("localhost", "root", "", "", "3306");
if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}

mysqli_select_db($link, "ubung") or die(mysqli_connect_error());

//Then, create a database named �mydatabase�.
$sql = "CREATE TABLE users (
  id INT NOT NULL AUTO_INCREMENT,
	username  VARCHAR(100),
	email  VARCHAR(100),
	password  VARCHAR(100),
	role VARCHAR(100),
	gender VARCHAR(100),
    PRIMARY KEY(id))";
	
	if (mysqli_query($link, $sql)) {
    echo "Table User created successfully\n";
} else {
    echo 'Error creating table: ' . mysqli_error($link) . "\n";
}

//And finally we close the connection to the MySQL server
mysqli_close($link);
?>
