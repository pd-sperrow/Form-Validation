

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
			<p style="text-align: center;">PHP File Input</p>
			<hr>

		<?php
	
			if(isset($_FILES["image"])){
				$file_name = $_FILES["image"]["name"];
				$file_tmp = $_FILES["image"]["tmp_name"];
				move_uploaded_file($file_tmp, "upload/".$file_name);
				echo "File Uploaded succesfully";
			}
		?>

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" >
			
			<table>
				<tr>
					<td>
						<input type="file" name = "image">
						<input type="submit" vlaue="submit">
					</td>
				</tr>
			</table>

		</form>
			

			
		</section>



		<footer>
			<p>&copy; pdsperrow95@gmail.com       &copy; sperrow</p>
		</footer>
	</div>
	

</body>
</html>