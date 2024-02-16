<?php
// TODO: validate input params, ignore bots...

require __DIR__ . '/vendor/autoload.php'; // google-api-php-client path

function getClient()
{
    $client = new Google_Client();
    $client->setApplicationName('Project');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS);
    $client->setAuthConfig('credentials.json'); 
    $client->setAccessType('offline');
    return $client;
}

// Get the API client and construct the service object.
$client = getClient();
$service = new Google_Service_Sheets($client);
$spreadsheetId = '1EpEC6mMp7bWmhF3Ye7mBqkzJR3tQbGFjzRNwfSiyJhA'; // spreadsheet Id
$range = 'Sheet1'; // Sheet name

$valueRange= new Google_Service_Sheets_ValueRange();
$valueRange->setValues(["values" => ["a", "b"]]); // values for each cell
$valueRange->setValues(["values" => [
    $_POST["name"]
  , $_POST["mobileno"]
  , $_POST["mobileno"]
  , $_POST["email"]
  , $_POST["message"]
 
]]);

$conf = ["valueInputOption" => "RAW"];
$response = $service->spreadsheets_values->append($spreadsheetId, $range, $valueRange, $conf);

// echo 'Message has been sent';

// header("Location: contact.php");

?>