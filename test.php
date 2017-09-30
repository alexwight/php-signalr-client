<?php

require_once("vendor/autoload.php");

use Hammershark\SignalR\Client;

$client = new Client("wss://socket.bittrex.com/signalr", ["corehub"]);

$client->on("corehub", "updateSummaryState", function($data) {
    print_r($data);
});

$client->run();