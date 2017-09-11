<?php
include("check.php"); 

$url = $_GET['url'];

function ping($host)
{

}

$up = ping($url);

If ($up) {
$result = "ok";
} else {
$result = "no";
}

$to = "http://".$serverip."/fsocket.php?url=".urlencode($url)."&protocol=".$protocol."&ping=".$result;
$refresh = 0.01;
$header = "Refresh: ".$refresh."; URL= ".$to;

Header($header);

?>

<h1>IsOnline by RamondettiDavide - Test 1/5 - PING test</h1>
Please wait... We are testing "<?php print $url; ?>"...  
 
