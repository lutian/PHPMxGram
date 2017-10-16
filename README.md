
# lutian/PHPMxGram

> image processing


Encrypt and decrypt messages into a PNG image-code
Accept multiples languages
2000 characters limit 
Only can read the messages users included in email friends list

See online demo on http://mxgram.mueveloz.com

### Version
1.0.0

### Authors

* [Luciano Salvino] - <lsalvino@hotmail.com>


### Installation

To use the tools of this repo only has to be required in your composer.json:

```
{
   "require":{
      "lutian/PHPMxGram": "dev-master"
   }
}
```


### Use to encrypt message

```

require __DIR__ . '/PHPMxGram.php';

$mxGram = new \PHPMxGram\PHPMxGram();

// set uid and uid_token
$mxGram->setUserId(10000001);
$mxGram->setUserToken();
    
// Define string
$string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
// Define dastination email list
$arrFriends = array('me@server.com','myfriend@server.com','another_friend@server.com');
// define expiration time (ex: 24hs)
$expiration = (time() + (24 * 3600));

$arrData = array(
	"ownerId"     => $mxGram->getUserId(),
	"friends"     => $arrFriends,
	"message"     => $string,
	"date"        => date("Y-d-m H:i:s"),
	"expires"  	  => $expiration,
    "secure"      => microtime()
);

// convert data in json string
$jsonData = json_encode($arrData,TRUE);

// define imagePath
$imageFile = 'mxgram_demo_code.png';
$imagePath = realpath(dirname(__FILE__)).'/images/'.$imageFile;
$mxGram->setImagepath($imagePath);
// encrypt message
$mxGram->doAllEncryptAndConvert($jsonData);
// create image-code
$mxGram->createImageCode();
// show image
echo '<img src="images/'.$imageFile.'">';

```

### Use to decrypt message

```

require __DIR__ . '/PHPMxGram.php';

$mxGram = new \PHPMxGram\PHPMxGram();

// define image path
$imageCode = realpath(dirname(__FILE__)).'/images/mxgram_demo_code.png';

// define email friend to match data friend list
$eachFriend = 'myfriend@server.com';

// decrypt image-code
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

```

License
----

MIT


[Luciano Salvino]:http://mxgram.mueveloz.com/


