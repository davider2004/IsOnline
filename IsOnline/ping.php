<?php
include("check.php");

$url = $_GET['url'];

/* http: www.thecave.info php-ping-script-to-check-remote-server-or-website */

function ping($host)
{
        exec(sprintf('ping -c 1 -W 5 %s', escapeshellarg($host)), $res, $rval);
        return $rval === 0;
}

$up = ping($url);

If ($up) {
$result = "ok";
} else {
$result = "no";
}

$to = "http://".$serverip."/fsocket.php?url=".urlencode($url)."&protocol=".$protocol."&ping=".$result;
$refresh = rand(1,6);
$header = "Refresh: ".$refresh."; URL= ".$to;

Header($header);

?>

<h1>IsOnline by RamondettiDavide - Test 1/5 - PING test</h1>
Please wait... We are testing "<?php print $url; ?>"... 