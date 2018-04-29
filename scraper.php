<?php

	require_once('FirePHPCore/FirePHP.class.php');
	$word = $_GET['word'];

	$word = str_replace(" ", "-", $word);
	ob_start();
	if (file_get_contents("http://www.dictionary.com/browse/".$word."?s=t")) {
		$content = file_get_contents("http://www.dictionary.com/browse/".$word."?s=t");
		preg_match_all('/<span class="def-number">[0-9].<\/span>\s*<div class="def-content">(.*?)</s',
			$content,
			$matches);
		$result = exec("python parseText.py $matches[1]")
		$resultData = json_decode($result)
		echo $resultData
		/*send as argument ie python python.py message */
	} else {
		ob_end_clean();
		echo "";
	}


?>
