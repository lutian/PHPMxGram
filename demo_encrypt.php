<?php

require __DIR__ . '/PHPMxGram.php';

$mxGram = new \PHPMxGram\PHPMxGram();

// set uid and uid_token
$mxGram->setUserId(10000001);
$mxGram->setUserToken();
    
// Define string
$string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
// Define dastination email list
$arrFriends = array('me@server.com','myfriend@server.com','another_friend@server.com');
// expire in 24hs
$expiration = (time() + (24 * 3600));

$arrData = array(
	"ownerId"     => $mxGram->getUserId(),
	"friends"     => $arrFriends,
	"message"     => $string,
	"date"        => date("Y-d-m H:i:s"),
	"expires"  	  => $expiration,
    "sure"        => microtime()
);

$jsonData = json_encode($arrData,TRUE);
echo '<pre>';
print_r($arrData);

// define imagePath
$imageFile = 'mxgram_demo_code.png';
$imagePath = realpath(dirname(__FILE__)).'/images/'.$imageFile;
        
$mxGram->setImagepath($imagePath);

$mxGram->doAllEncryptAndConvert($jsonData);

$mxGram->createImageCode();

echo '<img src="images/'.$imageFile.'">';
echo '</pre>';