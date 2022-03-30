<?php
for ($num1 = 1; $num1 <= 50; $num1++) {
	echo $num1;
	if ($num1 % 3 == 0 || preg_match('/3/', $num1)) {
		echo 'sample';
	}
	echo '<br>';
}
?>
