<?php
/**
 * Envoie un SMS puis affiche la liste des SMS en attente d’envoi.
 * 
 * Rendez-vous sur https://api.ovh.com/createToken/index.cgi?GET=/sms&GET=/sms/*&PUT=/sms/*&DELETE=/sms/*&POST=/sms/*
 * pour générer les clés d'accès API pour:
 *
 * GET /sms
 * GET /sms/*
 * POST /sms/*
 * PUT /sms/*
 * DELETE /sms/*
 */

require __DIR__ . '/vendor/autoload.php';
use \Ovh\Api;


$endpoint = 'ovh-eu';
$applicationKey = "***";
$applicationSecret = "***";
$consumer_key = "***";

$conn = new Api(    $applicationKey,
                    $applicationSecret,
                    $endpoint,
                    $consumer_key);
     
$smsServices = $conn->get('/sms/');
foreach ($smsServices as $smsService) {

    print_r($smsService);
}

$content = (object) array(
	"charset"=> "UTF-8",
	"class"=> "phoneDisplay",
	"coding"=> "7bit",
	"message"=> "Hello world !",
	"noStopClause"=> true,
	"priority"=> "high",
	"receivers"=> [ "+336********" ],
	"senderForResponse"=> true,
	"validityPeriod"=> 2880
);

$resultPostJob = $conn->post('/sms/'. $smsServices[0] . '/jobs/', $content);

print_r($resultPostJob);

$smsJobs = $conn->get('/sms/'. $smsServices[0] . '/jobs/');
print_r($smsJobs);

print_r($content);
        
?>