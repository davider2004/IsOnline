<?php
Include("check.php");

$url = $_GET['url'];
$ping = $_GET['ping'];
$fsocket = $_GET['fsocket'];
$curl = $_GET['curl'];
$visit = $_GET['visit'];
$socket = $_GET['socket'];
$ex1 = "no";
$ex2 = "ok";

$result = array(
           "ok" => "<font color=green><b>OK</b></font>",
           "no" => "<font color=red><b>FAILED</b></font>"
);
?>

<script type="text/javascript">
// (c) 2016 RamondettiDavide.com

a="Excuse me, but I do not found any code for Ping using PHP"
b="Excuse me, but I do not found any code for VISIT using PHP"
</script>

<h1>IsOnline by RamondettiDavide</h1>
<h2>TEST FINISHED!</h2>
<br>
Results for <b><?php print $protocol; ?>://<?php print $url; ?></b>: <br><br>
Ping Test: <font color="orange"><b>TEST DISABLED (<a href="#!showHelp=291853" onClick="alert(a)">i</a>)</font></b><br>
FSocket Test: <?php print $result[$fsocket]; ?><br>
CURL Test: <?php print $result[$curl]; ?><br>
Visit Test: <font color="orange"><b>TEST DISABLED (<a href="#!showHelp=29184" onClick="alert(b)">i</a>)</font></b><br>
Socket Test: <?php print $result[$socket]; ?><br><br>

<br><font color="Red"><b>REMEMBER! The test of Ping,FSocket and Visit can fail if you had a DDoS Protection (like CloudFlare)</b></font><br><br>
<b>If there are more <?php print $result[$ex1]; ?> is probability this website is <font color="red">OFFLINE</font>, else, if there are more <?php print $result[$ex2]; ?> is probability this website is <font color="green">ONLINE</font>.</b><br><br>

Thanks for using this software and bye! (Excuse me for my English, but English isn't my native language)
