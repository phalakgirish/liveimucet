<?php
if(!function_exists('my_file'))
{
	function my_file($filename,$type)
	{
		
		$client=base_url()."public/client/";
		/*Client*/
		
		if($type==1)
		{
			$str= "<link href='".$client."css/$filename.css' rel='stylesheet'/>";
		}
		if($type==2)
		{
			$str="<script src='".$client."js/$filename.js' ></script>";
		}
		
		if($type==3)
		{
			$str= "<link href='".$client."fonts/$filename.css' rel='stylesheet'/>";
		}
		
		return $str;
	}
}

if(!function_exists('dropdown'))
{
	function dropdown($field,$table,$condition,$name)
	{
			$CI = get_instance();
			echo"<select name='$name' class='selectfield' id='$name'>";
			$ans=$CI->get_where($field,$table,$condition);
			
			if($ans=="no")
			{
				echo"<option class='black-option'>No data</option>";
			}
			else
			{
				
				foreach($ans as $value)
				{
					echo "<option value='$value[0]' class='black-option'>$value[1]</option>";
				}
			}
			echo "</select>";
	}
}

error_reporting(0);

	function encrypt($plainText,$key)
	{
		$secretKey = hextobin(md5($key));
		$initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
	  	$openMode = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '','cbc', '');
	  	$blockSize = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, 'cbc');
		$plainPad = pkcs5_pad($plainText, $blockSize);
	  	if (mcrypt_generic_init($openMode, $secretKey, $initVector) != -1) 
		{
		      $encryptedText = mcrypt_generic($openMode, $plainPad);
	      	      mcrypt_generic_deinit($openMode);
		      			
		} 
		return bin2hex($encryptedText);
	}

	function decrypt($encryptedText,$key)
	{
		$secretKey = hextobin(md5($key));
		$initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
		$encryptedText=hextobin($encryptedText);
	  	$openMode = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '','cbc', '');
		mcrypt_generic_init($openMode, $secretKey, $initVector);
		$decryptedText = mdecrypt_generic($openMode, $encryptedText);
		$decryptedText = rtrim($decryptedText, "\0");
	 	mcrypt_generic_deinit($openMode);
		return $decryptedText;
		
	}
	//*********** Padding Function *********************

	 function pkcs5_pad ($plainText, $blockSize)
	{
	    $pad = $blockSize - (strlen($plainText) % $blockSize);
	    return $plainText . str_repeat(chr($pad), $pad);
	}

	//********** Hexadecimal to Binary function for php 4.0 version ********

	function hextobin($hexString) 
   	 { 
        	$length = strlen($hexString); 
        	$binString="";   
        	$count=0; 
        	while($count<$length) 
        	{       
        	    $subString =substr($hexString,$count,2);           
        	    $packedString = pack("H*",$subString); 
        	    if ($count==0)
		    {
				$binString=$packedString;
		    } 
        	    
		    else 
		    {
				$binString.=$packedString;
		    } 
        	    
		    $count+=2; 
        	} 
  	        return $binString; 
    	  } 

?>