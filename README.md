virustotal_api_scanner
======================

This is a PHP sdk to interact with Virus Total Public API v2.0, please see https://www.virustotal.com/en/documentation/public-api for details

## Quick start:
```
<?php
require_once('VirusTotalApiV2.php');

/* Initialize the VirusTotalApi class.*/
$api = new VirusTotalAPIV2('163ad0c5a2e0f3ad04615d1b81de1232a98ab1309e617cdb0997fcab8300a2da');

/* Upload and scan a local file. */
$result = $api->scanFile('foo.txt');
$scanId = $api->getScanID($result); /* Can be used to check for the report later on. */
$api->displayResult($result);

?>
```
