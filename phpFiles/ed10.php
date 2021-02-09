<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		
	function reverseImage($image) {
		for ($i = 0; $i < count($image); $i++){
			for ($j = 0; $j < count($image[$i]);$j++){
				if ($image[$i][$j] == 0){
					$image[$i][$j] = 1;
				}
				else {
					$image[$i][$j] = 0;
				}
			}
		}
		
		echo $image;
	}
	reverseImage([
	  [1, 0, 0],
	  [0, 1, 0],
	  [0, 0, 1]
	]);
	?>

</body>
</html>
<!-- function reverseImage($image) {
	for ($i = 0; $i < count($image); $i++){
		foreach($image[$i] as $key => $value) {
			if ($value == 0) {
				$image[$i][$key] = 1;				
			} else {
				$image[$i][$key] = 0;
			}
		}
	}
	return $image;





	function reverseImage($image) {
	foreach ($image as $ak => $arr)
		foreach ($arr as $vk => $v)
			$image[$ak][$vk] = (int) !$v;
	
	return $image;




	function reverseImage($image) {
    $result = [];

    foreach ($image as $i => $subArray) {
        foreach ($subArray as $x => $v) {
            $result[$i][$x] = (int)!$v;
        }
    }

    return $result;
} -->