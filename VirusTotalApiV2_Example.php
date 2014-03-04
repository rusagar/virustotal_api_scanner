<?php
require_once('VirusTotalApiV2.php');

/* Initialize the VirusTotalApi class.*/
$api = new VirusTotalAPIV2('163ad0c5a2e0f3ad04615d1b81de1232a98ab1309e617cdb0997fcab8300a2da'); //API key goes here

/* Upload and scan a local file. */
$result = $api->scanFile('foo.txt');
$scanId = $api->getScanID($result); /* Can be used to check for the report later on. */
$api->displayResult($result);

/* Get a file report.*/
$result = $api->scanFile(FILE_TO_SCAN);
$scanId = $api->getScanID($result); 
$scanHash = $api->getScanHash($result); 
				
$report = $api->getFileReport($scanHash); //'Hash-of-a-file-to-check-for-a-report'
$api->displayResult($report);
print($api->getSubmissionDate($report) . '<br>');
print($api->getReportPermalink($report, TRUE) . '<br>');

/* Scan an URL. */
$result = $api->scanURL(SITE_URL);
$scanId = $api->getScanID($result); /* Can be used to check for the report later on. */
$api->displayResult($result);


/* Get an URL report. */

$report = $api->getURLReport(SITE_URL); //URL-to-check-for-a-report
$api->displayResult($report);
print($api->getTotalNumberOfChecks($report) . '<br>');
print($api->getNumberHits($report) . '<br>');
print($api->getReportPermalink($report, FALSE) . '<br>');

/* Comment on a file. */

$report = $api->makeComment('Hash-of-a-file-to-comment-on', 'Your-comment');
$api->displayResult($report);

/* Comment on an URL. */

$report = $api->makeComment('URL-to-comment-on', 'Your-comment');
$api->displayResult($report);

?>