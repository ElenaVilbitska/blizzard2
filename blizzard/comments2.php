<?php
for ($i = 10; $i <= 20; $i++) {
	echo  "Check for {$i} ... ";
	if ($i % 3 == 0) {
		echo 'gotcha! ';
		break;
	}
	echo 'nope ';
}


