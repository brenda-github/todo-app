<?php 

$curl = curl_init();
$id = $_POST['id'];

$date = date_format(date_create(), "Y/m/d");
 $value = array(
    "id" => $_POST['id'],
    "title" => $_POST['todo_title'],
    "created" => $_POST['created'],
    "completed" => true,
    "description" => $_POST['todo_description'],
    "lastUpdated" => $date
);
$data = json_encode($value, true);
//echo $data;
$url = 'https://dev.hisptz.com/dhis2/api/dataStore/brenda/' .$id;
curl_setopt_array($curl, [
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 80,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "PUT",
CURLOPT_POSTFIELDS => $data,
CURLOPT_HTTPHEADER => [
    'Content-Type: application/json',
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

?>