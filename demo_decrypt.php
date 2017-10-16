<?php

require __DIR__ . '/PHPMxGram.php';

$mxGram = new \PHPMxGram\PHPMxGram();

$imageCode = realpath(dirname(__FILE__)).'/images/mxgram_demo_code.png';

$eachFriend = 'myfriend@server.com';

$data = $mxGram->decryptMedia($imageCode);
                        
if(!empty($data)) {
			
	$arrData = json_decode($data,TRUE);
			
	$arrFriends = $arrData['friends'];
			
	$emailMatch = false;
			
	for($i=0;$i<count($arrFriends);$i++) {
		if(strtolower($eachFriend)==strtolower($arrFriends[$i])) $emailMatch = true;
	}
			
	if(isset($eachFriend) && isset($arrData['friends']) && $emailMatch) {
		// show text if not expired yet
		if(isset($arrData['expires']) && ($arrData['expires'] == 0 || $arrData['expires'] > time())) {
			$textDecoded = $arrData['message'];
            $dateExpire = ($arrData['expires']>0?'<br>Message will expire on '.date("d/m/Y H:i:s",$arrData['expires']):'');
		} else {
			$text_decoded = 'Sorry, the message was expired';
			$dateExpire = '';
		}
	} else {
		$textDecoded = 'Sorry, the message is not for you. Please try with another email.';
		$dateExpire = '';
	}

} else {
    $textDecoded = 'Sorry, something is wrong with the image code. Try with another image code.';
	$dateExpire = '';
}

echo $textDecoded;
echo $dateExpire;