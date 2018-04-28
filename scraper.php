<?php

	$city = $_GET['city'];

	$city = str_replace(" ", "-", $city);
	// ob_start();
	if (file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest")) {
		$content = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
		preg_match('/</span><p class="b-forecast__table-description-content"><span class="phrase">(.*?)</s',
			$content,
			$matches);
		echo $matches[1];
		/*send as argument ie python python.py message */
	} else {
		ob_end_clean();
		echo "";
	}


?>
