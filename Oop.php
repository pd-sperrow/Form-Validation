

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
			<p style="text-align: center;">PHP OOP</p>
			<hr>


			<?php

			spl_autoload_register(function($class_name){
				include $class_name.".php";
			});
			
				// get_class() and __CLASS__ practice start
				class ChildClass extends Php{
					public function cms(){
						echo "childClass content and class name: ".__CLASS__."<br>";
						echo "childClass Function and class name: ".get_class($this)."<br>";
					}

					public function ourFramowk(){
						parent::framwork();
					}
				}

				$chclass = new ChildClass();

				$chclass->framwork();
				echo "<hr>";
				$chclass->cms();
				echo "<hr>";
				$chclass->ourFramowk();
				// get_class() and __CLASS__ practice close
				
				

			?>

		

			

			
		</section>



		<footer>
			<p>&copy; pdsperrow95@gmail.com       &copy; sperrow</p>
		</footer>
	</div>
	

</body>
</html>