<?php
error_reporting(0);
$logId = $_GET['logId'];

$logFile = "temp.log";

$res = new stdClass();
$content = "";
$calculating = true;
$res->content = "";
$res->calculating = true;
//while($calculating) {
  // open file from tmp
  $fp = fopen($logFile, 'r');
  if ($fp) {
    while (($line = fgets($fp)) !== false) {
      // process the line read.
      $content .= $line;
      if($line == 'end of log') {
        $calculating = false;
      }
    }
  } else {
    $calculating = false;
  } 
  fclose($handle);  
//}
$content = nl2br($content);
$res->calculating = $calculating;
$res->content = $content;
echo json_encode($res);
exit;