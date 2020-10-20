<?php
require('./instamojo.php');
const API_KEY ="test_8f7b9a1441cb8eecc95569422cd";
const AUTH_TOKEN = "test_8863f3d5c594927cdbdbb884eab";


if(isset($_POST['your_name']) && isset($_POST['purpose'])&& isset($_POST['your_email']) && isset($_POST['your_amount']))
{
    $api = new Instamojo\Instamojo(API_KEY, AUTH_TOKEN,'https://test.instamojo.com/api/1.1/');
    
    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => $_POST['purpose'],
            "buyer_name" => $_POST['your_name'],
            "amount" => $_POST['your_amount'],
            "send_email" => true,
            "email" => $_POST['your_email'],
            "redirect_url" => "http://localhost:8080/donate/success.html"
            ));
        header('Location:'. $response['longurl']);
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
}
?>