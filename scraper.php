<?php

	$word = $_GET['word'];

	$word = str_replace(" ", "-", $word);
	ob_start();
	if (file_get_contents("http://www.dictionary.com/browse/".$word."?s=t")) {
		$content = file_get_contents("http://www.dictionary.com/browse/".$word."?s=t");
		preg_match('/<span class="def-number">1.<\/span><div class="def-content">(.*?)</s',
			$content,
			$matches);
		echo $matches[1];
		/*send as argument ie python python.py message */
	} else {
		ob_end_clean();
		echo "";
	}


?>
