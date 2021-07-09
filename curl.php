<?

include_once('config/serviceWP.php');

$url = "https://staging-sofianosorthopedikagr.kinsta.cloud/wp-json/wc/v3/products";

$service = new serviceWP();


$data = $service->callService($url);

print_r($data);








/*
$curl = curl_init();
$auth_data = array(
	'Username' 		=> 'XBnKaywRCrj05mM-XXX-6DXuZ3FFkUgiw45',
	'Password' 	=> 'btHTWVNMUATHEnF-XXX-2nQabKcKVo3VXtU'
);

$username='XBnKaywRCrj05mM-XXX-6DXuZ3FFkUgiw45';
$password='btHTWVNMUATHEnF-XXX-2nQabKcKVo3VXtU';

//curl_setopt($curl, CURLOPT_POST, 1);
//curl_setopt($curl, CURLOPT_POSTFIELDS, $auth_data);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);

curl_setopt($curl, CURLOPT_URL, 'https://staging-sofianosorthopedikagr.kinsta.cloud/wp-json/wc/v3/products');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
$result = curl_exec($curl);
if(!$result){die("Connection Failure");}
curl_close($curl);
echo $result;
*/

// $headers = array(
// 'Content-Type: application/json',
// 'Authorization: Basic '. base64_encode("$user_name:$password")
// );
// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


//$url = "https://staging-sofianosorthopedikagr.kinsta.cloud/wp-json/wc/v3/products";

//$username='ck_a89a79ac67caccfd365c8e635116f075012e3903';
//$password='cs_f49bccc2da50457f42ea0ceebcf19c7e19d43b1a';





// $login = 'login';
// $password = 'password';
//$url = 'http://your.url';
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL,$url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
// curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
// curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
// $result = curl_exec($ch);
// curl_close($ch);  
// echo($result);





//$curl = curl_init($url);
//curl_setopt($curl, CURLOPT_URL, $url);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//$wp_request_headers = array(
//  'Authorization' => 'Basic ' . 'ck_a89a79ac67caccfd365c8e635116f075012e3903:cs_f49bccc2da50457f42ea0ceebcf19c7e19d43b1a'
//);
//curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//curl_setopt($curl, CURLOPT_HTTPHEADER, $wp_request_headers);
//curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
//for debug only!
//curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
//curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);

//$resp = curl_exec($curl);
//curl_close($curl);

//$json = utf8_encode($resp);
//$data = json_decode($resp);


//header('Content-Type: application/json');
//echo json_encode($data);

//print_r($data);
//var_dump($resp);





/*
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);

curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

$resp = curl_exec($curl);
curl_close($curl);
//var_dump($resp);
echo $resp;
*/



?>