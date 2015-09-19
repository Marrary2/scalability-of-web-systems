<?php header('Content-Type: text/html; charset=utf-8'); // Make all the funky æøå possible, avoid mojibake!

	
	
	if(!isset($_COOKIE['jtni_counter'])) {
		setcookie('jtni_counter', 1);
		$counter = 1; // It's your first visit.
	}
	else {
		setcookie('jtni_counter', $_COOKIE['jtni_counter']+1);
		$counter = $_COOKIE['jtni_counter']+1;
	}
	
?>

<?php
	echo 'Number of visits: ', $counter;

	if($counter > 9 && $counter <= 19)
		echo '<br />', "Many visits, wøw!";
	elseif($counter >= 20 && $counter <= 49)
		echo '<br />', "Keep gøing...";
	elseif($counter >= 50 && $counter <= 99)
		echo '<br />', "...æxciting...";
	elseif($counter >= 100)
		echo '<br />', "Will there be a finål reward?";
	
?>
