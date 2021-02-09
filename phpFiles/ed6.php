	<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		function sumOfCubes($nums){
			$a = 0;
			for ($i=0; $i < count($nums); $i++) { 
				$a += pow($nums[$i],3);
			}
			echo $a;
		}
		sumOfCubes([]);
	?>

</body>
</html>