<?php

	ini_set('display_errors', 'Off');
	
	require "./php-TTS/tts.php";

	$tts = new TextToSpeech();
	$file_name = time();

	session_start();
	$heckle = $_SESSION['captcha'];
	$str = '';
	for ($i = 0; $i < strlen($heckle); $i++) {
		$str .= substr($heckle, $i, 1) . ' ';
	}
// 	echo $str;
	$tts->setText($str, $file_name);

// 	$mp3 = $your_domain.$file_name.".mp3";
// 	$ogg = $your_domain.$file_name.".ogg";
	
	$path = 'http://' . $_SERVER['HTTP_HOST'] . '/cpe2/v3/programme_detail_page/library/captcha/php-TTS/files/' . $file_name;
	echo $path;
	
	
$path = __DIR__ . '/php-TTS/files/';
if ($handle = opendir($path)) {
    while (false !== ($file = readdir($handle))) { 
        $filelastmodified = filemtime($path . $file);
        if((time() - $filelastmodified) > 3600) { // 1 hour
           unlink($path . $file);
        }
    }
    closedir($handle); 
}

?>