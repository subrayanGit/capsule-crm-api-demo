<?php
	
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.capsulecrm.com/api/v2/users');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Authorization: Bearer w6x7U2gZvdNfXNDM/LbU3b+qIZRTrHnTw7fK7j/rYHdXYPTYUzDcIR/XME5EGlXr';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

print_r($result);

?>