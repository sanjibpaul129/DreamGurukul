<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // API endpoint URL
    // $apiUrl = 'http://www.realtybucket.com/webhook/website_form_data';
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://www.realtybucket.com/webhook/website_form_data?apikey=kG6vgYgUqEmnHUtHX15pNQ&name='.$_POST["fullname"].'&email='.$_POST["email"].'&contact='.$_POST["phone"].'&project=Dream%20Gurukul&utm_form_name=Enquiry%20Form&utm_source=&network=test_data&campaign_id=test_data&adgroup_id=&gclid=&device=&creative=&placement=&target_id=&loc_interest_ms=&loc_physical_ms=&device_model=&keyword=&match_type=&mobile=',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);

    echo $response;

    // Handle the response as needed
    // if ($response === "") {
    //     // Error handling
    //     echo 'Error sending the request.';
    // } else {
    //     // Handle the API response (if any)
    //     echo 'API Response: ' . $response;
    // }
} else {
    // Redirect to the form page if accessed directly without submitting the form
    header('Location: index.html');
    exit();
}