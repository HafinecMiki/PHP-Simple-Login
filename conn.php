<?php
	//check if the database file exists and create a new if not
	if(!is_file('db/db_user.sqlite3')){
		file_put_contents('db/db_user.sqlite3', null);
	}
	// connecting the database
	$conn = new PDO('sqlite:db/db_user.sqlite3');
	//Setting connection attributes
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//Query for creating reating the user table in the database if not exist yet.
	$createDatabase = "CREATE TABLE IF NOT EXISTS user(id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username TEXT, password TEXT)";
	//Executing the query
	$conn->exec($createDatabase);
	// Insertion Data
	$checkData = "SELECT COUNT(*) as count FROM `user`";
	$check_stmt = $conn->prepare($checkData);
	$check_stmt->execute();
	$row = $check_stmt->fetch();
		
	$count = $row['count'];
		
	if(!$count){
		$insert = "INSERT INTO `user` (username, password) VALUES('admin1', 'password1'), ('admin2', 'password2')";
		$insert_stmt = $conn->prepare($insert);
		$insert_stmt->execute();
	}
	
?>