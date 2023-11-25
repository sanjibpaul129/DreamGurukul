<?php

$servername = "localhost";
// $username = "root_user";
// $password = "";
$username = "root";
$password = "Passw0rd123#$";
$dbname = "jaingroup_enquirydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_POST["startdate"] == "") {
  $startdate =  date('Y-m-d');
} else {
  $startdate =  $_POST["startdate"];
}
$enddate = $_POST["enddate"];


 // $sql = "SELECT `id`, `lead_name`, `lead_phone_number`, `lead_selldo_id`, `lead_selldo_error`, `lead_added_date` FROM `mantra_svf_response` order by lead_added_date desc;";
  //$fields = array('id', 'lead_name', 'lead_phone_number', 'lead_selldo_id', 'lead_selldo_error', 'lead_added_date');
  
    $sql = "SELECT `id`, `name`, `email`, `phone`, `comments`, `utmsource`, `utmcampaign`, `utmmedium`, `utmterm`,`addeddate` FROM `enquiries` WHERE  addeddate between '".$startdate." 00:00:00' and '".$enddate." 23:59:00' order by id desc;";

    
  $fields = array('id', 'name', 'email', 'phone', 'comments', 'utmsource', 'utmcampaign', 'utmmedium', 'utmterm','addeddate');



$leads = array();
$result = $conn->query($sql);


if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $leads[] = $row;
  }
} else {
  //echo "0 results";
}

$csv_filename = "leads-".date("Y-m-d-h:i:s");
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename='.$csv_filename.'.csv');
$output = fopen('php://output', 'w');


fputcsv($output, $fields);

if (count($leads) > 0) {
  foreach ($leads as $row) {
    fputcsv($output, $row);
  }
}

$conn->close();
