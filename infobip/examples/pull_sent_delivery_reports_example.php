<?php
/**
 * Created by PhpStorm.
 * User: nmenkovic
 * Date: 9/9/15
 * Time: 5:16 PM
 */
require_once __DIR__ . '/../../vendor/autoload.php';

use infobip\api\client\GetSentSmsDeliveryReports;
use infobip\api\configuration\BasicAuthConfiguration;
use infobip\api\model\sms\mt\reports\GetSentSmsDeliveryReportsExecuteContext;

// Initializing GetSentSmsDeliveryReports client with appropriate configuration
$client = new GetSentSmsDeliveryReports(new BasicAuthConfiguration(USERNAME, PASSWORD));
// Creating execution context
$context = new GetSentSmsDeliveryReportsExecuteContext();
// Executing request
$response = $client->execute($context);

for ($i = 0; $i < count($response->getResults()); ++$i) {
    $result = $response->getResults()[$i];
    echo "Message ID: " . $result->getMessageId() . "\n";
    echo "Sent at: " . $result->getSentAt()->format('y-M-d H:m:s T') . "\n";
    echo "Receiver: " . $result->getTo() . "\n";
    echo "Status: " . $result->getStatus()->getName() . "\n";
    echo "Price: " . $result->getPrice()->getPricePerMessage() . " " . $result->getPrice()->getCurrency() . "\n\n";
}