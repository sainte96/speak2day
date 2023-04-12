<?php 
	require 'vendor/autoload.php';

	use Google\Cloud\Translate\V2\TranslateClient;

	$translate = new TranslateClient([
	    'key' => 'AIzaSyCj1Lk6Qwn2g80PDtNlMQGdeJBrUNV_5zM'
	]);

	if (isset($_POST['submit'])) {
        extract($_POST);
		// $result = $translate->detectLanguage('Mo ni fe e');
		$result = $translate->detectLanguage($sourcelanguage);

		$languageCode = $result['languageCode'];
		$languages = $translate->localizedLanguages();

		foreach ($languages as $language) {
		    if ($language['code']== $languageCode) {
		        $languagename= $language['name'];
		    }
		    // echo $language . "\n";
		}
		// Translate text from english to french.
		$translate_result = $translate->translate($sourcelanguage, [
		    'target' => 'en'
		]);
	}
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="" method="post">
		<label>Type in any word and I will detect the language. Let's go</label>
		<br>
		<input type="text" name="sourcelanguage">
		<button type="submit" name="submit">Submit</button>
	</form>
	<div>
		<?php if (isset($_POST['submit'])) { ?>
		<p>Your text: <?php echo $sourcelanguage; ?></p>
		<p>Detected Language: <?php echo $languagename; ?></p>
		<p>Your text in English: <?php echo $translate_result['text']; ?></p>
		<?php } ?>
	</div>
	<div id="speechify-root"></div>
	<script type="text/javascript">
		import(
  "https://storage.googleapis.com/speechify-api-cdn/speechifyapi.min.mjs"
).then(async (speechifyWidget) => {
  // widget configuration
  const config = {
    rootElement: document.getElementById("article"),
    useSpeechifyRoot: true,
    // default voice
    defaultVoice: "Matthew",
  };
  // initialize the widget with config and mount it on the page
  const widget = speechifyWidget.makeSpeechifyExperience(config);
  await widget.mount();
});
	</script>
</body>
</html>