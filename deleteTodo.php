<?php

$curl = curl_init();
$id = $_GET['id'];
echo $id;

if(is_numeric($id)){

    $url = 'https://dev.hisptz.com/dhis2/api/dataStore/brenda/' . $id;
    curl_setopt_array($curl, [
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "DELETE",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => [
    "Authorization: Basic YWRtaW46ZGlzdHJpY3Q="
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    $res = json_decode($response, true);
    $status = $res['status'];
  if($status == "OK"){
    header("location:index.php");
 }
}
}