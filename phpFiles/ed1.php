<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Edibet</h1>
	<?php
		function inches_to_feet($inches) {
			$a = 12;
			if($inches >= $a){
				return $inches / $a;
			}
			else{
				return 0;
			}
		}
		inches_to_feet(11);
	?>

</body>
</html>