<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<script type="text/javascript">
	const settings = {
	"async": true,
	"crossDomain": true,
	"url": "https://voicerss-text-to-speech.p.rapidapi.com/?key=e426b4ef05mshd0c82e58fe58ca2p1ecc7ajsnfeaf0d5a3f2c&src=Hello%2C%20world!&hl=en-us&r=0&c=mp3&f=8khz_8bit_mono",
	"method": "GET",
	"headers": {
		"X-RapidAPI-Key": "e426b4ef05mshd0c82e58fe58ca2p1ecc7ajsnfeaf0d5a3f2c",
		"X-RapidAPI-Host": "voicerss-text-to-speech.p.rapidapi.com"
	}
};

$.ajax(settings).done(function (response) {
	console.log(response);
});
</script>
</body>
</html>