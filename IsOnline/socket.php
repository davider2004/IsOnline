<?php
Include("check.php");

$url = $_GET['url'];
$ping = $_GET['ping'];
$fsocket = $_GET['fsocket'];
$curl = $_GET['curl'];
$visit = $_GET['visit'];
$protocol = $_GET['protocol'];

$link = $protocol."://".$url;
/* EX: https: css-tricks.com snippets php check-if-website-is-available */
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

$to = "http://".$serverip."/finish.php?url=".urlencode($url)."&ping=".$ping."&fsocket=".$fsocket."&curl=".$curl."&visit=".$visit."&socket=".$result."&protocol=".$protocol;
$refresh = rand(1,8);
$header = "Refresh: ".$refresh."; URL=".$to;

Header($header);
?>

<h1>IsOnline by RamondettiDavide - Test 5/5 - SOCKET Test</h1>
Please wait... We are testing "<?php print $url; ?>"...
