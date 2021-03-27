<?php



require "vendor/autoload.php";

$access_token = 'Xa609+Mc/UGbh4/o9tNms5UTPgXdAJVuRA0PudTm7DnHu6fbL6kCOynPa9O4JkTMsV6c14zpMMOpgg0MR8pujNNBdZvMOgrpNOyupynPSr6YIi9yG4SepJ1Becapdk4UssTrUJd+ETmKKwYtglarzAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'd4f798c8834bc162c25631fa56a42623';

$pushID = 'U4e3b514bb56cd5685365ea725b79c6b2';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







