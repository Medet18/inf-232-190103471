<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		function Even($a){
			$odds = array();
			$even = array();
			foreach($a as $val) {
			    if($val % 2 == 0) {
			        $even[] = $val;
			    } else {
			        $odds[] = $val;
			    }
			}

			sort($even);
			rsort($odds);

			$a = array();
			foreach($even as $key => $val) {
			    $array[] = $val;
			    if(isset($odds[$key])) {
			        $array[] = $odds[$key];
			    }
			}
		}

		Even([1, 2, 3, 4, 5, 6, 7, 8]);
	  ?>

</body>
</html>