

<!DOCTYPE html>
<html>
<head>
	<title>PHP form validation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="super-container">
		<header class="header-option">

			<h2 class="header-text">PHP PRACTICE PAGE</h2>

		</header>


		<section class="mainbody">

			<hr>
			<p style="text-align: center;">PHP OOP Database Connection</p>
			<hr>


			<?php
			
				$db = new mysqli("localhost", "root", "", "img_store");

				if(mysqli_connect_errno()){
					echo "Connection fail....!";
					exit();
				} else{
					echo "Connection Succesfully...!";

				}

				//$sql = "select * from raw";
				// $sql = "update raw SET mobile='01710707768' where name='manisha'";
				// $result = $db->query($sql);
				// $sql = "select name, mobile from raw order by id";
				// $stamt = $db->prepare($sql);
				// $stamt->execute();
				// $stamt->bind_result($name, $mobile);

				// while($stamt->fetch()){
				// 	echo "<pre>";
				// 	echo $name." ".$mobile;
				// 	echo "</pre>";
				// }
				// 
				// $sql = "insert img( image ) value(?)";
				// $stmt = $db->prepare($sql);


				// $stmt->bind_param("b",$image);

				// $image= file_get_contents("bed.jpg");

				// $stmt->send_long_data(0, $image);
				// $stmt->execute();
				$sql = "select image from img where id=?";
				$stmt = $db->prepare($sql);
				$stmt->bind_param("i",$id);
				$id = 1;
				$stmt->execute();
				$stmt->bind_result($image);
				$stmt->fetch();
				header("content-type: jpg");


				echo '<img src="data:image/jpg;base64,'.base64_encode($image).'">';


			?>
		

			

			
		</section>



		<footer>
			<p>&copy; pdsperrow95@gmail.com       &copy; sperrow</p>
		</footer>
	</div>
	

</body>
</html>