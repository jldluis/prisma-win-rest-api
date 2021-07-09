<?php
class serviceWP{
    

	private $username='ck_a89a79ac67caccfd365c8e635116f075012e3903';
	private $password='cs_f49bccc2da50457f42ea0ceebcf19c7e19d43b1a';

	
  
    public function callService($url)
	{

		$result = "";
		try {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			
			curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
			curl_setopt($ch, CURLOPT_USERPWD, $this->username . ":" . $this->password);
			
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
			
			$response = curl_exec($ch);

			$result = $response;
			
		} catch (Exception $e) {

			$this->writelogs("Caught exception".$e->getMessage() , "callService");
		}

		return $result;
	}
	
	public function writelogs($msg, $file)
	{

		date_default_timezone_set('Europe/Athens');

		$log_filename = $_SERVER['DOCUMENT_ROOT'] . "/logs";

		if (!file_exists($log_filename)) {
			mkdir($log_filename, 0777, true);
		}

		$getDate = date('d-M-Y');
		$log_file_data = "{$log_filename}/{$file}-{$getDate}.log";

		file_put_contents($log_file_data, date("h:i:s") . ":" . $msg . "\n", FILE_APPEND);
	}
	
}
?>