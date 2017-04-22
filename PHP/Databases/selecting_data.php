<?php
/*
* Selecting data from a database - procedural.
* This method can be used to execute scripts on a users machine if someone adds data to the database that is crafted to do so.
*/
$host = "localhost"; // Location of the server.
$username = "user"; // Username to access the db server.
$password = "toor"; // Password of the db server.
$database = "main_db"; // Specific database to run queries against.
$connection = mysqli_connect($host, $username, $password, $database); // Connect to the database.
if(mysqli_connect_errno()) { // Failed to connect to the database.
	echo "<br>Could not connect to the database: " . mysqli_connect_error(); // Output the error.
	die(); // Stop the script.
}
/*
* In the query below you may add WHERE statements and other SQL statements.
* Using this method to select data based on user input directly opens up this script to SQL injection.
* A simple SELECT statement with no filters was used here as just an example.
*/
$sql = "SELECT username, password, email, notes FROM table_name"; // Statement to execute against the database.
$result = mysqli_query($connection, $query); // Execute the query.
if(mysqli_num_rows($result) > 0) { // One or more rows were returned by the query.
	while($row = mysqli_fetch_assoc($result)) {
		// Output each row on a new line.
		echo "<br>Username: " $row["username"] . ", Password: " . $row["password"] . ", Email: " . $row["email"] . ", Notes: " . $row["notes"];
	}
	echo "<br>Query complete"; // Tell the user the query has finished returning results.
} else { // No rows were returned by the query.
	echo "<br>No results returned from the database."; // Tell the user nothing was returned.
}
mysqli_close($connection);

// -----

/*
* Selecting data from a database - procedural.
* Protected against running scripts on a users machine even if the data is specifically scoded to do so.
*/
$host = "localhost"; // Location of the server.
$username = "user"; // Username to access the db server.
$password = "toor"; // Password of the db server.
$database = "main_db"; // Specific database to run queries against.
$connection = mysqli_connect($host, $username, $password, $database); // Connect to the database.
if(mysqli_connect_errno()) { // Failed to connect to the database.
	echo "<br>Could not connect to the database: " . mysqli_connect_error(); // Output the error.
	die(); // Stop the script.
}
/*
* In the query below you may add WHERE statements and other SQL statements.
* Using this method to select data based on user input directly opens up this script to SQL injection.
* A simple SELECT statement with no filters was used here as just an example.
*/
$sql = "SELECT username, password, email, notes FROM table_name"; // Statement to execute against the database.
$result = mysqli_query($connection, $query); // Execute the query.
if(mysqli_num_rows($result) > 0) { // One or more rows were returned by the query.
	while($row = mysqli_fetch_assoc($result)) {
		// Output each row on a new line.
		$username_to_output = htmlspecialchars($row["username"]);
		$password_to_output = htmlspecialchars($row["password"]);
		$email_to_output = htmlspecialchars($row["email"]);
		$notes_to_output = htmlspecialchars($row["notes"]);
		echo "<br>Username: $username_to_output, Password: $password_to_output, Email: $email_to_output, Notes: $notes_to_output";
	}
	echo "<br>Query complete"; // Tell the user the query has finished returning results.
} else { // No rows were returned by the query.
	echo "<br>No results returned from the database."; // Tell the user nothing was returned.
}
mysqli_close($connection);

// -----

/*
* Selecting data from a database - object-oriented.
* This method can be used to execute scripts on a users machine if someone adds data to the database that is crafted to do so.
*/
$host = "localhost"; // Location of the database server.
$username = "user"; // Username to access the database server.
$password = "toor"; // Password to access the database server.
$database = "main_db"; // Specific database to run queries against.
$connection = new mysqli($host, $username, $password, $database); // Create a connection to the database.
if($connection -> connect_error) { // There was an error when connecting to the database.
	echo "<br>Could not connect to the database: " . $connection -> connect_error; // Tell the user that the connection failed.
	die(); // Kill the script.
}
$sql = "SELECT username, password, email, notes FROM table_name"; // Query to execute against the database.
$result = $connection -> query($sql); // Execute the query.
if($result -> num_rows > 0) { // One or more results were returned by the query.
	while($row = $result -> fetch_assoc()) { // Get each row of the query.
		// Output each row on a new line.
		echo "<br>Username: " $row["username"] . ", Password: " . $row["password"] . ", Email: " . $row["email"] . ", Notes: " . $row["notes"];
	}
} else { // No results were returned by the query.
	echo "<br>No results returned.";
}
$connection -> close(); // Close the database connection.

/*
* Selecting data from a database - object oriented.
* Protected against running scripts on a users machine even if the data is specifically scoded to do so.
* Prepared statements also protect you fromSQL injection, so it is best to use this when slecting data with user input.
* This is my preferred method of running any database queries.
*/
$host = "localhost"; // Location of the database server.
$username = "user"; // Username to access the database server.
$password = "toor"; // Password to access the database server.
$database = "main_db"; // Specific database to run queries against.
$connection = new mysqli($host, $username, $password, $database); // Create a connection to the database.
if($connection -> connect_error) { // There was an error when connecting to the database.
	echo "<br>Could not connect to the database: " . $connection -> connect_error; // Tell the user that the connection failed.
	die(); // Kill the script.
}
// Using a where clause to show how it works.
$sql = $connection -> prepare("SELECT username, password, email, notes FROM table_name WHERE username=?"); // Prepare the statement to execute against the database.
$searchFor = "user"; // The username to search for - prepared statements will only take parameters passed by reference.
$sql -> bind_params("s", $searchFor); // "s" means string. Set the parameters of the query.
$sql -> execute(); // Execute the query.
$sql -> bind_result($user, $pass, $email, $notes); // Set the variables to store the results of each row of the query.
$sql -> store_result(); // Store the query result.
if($sql -> num_rows > 0) { // One or more rows have been returned by the query.
	while($sql -> fetch()) { // Get each row of the query result.
		$user = htmlspecialchars($user); // Strip the result from HTML entities.
		$pass = htmlspecialchars($pass); // Strip the result from HTML entities.
		$email = htmlspecialchars($email); // Strip the result from HTML entities.
		$notes = htmlspecialchars($notes); // Strip the result from HTML entities.
		echo "<br>Username: $user, Password: $pass, Email: $email, Notes: $notes"; // Output the row.
	}
} else { // No data was returned by the query.
	echo "<br>No results found by the query.";
}
$sql -> close(); // Close the prepared statement.
$connection -> close(); // Close the connection to the database.
?>











