<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php
require_once('/path/to/twilio-php/Services/Twilio.php'); // Loads the library

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$token = "your_auth_token";
$client = new Services_Twilio($sid, $token);

// Get an object from its sid. If you do not have a sid,
// check out the list resource examples on this page
$address = $client->account->addresses->get("AD2a0747eba6abf96b7e3c3ff0b4530f6e");
$address->update(array(
        "CustomerName" => "Customer 456",
        "Street" => "2 Hasselhoff Lane"
    ));
echo $address->customer_name;
