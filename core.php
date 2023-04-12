<?php require 'inc/translate_lib.php'; ?>
<?php
	sleep(2); // Simulate a delay in getting the text
	$text = $_POST["text"]; // The text to return
	$lan = $_POST["lan"]; // The text to return
	// echo $text;
	// die();

	// Translate text from english to french.
	$result = $translate->translate($text, [
	    'target' => $lan
	]);
	echo ': '.$result['text'];
?>