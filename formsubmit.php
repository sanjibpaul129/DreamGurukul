<?php
// error_reporting(E_ALL);
// ini_set('display_errors', '0');

$servername = "localhost";
// $username = "root_user";
// $password = "";
$username = "root";
$password = "Apple123!@#";
$dbname = "jaingroup_enquirydb";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // API endpoint URL
  // $apiUrl = 'http://www.realtybucket.com/webhook/website_form_data';



  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://www.realtybucket.com/webhook/website_form_data?apikey=kG6vgYgUqEmnHUtHX15pNQ&name=' . $_POST["fullname"] . '&email=' . $_POST["email"] . '&contact=' . $_POST["phone"] . '&project=Dream%20Gurukul&utm_form_name=In_Enquiry%20Form&utm_source=&network=test_data&campaign_id=test_data&adgroup_id=&gclid=&device=&creative=&placement=&target_id=&loc_interest_ms=&loc_physical_ms=&device_model=&keyword=&match_type=&mobile=',
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
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $query = "INSERT INTO `enquiries`(`name`, `email`, `phone`, `comments`, `utmsource`, `utmcampaign`, `utmmedium`, `utmterm`, `response`) VALUES ('" . $_POST["fullname"] . "','" . $_POST["email"] . "','" . $_POST["phone"] . "','" . $_POST["comments"] . "','" . $_POST["utmsource"] . "','" . $_POST["utmcampaign"] . "','" . $_POST["utmmedium"] . "','" . $_POST["utmterm"] . "','" . $response . "')";

  $conn->query($query);
// echo $query;
// die;
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
