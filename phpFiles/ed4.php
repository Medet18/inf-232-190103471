<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Hello</h2>
	<?php

		function hasSpace($word){
			$a = 0;
			for ($i=0; $i < strlen($word); $i++) { 
				//$c = $word.charAt($i);
				// if(ctype_space($word)){
				// 	echo "true";
				// }
				if($word[$i] == " "){
					$a++;
				}
			}
			if($a > 0){
					echo "true";
				}
				else{
					echo "false";
				}
		}
		hasSpace("Fooo ");
	?>

</body>
</html>