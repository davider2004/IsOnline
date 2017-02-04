<?php
Include("check.php");

$url = $_GET['url'];
//$ping = $_GET['ping']; // DISABLED
$fsocket = $_GET['fsocket'];
$curl = $_GET['curl']; 
//$visit = $_GET['visit']; // DISABLED
$socket = $_GET['socket'];
$ex1 = "no";
$ex2 = "ok";

$result = array(
           "ok" => "<font color=green><b>OK</b></font>",
           "no" => "<font color=red><b>FAILED</b></font>"
);

if ($fsocket == "ok") {
           $online = 1;
}elseif ($fsocket == "no"){
           $offline = 1;
}

if ($curl == "ok") {
           $online = $online+1;
}elseif ($curl == "no"){
           $offline = $offline+1;
}

if ($socket == "ok"){
           $online = $online+1;
}elseif ($socket == "no"){
           $offline = $offline+1;
}

if ($offline > $online) {
           $res11 = "offline";
}elseif ($online > $offline){
           $res11 = "online";
}

$results1 = array(
           "offline" => "<font color=red><b>OFFLINE</b></font>",
           "online" => "<font color=green><b>ONLINE</b></font>"
);

$def = $results1[$res11];
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
FSocket Test: <?php print $result[$fsocket]; ?><br>
CURL Test: <?php print $result[$curl]; ?><br>
Socket Test: <?php print $result[$socket]; ?>
Ping Test: <font color="orange"><b>TEST DISABLED (<a href="#!showHelp=291853" onClick="alert(a)">i</a>)</font></b><br>
Visit Test: <font color="orange"><b>TEST DISABLED (<a href="#!showHelp=29184" onClick="alert(b)">i</a>)</font></b><br><br>

<h1>RESULT: Your website is <?php print $def; ?></h1>
<br><br>

Thanks for using this software and bye! (Excuse me for my English, but English isn't my native language)<br>
<?php watermark(); ?> 
