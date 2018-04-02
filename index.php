<?php
	$errname = $erremail = $errwebsite = $errcomment = $errgender = "";



	$name = $email = $website = $comment = $gender = "";
			

			if($_SERVER['REQUEST_METHOD'] == "POST"){

				if(empty($_POST["username"])){
					$errname = "Name is Requeird";
				} else{
					$name = validate($_POST["username"]);	
				}

				if(empty($_POST["email"])){
					$erremail = "email is Requeird";
				} elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ){
					$erremail = "<span style = 'color:red;'> Invalid Email Format.</span>";
				}
				else{
					$name = validate($_POST["email"]);	
				}

				if(empty($_POST["website"])){
					$errwebsite = "website is Requeird";
				} elseif (!filter_var($_POST["website"], FILTER_VALIDATE_URL) ){
					$errwebsite = "<span style = 'color:red;'> Invalid URL Format.</span>";
				}
				else{
					$name = validate($_POST["website"]);	
				}			

				if(empty($_POST["comment"])){
					$errcomment = "Comment is Requeird";
				} else{
					$name = validate($_POST["comment"]);	
				}	

				if(empty($_POST["gender"])){
					$errgender = "Gender is Requeird";
				} else{
					$name = validate($_POST["gender"]);	
				}		
			}

			function validate($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}


			// if($_SERVER['REQUEST_METHOD'] == "POST"){

			// 	echo "Name: ". $name."<br/>";
			// 	echo "Email: ". $email."<br/>";
			// 	echo "Website: ". $website."<br/>";
			// 	echo "comment: ". $comment."<br/>";
			// 	echo "Gender: ". $gender."<br/>";
			// }

?>

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
			<p style="text-align: center;">PHP form validation</p>
			<hr>

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<table>
				<p style="color: red;">* Requeird field</p>

				<tr>
					<td>Name </td>
					<td> <input type="text" name="username" placeholder="Your Name" >* <?php echo $errname; ?> </td>
				</tr>

				<tr>
					<td>Email </td>
					<td> <input type="text" name="email" placeholder=" example@mail.com" >* <?php echo $erremail; ?> </td>
				</tr>

				<tr>
					<td>Website Name</td>
					<td> <input type="text" name="website" placeholder="www.example.com" >* <?php echo $errwebsite; ?> </td>
				</tr>

				<tr>
					<td>Comment </td>
					<td> <textarea name="comment" id="simple" cols="30" rows="10" placeholder="write your comment" ></textarea>* <?php echo $errcomment; ?> </td>
				</tr>

				<tr>
					<td>Gender</td>
					<td>
						<input type="radio" name="gender" value="male">Male
						<input type="radio" name="gender" value="female">Female *<?php echo $errgender; ?>
					</td>
					
				</tr>

				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="submit">
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