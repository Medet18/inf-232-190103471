<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		function Even($a){
		
		
			$b = array();
			for ($i=0; $i < count($a); $i++) { 
				if($a[$i] % 2 == 0){
					$b[] = $a[$i]; 
				}
			}			
			return $b[];

		
		}
		Even([1,2,3,4,5,6,7,8]);
	?>

</body>
</html>