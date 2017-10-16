<?php

namespace PHPMxGram;

class PHPMxGram {

	public $version = '1.0.0';
	
	/**
     * @var string The image result source
     */
    private $im;
	
	/**
     * @var int W image
     */
	private $im_w = 120;
	
	/**
     * @var int H image
     */
	private $im_h = 30;
	
	/**
     * @var int W image
     */
	private $code_w = 120;
	
	/**
     * @var int H image
     */
	private $code_h = 30;
	
	/**
     * @var array code position
     */
	private $code_position = array(
								'x' => 0,
								'y' => 0
							);
    /*
    * @var string $imagePath
    */
    private $imagePath;
        
	/**
     * @var array rgb colors
     */
	private $RGBColors;
	
	/*
    * @var string $uid
    */
	public $uid = 10000001;
	
	/*
    * @var string $uToken
    */
	public $uToken = '';
	
	/**
     * @var array uid_colors
     */
	public $uid_colors;
	
	/**
     * @var array data_colors
     */
	public $data_colors;
	
	/**
     * @var array garbage_colors
     */
	public $garbage_colors;
	
	/**
     * @var array data_length_colors
     */
	public $data_length_colors;
	
	/**
     * @var array user_id measures
     */
	private $uid_position = array(
								'x' => 76,
								'y' => 29,
								'len' => 43
							);
	
	/**
     * @var array data measures
     */
	private $data_position = array(
								'x' => 43,
								'y' => 0,
								'len' => 43
							);
	
	/**
     * @var array data length position
     */
	private $data_length_position = array(
								'x' => 0,
								'y' => 0,
								'len' => 43
							);
	
	/**
     * @var array garbage measures
     */
	private $garbage_position;
	
	/**
     * @var string general token encryptation
     */
	protected $generalToken = "1234567890asdfghjklqwertyuiop";
	
	/**
	 * The constructor.
	 * @param boolean $showInverse
	 */
	public function  __construct()
	{

	}
	
	/**
     * @var array code color
     */
	private $codeColorSettings = array(
		array('color'=>'000000','letter'=>'a'),
		array('color'=>'000033','letter'=>'b'),
		array('color'=>'000066','letter'=>'c'),
		array('color'=>'000099','letter'=>'d'),
		array('color'=>'0000CC','letter'=>'e'),
		array('color'=>'0000FF','letter'=>'f'),
		array('color'=>'003300','letter'=>'g'),
		array('color'=>'003333','letter'=>'h'),
		array('color'=>'003366','letter'=>'i'),
		array('color'=>'003399','letter'=>'j'),
		array('color'=>'0033CC','letter'=>'k'),
		array('color'=>'0033FF','letter'=>'l'),
		array('color'=>'006600','letter'=>'m'),
		array('color'=>'006633','letter'=>'n'),
		array('color'=>'006666','letter'=>'ñ'),
		array('color'=>'006699','letter'=>'o'),
		array('color'=>'0066CC','letter'=>'p'),
		array('color'=>'0066FF','letter'=>'q'),
		array('color'=>'009900','letter'=>'r'),
		array('color'=>'009933','letter'=>'s'),
		array('color'=>'009966','letter'=>'t'),
		array('color'=>'009999','letter'=>'u'),
		array('color'=>'0099CC','letter'=>'v'),
		array('color'=>'0099FF','letter'=>'w'),
		array('color'=>'00CC00','letter'=>'x'),
		array('color'=>'00CC33','letter'=>'y'),
		array('color'=>'00CC66','letter'=>'z'),
		array('color'=>'00CC99','letter'=>'A'),
		array('color'=>'00CCCC','letter'=>'B'),
		array('color'=>'00CCFF','letter'=>'C'),
		array('color'=>'00FF00','letter'=>'D'),
		array('color'=>'00FF33','letter'=>'E'),
		array('color'=>'00FF66','letter'=>'F'),
		array('color'=>'00FF99','letter'=>'G'),
		array('color'=>'00FFCC','letter'=>'H'),
		array('color'=>'00FFFF','letter'=>'I'),
		array('color'=>'330000','letter'=>'J'),
		array('color'=>'330033','letter'=>'K'),
		array('color'=>'330066','letter'=>'L'),
		array('color'=>'330099','letter'=>'M'),
		array('color'=>'3300CC','letter'=>'N'),
		array('color'=>'3300FF','letter'=>'Ñ'),
		array('color'=>'333300','letter'=>'O'),
		array('color'=>'333333','letter'=>'P'),
		array('color'=>'333366','letter'=>'Q'),
		array('color'=>'333399','letter'=>'R'),
		array('color'=>'3333CC','letter'=>'S'),
		array('color'=>'3333FF','letter'=>'T'),
		array('color'=>'336600','letter'=>'U'),
		array('color'=>'336633','letter'=>'V'),
		array('color'=>'336666','letter'=>'W'),
		array('color'=>'336699','letter'=>'X'),
		array('color'=>'3366CC','letter'=>'Y'),
		array('color'=>'3366FF','letter'=>'Z'),
		array('color'=>'339900','letter'=>'0'),
		array('color'=>'339933','letter'=>'1'),
		array('color'=>'339966','letter'=>'2'),
		array('color'=>'339999','letter'=>'3'),
		array('color'=>'3399CC','letter'=>'4'),
		array('color'=>'3399FF','letter'=>'5'),
		array('color'=>'33CC00','letter'=>'6'),
		array('color'=>'33CC33','letter'=>'7'),
		array('color'=>'33CC66','letter'=>'8'),
		array('color'=>'33CC99','letter'=>'9'),
		array('color'=>'33CCCC','letter'=>'š'),
		array('color'=>'33CCFF','letter'=>'Š'),
		array('color'=>'33FF00','letter'=>'Ž'),
		array('color'=>'33FF33','letter'=>'ž'),
		array('color'=>'33FF66','letter'=>'À'),
		array('color'=>'33FF99','letter'=>'Á'),
		array('color'=>'33FFCC','letter'=>'Â'),
		array('color'=>'33FFFF','letter'=>'Ã'),
		array('color'=>'660000','letter'=>'Ä'),
		array('color'=>'660033','letter'=>'Å'),
		array('color'=>'660066','letter'=>'Æ'),
		array('color'=>'660099','letter'=>'Ç'),
		array('color'=>'6600CC','letter'=>'È'),
		array('color'=>'6600FF','letter'=>'É'),
		array('color'=>'663300','letter'=>'Ê'),
		array('color'=>'663333','letter'=>'Ë'),
		array('color'=>'663366','letter'=>'Ì'),
		array('color'=>'663399','letter'=>'Í'),
		array('color'=>'6633CC','letter'=>'Î'),
		array('color'=>'6633FF','letter'=>'Ï'),
		array('color'=>'666600','letter'=>'Ò'),
		array('color'=>'666633','letter'=>'Ó'),
		array('color'=>'666666','letter'=>'Ô'),
		array('color'=>'666699','letter'=>'Õ'),
		array('color'=>'6666CC','letter'=>'Ö'),
		array('color'=>'6666FF','letter'=>'Ø'),
		array('color'=>'669900','letter'=>'Ù'),
		array('color'=>'669933','letter'=>'Ú'),
		array('color'=>'669966','letter'=>'Û'),
		array('color'=>'669999','letter'=>'Ü'),
		array('color'=>'6699CC','letter'=>'Ý'),
		array('color'=>'6699FF','letter'=>'Þ'),
		array('color'=>'66CC00','letter'=>'ß'),
		array('color'=>'66CC33','letter'=>'à'),
		array('color'=>'66CC66','letter'=>'á'),
		array('color'=>'66CC99','letter'=>'â'),
		array('color'=>'66CCCC','letter'=>'ã'),
		array('color'=>'66CCFF','letter'=>'ä'),
		array('color'=>'66FF00','letter'=>'å'),
		array('color'=>'66FF33','letter'=>'æ'),
		array('color'=>'66FF66','letter'=>'ç'),
		array('color'=>'66FF99','letter'=>'è'),
		array('color'=>'66FFCC','letter'=>'é'),
		array('color'=>'66FFFF','letter'=>'ê'),
		array('color'=>'990000','letter'=>'ë'),
		array('color'=>'990033','letter'=>'ì'),
		array('color'=>'990066','letter'=>'í'),
		array('color'=>'990099','letter'=>'î'),
		array('color'=>'9900CC','letter'=>'ï'),
		array('color'=>'9900FF','letter'=>'ð'),
		array('color'=>'993300','letter'=>'ò'),
		array('color'=>'993333','letter'=>'ó'),
		array('color'=>'993366','letter'=>'ô'),
		array('color'=>'993399','letter'=>'õ'),
		array('color'=>'9933CC','letter'=>'ö'),
		array('color'=>'9933FF','letter'=>'ø'),
		array('color'=>'996600','letter'=>'ù'),
		array('color'=>'996633','letter'=>'ú'),
		array('color'=>'996666','letter'=>'û'),
		array('color'=>'996699','letter'=>'ý'),
		array('color'=>'9966CC','letter'=>'þ'),
		array('color'=>'9966FF','letter'=>'ÿ'),
		array('color'=>'999900','letter'=>'¿'),
		array('color'=>'999933','letter'=>'?'),
		array('color'=>'999966','letter'=>'¡'),
		array('color'=>'999999','letter'=>'!'),
		array('color'=>'9999CC','letter'=>'.'),
		array('color'=>'9999FF','letter'=>':'),
		array('color'=>'99CC00','letter'=>','),
		array('color'=>'99CC33','letter'=>';'),
		array('color'=>'99CC66','letter'=>'-'),
		array('color'=>'99CC99','letter'=>'_'),
		array('color'=>'99CCCC','letter'=>'{'),
		array('color'=>'99CCFF','letter'=>'}'),
		array('color'=>'99FF00','letter'=>'['),
		array('color'=>'99FF33','letter'=>']'),
		array('color'=>'99FF66','letter'=>'('),
		array('color'=>'99FF99','letter'=>')'),
		array('color'=>'99FFCC','letter'=>'='),
		array('color'=>'99FFFF','letter'=>'\''),
		array('color'=>'CC0000','letter'=>'"'),
		array('color'=>'CC0033','letter'=>'\\\\'),
		array('color'=>'CC0066','letter'=>'/'),
		array('color'=>'CC0099','letter'=>'#'),
		array('color'=>'CC00CC','letter'=>'$'),
		array('color'=>'CC00FF','letter'=>'%'),
		array('color'=>'CC3300','letter'=>'&'),
		array('color'=>'CC3333','letter'=>'*'),
		array('color'=>'CC3366','letter'=>'+'),
		array('color'=>'CC3399','letter'=>'~'),
		array('color'=>'CC33CC','letter'=>'>'),
		array('color'=>'CC33FF','letter'=>'<'),
		array('color'=>'CC6600','letter'=>'@'),
		array('color'=>'CC6633','letter'=>'|'),
		array('color'=>'CC6666','letter'=>'°'),
		array('color'=>'CC6699','letter'=>'¬'),
		array('color'=>'CC66CC','letter'=>'^'),
		array('color'=>'CC66FF','letter'=>'`'),
		array('color'=>'CC9900','letter'=>'\r'),
		array('color'=>'CC9933','letter'=>'\n'),
		array('color'=>'CC9966','letter'=>''),
		array('color'=>'CC9999','letter'=>''),
		array('color'=>'CC99CC','letter'=>''),
		array('color'=>'CC99FF','letter'=>''),
		array('color'=>'CCCC00','letter'=>''),
		array('color'=>'CCCC33','letter'=>''),
		array('color'=>'CCCC66','letter'=>''),
		array('color'=>'CCCC99','letter'=>''),
		array('color'=>'CCCCCC','letter'=>''),
		array('color'=>'CCCCFF','letter'=>''),
		array('color'=>'CCFF00','letter'=>''),
		array('color'=>'CCFF33','letter'=>''),
		array('color'=>'CCFF66','letter'=>''),
		array('color'=>'CCFF99','letter'=>''),
		array('color'=>'CCFFCC','letter'=>''),
		array('color'=>'CCFFFF','letter'=>''),
		array('color'=>'FF0000','letter'=>''),
		array('color'=>'FF0033','letter'=>''),
		array('color'=>'FF0066','letter'=>''),
		array('color'=>'FF0099','letter'=>''),
		array('color'=>'FF00CC','letter'=>''),
		array('color'=>'FF00FF','letter'=>''),
		array('color'=>'FF3300','letter'=>''),
		array('color'=>'FF3333','letter'=>''),
		array('color'=>'FF3366','letter'=>''),
		array('color'=>'FF3399','letter'=>''),
		array('color'=>'FF33CC','letter'=>''),
		array('color'=>'FF33FF','letter'=>''),
		array('color'=>'FF6600','letter'=>''),
		array('color'=>'FF6633','letter'=>''),
		array('color'=>'FF6666','letter'=>''),
		array('color'=>'FF6699','letter'=>''),
		array('color'=>'FF66CC','letter'=>''),
		array('color'=>'FF66FF','letter'=>''),
		array('color'=>'FF9900','letter'=>''),
		array('color'=>'FF9933','letter'=>''),
		array('color'=>'FF9966','letter'=>''),
		array('color'=>'FF9999','letter'=>''),
		array('color'=>'FF99CC','letter'=>''),
		array('color'=>'FF99FF','letter'=>''),
		array('color'=>'FFCC00','letter'=>''),
		array('color'=>'FFCC33','letter'=>''),
		array('color'=>'FFCC66','letter'=>''),
		array('color'=>'FFCC99','letter'=>''),
		array('color'=>'FFCCCC','letter'=>''),
		array('color'=>'FFCCFF','letter'=>''),
		array('color'=>'FFFF00','letter'=>''),
		array('color'=>'FFFF33','letter'=>''),
		array('color'=>'FFFF66','letter'=>''),
		array('color'=>'FFFF99','letter'=>''),
		array('color'=>'FFFFCC','letter'=>''),
		array('color'=>'FFFFFF','letter'=>' '),
	);
	
	private  function encode($value,$skey){ 
        if(function_exists('mcrypt_create_iv') && function_exists('mcrypt_get_iv_size')) {
            $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
            $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
            $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $skey, $value, MCRYPT_MODE_ECB, $iv);
            return trim($this->safe_b64encode($crypttext)); 
        } else {
            return $this->Encrypt($value,$skey);
        }
    }
 
    private function decode($value,$skey){
        if(function_exists('mcrypt_create_iv') && function_exists('mcrypt_get_iv_size')) {
            $crypttext = $this->safe_b64decode($value); 
            $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
            $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
            $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $skey, $crypttext, MCRYPT_MODE_ECB, $iv);
            return trim($decrypttext);
        } else {
			return $this->Decrypt($value,$skey);
        }
    }
	
	/**
	 * Encrypt
     * @param string message
	 * @param string token
     */
	private function Encrypt($string,$key) {
	
	  $result = '';
	  for($i=1; $i<=strlen($string); $i++) {
	    $char = substr($string, $i-1, 1);
	    $keychar = substr($key, ($i % strlen($key))-1, 1);
	    $char = chr(ord($char)+ord($keychar));
	    $result.=$char;
	  }
	  return base64_encode($result);
	}
	
	/**
	 * Decrypt
     * @param string encrypted message
	 * @param string token
     */
	private function Decrypt($string,$key) {
	  
	  $string = base64_decode($string);
	  $result = '';
	  for($i=1; $i<=strlen($string); $i++) {
	    $char = substr($string, $i-1, 1);
	    $keychar = substr($key, ($i % strlen($key))-1, 1);
	    $char = chr(ord($char)-ord($keychar));
	    $result.=$char;
	  }
	  return $result;
	}

	private  function safe_b64encode($string) {
        $data = base64_encode($string);
        $data = str_replace(array('+','/','='),array('-','_',''),$data);
        return $data;
    }
 
    private function safe_b64decode($string) {
        $data = str_replace(array('-','_'),array('+','/'),$string);
        $mod4 = strlen($data) % 4;
        if ($mod4) {
            $data .= substr('====', $mod4);
        }
        return base64_decode($data);
    }
	
	/**
	* Letters2Colors
	* @param $text 
	*/
	private function Letters2Colors($text) {

		$letters = str_split($text.'');
		$colors = array();
		
		foreach($letters as $letter) {
			for($i=0;$i<count($this->codeColorSettings);$i++) {
				if($this->codeColorSettings[$i]['letter']==utf8_decode($letter)) { 
					$colors[] = $this->codeColorSettings[$i]['color'];
				}
			}
		}

        return $colors;

    }
	
	/**
	* Colors2Letters
	* @param $colorArray 
	*/
	public function Colors2Letters($colorArray) {
		$letters = '';
		for($i=0;$i<count($colorArray);$i++) {
			$letters .= $this->Color2Letter($colorArray[$i]);
		}
        return $letters;
    }
	
	/**
	* Color2Letter
	* @param $color 
	*/
	private function Color2Letter($color) {
		for($i=0;$i<count($this->codeColorSettings);$i++) {
			if($this->codeColorSettings[$i]['color']==$color) {
				return $this->codeColorSettings[$i]['letter'];
			}
		}
    }
	
	/*
	* Convert HEX to RGB color
	* @param: string $hex color code
	* @return: array $rgb colors 
	*/
	
	private function hex2rgb($hex) {
      $color = str_replace('#','',$hex);
      $this->RGBColors = array('r' => hexdec(substr($color,0,2)),
                   'g' => hexdec(substr($color,2,2)),
                   'b' => hexdec(substr($color,4,2)));
      return $this->RGBColors;
    }
	
	/*
	* Convert RGB to HEX color
	* @param: int $r color code
	* @param: int $g color code
	* @param: int $b color code
	* @return: string $hex colors 
	*/
	
	private function rgb2hex($r,$g,$b) {
		$hr = dechex($r);
		$hex = (strlen($hr)<2)?'0'.$hr:$hr;
		$hg = dechex($g);
		$hex .= (strlen($hg)<2)?'0'.$hg:$hg;
		$hb = dechex($b);
		$hex .= (strlen($hb)<2)?'0'.$hb:$hb;
		return strtoupper($hex);
	}
	
	/*
	* Get the garbage length
	* @param: w
	* @param: h
	*/
	
	private function setGarbageLength() {
		$this->garbage_position['len'] = ($this->im_w * $this->im_h) - ($this->uid_position['len']+$this->data_length_position['len']+$this->data_position['len']);
	}
	
	/*
	* Gen garbage string
	* @return string garbage
	*/
	
	private function genGarbageString() {
		$len = $this->garbage_position['len'];
		$garbage="";
		$syllables="er,in,tia,wol,fe,pre,vet,jo,nes,al,len,son,cha,ir,ler,bo,ok,tio,nar,sim,ple,bla,ten,toe,cho,co,lat,spe,ak,er,po,co,lor,pen,cil,li,ght,wh,at,the,he,ck,is,mam,bo,no,fi,ve,any,way,pol,iti,cs,ra,dio,sou,rce,sea,rch,pa,per,com,bo,sp,eak,st,fi,rst,gr,oup,boy,ea,gle,tr,ail,bi,ble,brb,pri,dee,kay,en,be,se";
		$syllable_array=explode(",", $syllables);
		srand((double)microtime()*1000000);
		for ($count=1;$count<=$len;$count++) {
			if (rand()%10 == 1) {
				$garbage .= sprintf("%0.0f",(rand()%50)+1);
			} else {
				$garbage .= sprintf("%s",$syllable_array[rand()%62]);
			}
		}
		return (substr($garbage,0,($len-1)));
	}/*
	* Encrypt and Convert data string
	*/
	
	public function doAllEncryptAndConvert($string) {
	
		// encripto el userId con el token general
		$this->uid_colors = $this->EncryptAndConvert($this->getUserId(),$this->getGeneralToken());
		// encripto data con el token del user
		$this->data_colors = $this->EncryptAndConvert($string,$this->getUserToken());
		$this->data_position['len'] = count($this->data_colors);
		
		// encripto data_lengtth con el token del user
		$this->data_length_colors = $this->EncryptAndConvert($this->data_position['len'],$this->getUserToken());
		
		// encripto los pixeles de relleno
		$this->setGarbageLength();
		$garbage = $this->genGarbageString();
		$this->garbage_colors = $this->EncryptAndConvert($garbage,$this->getUserToken());

	}
        
    public function getDataEncrypted($string) {
		return $this->encode($string,$this->getUserToken());
    }
        
    public function getDataEncryptedFromColors() {
        return $this->Colors2Letters($this->data_colors);
    }
	
	/*
	* Encrypt and Convert data string
	*/

	private function EncryptAndConvert($string,$token) {
		$encrypted = $this->encode($string,$token);
		$codeArray = $this->Letters2Colors($encrypted);
		return $codeArray;
	}
	
	/*
	* Convert and Decrypt data string
	*/

	private function ConvertAndDecrypt($codeArray,$token) {
		$encrypted = $this->Colors2Letters($codeArray);
		$decrypted = $this->decode($encrypted,$token);
		return $decrypted;
	}
	
	/*
	* media proceess & result
	*/
	
	/**
     * Set the encrypted pixel color on image
     * @param: string encrypted pixel color
     * @param: int X position of image 
     * @param: int Y position of image 
     * @return $this->im
	 */
	private function setPixelOnMedia($pixel,$x,$y) {
		$rgb = $this->hex2rgb($pixel);
		$each_color = imagecolorallocate($this->im, $rgb['r'], $rgb['g'], $rgb['b']); 
		imagesetpixel($this->im, $x, $y, $each_color);
	}
	
	/*
	* convert pixel to HEX color
	*/
	
	private function getPixelFromMedia($x,$y) {
		
		$rgb = imagecolorat($this->im,$x,$y);
		$r = ($rgb >> 16) & 0xFF;
		$g = ($rgb >> 8) & 0xFF;
		$b = (int)$rgb & 0xFF;
		$colors = $this->rgb2hex($r,$g,$b);
		
		return $colors;
		
	}
	
	/*
	* proccess media
	* @param: string $image
	* @return: object $this->im 
	*/
	private function proccessMedia($image) {
		if(is_file($image)) {
            $arrImage = @getimagesize($image);
			$this->im_w = $arrImage[0];
			$this->im_h = $arrImage[1];
			
			$gd_ext = substr($image, -3);
			
			if(strtolower($gd_ext) == "gif") {
              if (!$this->im = imagecreatefromgif($image)) {
                    exit;
              }
            } else if(strtolower($gd_ext) == "jpg") {
              if (!$this->im = imagecreatefromjpeg($image)) {
                    exit;
              }
            } else if(strtolower($gd_ext) == "png") {
              if (!$this->im = imagecreatefrompng($image)) {
                    exit;
              }
            } else {
                die;
            }
		} else {
            die;
        }
	}
	
	/*
	* creates the image code
	*/
	
	public function createImageCode(){
		$this->im = imagecreatetruecolor($this->im_w, $this->im_h);
		$x = 0;
		$y = 0;
		// add encrypted data_length
		for($i=0;$i<count($this->data_length_colors);$i++) {
			$this->setPixelOnMedia($this->data_length_colors[$i],$x,$y);
			$x++;
		}
		
		// add encrypted  encriptado
		$x = $this->data_position['x'];
		$y = $this->data_position['y'];
		for($i=0;$i<count($this->data_colors);$i++) {
			if($x >= $this->im_w) {
				$x = 0;
				$y++;
			}
			$this->setPixelOnMedia($this->data_colors[$i],$x,$y);
			$x++;
		}
		
		// add encrypted garbage
		for($i=0;$i<count($this->garbage_colors);$i++) {
			if($x >= $this->im_w) {
				$x = 0;
				$y++;
			}
			$this->setPixelOnMedia($this->garbage_colors[$i],$x,$y);
			$x++;
		}
		// add encrypted uid
		$x = $this->uid_position['x'];
		$y = $this->uid_position['y'];
		for($i=0;$i<count($this->uid_colors);$i++) {
			$this->setPixelOnMedia($this->uid_colors[$i],$x,$y);
			$x++;
		}
		
		return $this->showImage();
		
	}
	
	/*
	* decode media
	*/
	public function decryptMedia($image) {
		$this->proccessMedia($image);
		// define code width
		$code_w = $this->code_w+$this->code_position['x'];
		// get uid
		$x = $this->uid_position['x']+$this->code_position['x'];
		$y = $this->uid_position['y']+$this->code_position['y'];
		$uid_colors = array();
		for($i=0;$i<$this->uid_position['len'];$i++) {
			$uid_colors[] = $this->getPixelFromMedia($x,$y);
			$x++;
		}
        $this->uid_colors = $uid_colors;
		$uid = $this->ConvertAndDecrypt($uid_colors,$this->getGeneralToken());
        // the image is not correct
        if(!is_numeric($uid)) return null;
		$this->setUserId($uid);
		$this->setUserToken();

		// get data length
		$x = $this->data_length_position['x']+$this->code_position['x'];
		$y = $this->data_length_position['y']+$this->code_position['y'];
		$data_length_colors = array();
		for($i=0;$i<$this->data_length_position['len'];$i++) {
			$data_length_colors[] = $this->getPixelFromMedia($x,$y);
			$x++;
		}
		$data_len = $this->ConvertAndDecrypt($data_length_colors,$this->getUserToken());
		// get data
		$x = $this->data_position['x']+$this->code_position['x'];
		$y = $this->data_position['y']+$this->code_position['y'];
		$data_colors = array();
		
		for($i=0;$i<$data_len;$i++) {
			if($x >= $code_w) {
				$x = $this->code_position['x'];
				$y++;
			}
			$data_colors[] = $this->getPixelFromMedia($x,$y);
			$x++;
		}
		$data = $this->ConvertAndDecrypt($data_colors,$this->getUserToken());
		$this->data_colors = $data_colors;
		return $data;
	}
	
	/*
	* showImage
	*/
	
	private function showImage() {
      
		imagealphablending($this->im,false);
		imagesavealpha($this->im,true);
		imagepng($this->im,$this->imagePath,3);
		imagedestroy($this->im);

	}	
	
	/*
	* Setters & getters
	*/
	
	/**
     * Set the user id
     * @return int
	 */
	public function setUserId($uid)
    {
		return $this->uid = $uid;
	}
	
	/**
     * Get the user id
     * @return int
	 */
	public function getUserId()
    {
		return $this->uid;
	}
	
	/**
     * Set the user token
     * @return string
	 */
	public function setUserToken()
    {
		$uToken = $this->encode($this->getUserId(),$this->getGeneralToken());
		return $this->uToken = substr($uToken,0,16);
	}
	
	/**
     * Get the user token
     * @return string
	 */
	public function getUserToken()
    {
		return $this->uToken;
	}
	
	/**
     * Get the general token
     * @return string
	 */
	public function getGeneralToken()
    {
		return $this->generalToken;
	}
	
	/**
     *Set the image result string
     * @return object
	 */
	public function setImage($im)
    {
		return $this->im = $im;
	}
	
	/**
     * Get the image result string
     * @return object
	 */
	public function getImage()
    {
		return $this->im;
	}
	
	
	/*
    * setImagePath
    */
    public function setImagepath($imagePath) {
		return $this->imagePath = $imagePath;
    }

}