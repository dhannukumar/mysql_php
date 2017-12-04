

<?php
		if (isset($_POST['submit'])){
		
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "mayank";
				$name = $_POST['name'];
				$roll = $_POST['roll'];	
				$class = $_POST['class'];
				if (empty($name)){
					$msg = "please enter your name";
				}
				else if (empty($roll)){
					$msg = "please enter your roll no";

				}
				else if (empty($class)){
					$msg = "please enter your class";
				}
				

				// Create connection
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				// Check connection
				if (!$conn) {
				    die("Connection failed: " . mysqli_connect_error());
				}

				$sql = "INSERT INTO dhannu (name, class, roll)
				VALUES ('$name', '$class', '$roll')";

				// if (mysqli_query($conn, $sql)) {
				//     echo "New record created successfully";
				// } else {
				//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				// }

				mysqli_close($conn);
						}
					?>

<html>
	<head>
		<title>Mysql</title>
		<style type="text/css">
			.moved{
				display: flex;
				justify-content: center;
				text-align: center;
				min-height: 100vh;
				align-items: center;

			}
			.mob{
				background-color: #bbb;
				width: 600px;
				height: 400px;
				margin: auto;
			}
			.main{
				width: 300px;
				height: 50px;
				text-align: center;
				margin-top: 20px;
				font-family: "ubuntu";
				font-size: 18px;
			}
			.main-2{
				width: 100px; 
				height: 35px;
				font-size: 20px;
				font-family: "ubuntu";
			}
			.main-2:hover {
				background-color: blue;
				cursor: pointer;
				

			}

		</style>
	</head>
	<body>
		
		

		<div class="moved">

		<form action="#" method="post" class="mob">
			<h1>Register form</h1>
		
			<input type="text" name="name" class="main" placeholder="Type your name......"><br><br>
			<input type="number" name="roll" class="main" placeholder="Type your roll no......"><br><br>
			<input type="text" name="class" class="main" placeholder="Type your class......"><br><br>

			<input type="submit" class="main-2" name="submit"><br>
			<p style="color: red; padding-top: 10px;"><?php 
				if (isset($msg)){
					echo $msg;
				}

			?>
			</p>
			
		</form>
	</div>
		
				
							
	</body>
</html>
