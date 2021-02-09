<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		function isPolindrome($a){
			$b = (string)$a;
			$c = strrev($b);
			if($b == $c){
				echo "true";
			}
			else {
				echo "false";
			}
		}
		isPolindrome(444);#is not
	?>
</body>
</html>