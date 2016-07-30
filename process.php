<?php

$payload = array(
    'is_test'       => '0',
    'ip_address'    => $_SERVER['REMOTE_ADDR']
);

foreach($_POST as $key => $value) {
    $payload[$key] = $value;
}

$ch = curl_init('http://slc.adsolve.com/api.php');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$api_response = curl_exec($ch);

parse_str($api_response, $response);
respond($response);

//respond should forward to a page, not show an api response
function respond($response){
	$message = http_build_query($response);
	if($response['status'] == 'ERROR') {
		header("location: error.php?".$message);
	} else {
		header("location: thank-you.php?".$message);
	}
	exit;
}
