<?php
class serviceWP{
    
	
	private $username='XBnKaywRCrj05mM-XXX-6DXuZ3FFkUgiw45';
    private $password='btHTWVNMUATHEnF-XXX-2nQabKcKVo3VXtU';
	
  
    public function callService($url)
	{

		$result = "";
		try {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_VERBOSE, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
			
			curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_HEADER, 1);
			curl_setopt($ch, CURLOPT_USERPWD, $this->username . ":" . $this->password);
			
			
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