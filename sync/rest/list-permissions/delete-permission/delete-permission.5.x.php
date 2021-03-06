<?php
require_once __DIR__ . '/path/to/vendor/autoload.php';

use Twilio\Rest\Client;

// To set up environmental variables, see http://twil.io/secure
$accountSid = getenv('TWILIO_ACCOUNT_SID');
$authToken = getenv('TWILIO_AUTH_TOKEN');

$client = new Client($accountSid, $authToken);
$status = $client->sync
                 ->services('ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX')
                 ->syncLists('MyFirstList')
                 ->syncListPermissions('bob')
                 ->delete();

print_r($status);
