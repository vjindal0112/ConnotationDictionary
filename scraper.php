<?php

	$city = $_GET['city'];

	$city = str_replace(" ", "-", $city);
	ob_start();
	if (file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest")) {
		$content = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
		preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</i', 
			$content, 
			$matches);
		echo $matches[1];
	} else {
		ob_end_clean();
		echo "";
	}


?>