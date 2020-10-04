<?php

require_once '../dao/customerUtil.php';
$json = file_get_contents('php://input');
$util = new CustomerUtil();
// $json = '{"message":"Google","customer":{"address":"","dateOfBirth":"","emailAccoutKit":"","emailFacebook":"","emailGoogle":"thongtb.forex@gmail.com","firstName":"","idAccoutKit":"","idFacebook":"","idGoogle":"e1FV4bjo4HffWUK3Cc5zONm0kB42","idTokenFcm":"dCz5TjGbtTk:APA91bHzaDZZVDcthpVW7QqJAs2XZ6DNQ0IVUcEDBz-zm41PcvhnidExdnc9dClV_A7FJsOj_erpLMPusP4DMJKfFnSqzfX44m4Q0zAcwWHjk5qWumEP0bWSK2vF_Xzo8S4ABHA3gwF4","job":"","linkFacebook":"","nameFaceBook":"","nameGoogle":"Thong Than Bao","phone":"","phoneFacebook":"","secondName":"","sex":""}}';
$json = '{"message":"Facebook","customer":{"address":"","dateOfBirth":"","emailAccoutKit":"","emailFacebook":"yeuu_khoghe@yahoo.com","emailGoogle":"","firstName":"","idAccoutKit":"","idFacebook":"2106071826076670","idGoogle":"","idTokenFcm":"dCz5TjGbtTk:APA91bHzaDZZVDcthpVW7QqJAs2XZ6DNQ0IVUcEDBz-zm41PcvhnidExdnc9dClV_A7FJsOj_erpLMPusP4DMJKfFnSqzfX44m4Q0zAcwWHjk5qWumEP0bWSK2vF_Xzo8S4ABHA3gwF4","job":"","linkFacebook":"","nameFaceBook":"Bao Thong","nameGoogle":"","phone":"","phoneFacebook":"","secondName":"","sex":""}}';
$result = json_decode($json, true);
// echo $json;
// echo "<br>";
// echo "<br>";
$label = $result['message'];
$customerArray = $result['customer'];
// toJson
echo $label;
$customerJSON = json_encode($customerArray, true);
echo "<br>";
// echo "<br>";
echo $customerJSON;
// {"address":"","dateOfBirth":"","emailAccoutKit":"","emailFacebook":"yeuu_khoghe@yahoo.com","emailGoogle":"","firstName":"","idAccoutKit":"","idFacebook":"2106071826076670","idGoogle":"","idTokenFcm":"dCz5TjGbtTk:APA91bHzaDZZVDcthpVW7QqJAs2XZ6DNQ0IVUcEDBz-zm41PcvhnidExdnc9dClV_A7FJsOj_erpLMPusP4DMJKfFnSqzfX44m4Q0zAcwWHjk5qWumEP0bWSK2vF_Xzo8S4ABHA3gwF4","job":"","linkFacebook":"","nameFaceBook":"Bao Thong","nameGoogle":"","phone":"","phoneFacebook":"","secondName":"","sex":""}

echo "<br>";
echo "<br>";
echo $customerArray['idFacebook'];
$idFacebook = $customerArray['idFacebook'];
$customerArray['id'] = 9;
$customerJSON = json_encode($customerArray, true);
echo "<br>";
// echo "<br>";
echo $customerJSON;
echo "<br>";
echo $customerArray['id'];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$response = array(
    "success" => "error"
);
if (strcasecmp($label, "Facebook") == 0) {
    $response = $util->isExitFacebook($idFacebook);
}
if (strcasecmp($label, "Google") == 0) {
    $response = $util->insertCustomer($customerJSON);
}
// json response array

echo json_encode($response);
?>