<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["mobile"];
    $comments = $_POST["comments"];
    $project = "Dream Gurukul";
    $utm_form_name = "Enquiry Form";
    $utm_source = "NewsPaper";
    $utm_medium = $_POST["utm_medium"];
    $apikey = "kG6vgYgUqEmnHUtHX15pNQ";

    $url = 'https://www.realtybucket.com/webhook/website_form_data';
    $data = array('apikey' => $apikey, 'name' => $name, 'email' => $email,'contact' => $contact,'comments' => $comments, 'project' => $project, 'utm_form_name' => $utm_form_name, 'utm_source' => $utm_source,'utm_medium' => $utm_medium);
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    header('Location: testimonial_thankyou.php');
?>
