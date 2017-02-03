<?php
Include("check.php");

$ping = $_GET['ping'];
$url = $_GET['url'];

/* EX: http: www.thecave.info php-ping-script-to-check-remote-server-or-website */
/* NEW: http: stackoverflow.com questions 9841635 how-can-i-ping-a-server-port-with-php */

$host = $url; 
$port = 80; 

$waitTimeoutInSeconds = 1; 
if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
   $result = "ok"; 
} else {
   $result = "no";
} 
fclose($fp);

$to = "http://".$serverip."/curl.php?url=".urlencode($url)."&protocol=".$protocol."&ping=".$ping."&fsocket=".$result;
$refresh = rand(1,7);
$header = "Refresh: ".$refresh."; URL=".$to;

Header($header);

?>

<h1>IsOnline by RamondettiDavide - Test 2/5 - Fsocket Test</h1>
Please wait... We are testing "<?php print $url; ?>"...
