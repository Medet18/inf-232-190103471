<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		function largestSwap($a){
			$b = (string)$a;
			$c = strrev($b);
			if((int)$b >= (int)$c){
				echo "true";
			}
			else{
				echo "false";
			}
		}
		largestSwap(99);
	?>

</body>
</html>