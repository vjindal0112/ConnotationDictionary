<?php

	$word = $_GET['word'];

	$word = str_replace(" ", "-", $word);
	ob_start();
	if (file_get_contents("http://www.dictionary.com/browse/".$word."?s=t")) {
		$content = file_get_contents("http://www.dictionary.com/browse/".$word."?s=t");
		preg_match_all('/<span class="def-number">[0-9].<\/span>\s*<div class="def-content">(.*?)</s',
			$content,
			$matches);
		$ex = "python parseText.py " . "\"stuff\"";
		$result = shell_exec($ex);
		// $result = shell_exec('ls');
		echo $result;

		// $nums = $_GET["nums"];
		// echo $nums[0]
	} else {
		ob_end_clean();
		echo "";
	}


?>
