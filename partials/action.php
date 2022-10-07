
<?php
include 'db.php';

 

if(!empty($_POST)) {
    //echo $_POST['email'] . " - " . $_POST['password'];
	//if($_POST['email'] != $_POST['email']) {

        $sql = "INSERT INTO `users` (`email`, `password`) VALUES ('" . $_POST['email'] . "', '" . $_POST['password'] . "');";

        if (mysqli_query($conn, $sql)) {
            // echo '<script>
            // 		swal("Registration completed successfully");
            // 	  </script>';	
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);

    //} //else {
       // echo "Error ";
   // }
}

?>


<?php


// 	if(!$_POST['email'] == $_POST['email'] ) {
// 		if (!$_POST['password'] == $_POST['password']) {
// 			if($_POST['password'] > 8) {
// 				$sql = "INSERT INTO `users` (`email`, `password`) VALUES ('" . $_POST['email'] . "', '" . $_POST['password'] . "');";

// 				if (mysqli_query($conn, $sql)) {
// 					echo '<script>
// 							swal("Registration completed successfully");
// 						  </script>';	
// 				} else {
// 					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// 				}
// 				mysqli_close($conn);
// 			}
		
// 		}
	
// 	} else {
// 		echo "Error";
// 	}
    
// }

?>

	<form action="#" method="POST" class="form">
		<input type="email" name="email" class="point1" placeholder="Enter your email" required>
		<input type="text" name="password" class="point2" placeholder="Enter your password" required>
		<button type="submit" class="regist">Sign Up</button>
	</form>
