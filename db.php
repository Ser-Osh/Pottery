<?php
	 $servername = "localhost";
	 $database = "authorization";
	 $email = "root";
	 $password = "";
	// // Создаем соединение
	 $conn = mysqli_connect($servername, $email, $password, $database);
	 // Проверяем соединение
	 if (!$conn) {
	 	die("Connection failed: " . mysqli_connect_error());
	 }
	 echo "Connected successfully";




