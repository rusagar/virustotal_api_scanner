virustotal_api_scanner
======================

This is a PHP sdk to interact with Virus Total Public API v2.0, please see https://www.virustotal.com/en/documentation/public-api for details

## Edit API KEY:
Line 5 of VirusTotalApiV2_Example.php page
$api = new VirusTotalAPIV2('API_KEY'); //API key goes here

## Quick start:
```
<?php
require_once('VirusTotalApiV2.php');

/* Initialize the VirusTotalApi class.*/
$api = new VirusTotalAPIV2('API_KEY');

/* Upload and scan a local file. */
$result = $api->scanFile('foo.txt');
$scanId = $api->getScanID($result); /* Can be used to check for the report later on. */
$api->displayResult($result);

?>
```

## Author:
Rudra Shrestha http://www.rusagar.com
