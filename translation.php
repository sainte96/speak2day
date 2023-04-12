<?php 
require 'inc/translate_lib.php';
// Translate text from english to french.
$result = $translate->translate('Hello world!', [
    'target' => 'fr'
]);

echo $result['text'] . "\n";

// Detect the language of a string.
$result = $translate->detectLanguage('Mo ni fe e');

$languageCode = $result['languageCode'];
$languages = $translate->localizedLanguages();

foreach ($languages as $language) {
    if ($language['code']== $languageCode) {
        echo $language['name'];
    }
    // echo $language . "\n";
}
// $languageConfidence = $result['confidence'];
// $languageName = $translate->languageCodes($languageCode);

echo "Language code: $languageCode\n";
// echo "Language name: $languageConfidence\n";

// Get the languages supported for translation specifically for your target language.
$languages = $translate->localizedLanguages([
    'target' => 'en'
]);

foreach ($languages as $language) {
    echo $language['name'] . "\n";
    echo $language['code'] . "\n";
}

// Get all languages supported for translation.
// $languages = $translate->languages();

// foreach ($languages as $language) {
//     echo $language . "\n";
// }


 ?>