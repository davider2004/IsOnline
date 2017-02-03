<?php
Include("check.php");

$url = $_GET['url'];
$ping = $_GET['ping'];
$fsocket = $_GET['fsocket'];
$curl = $_GET['curl'];
$protocol = $_GET['protocol'];

$link = $protocol.".//".$url;

       // inizializzo cURL
$ch = curl_init();

curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// imposto la URL della risorsa remota da scaricare
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

// imposto che non vengano scaricati gli header
curl_setopt($ch, CURLOPT_HEADER, 0);

// eseguo la chiamata
$output = curl_exec($ch);

// chiudo cURL
curl_close($ch);

if ($output) {
  $result="ok";
}else{
  $result="no";
}

$to = "http://".$serverip."/socket.php?url=".urlencode($url)."&ping=".$ping."&fsocket=".$fsocket."&curl=".$curl."&visit=".$result."&protocol=".$protocol;
$refresh = rand(1,8);
$header = "Refresh: ".$refresh."; URL=".$to;

Header($header);
?>

<h1>IsOnline by RamondettiDavide - Test 4/5 - VISIT Test</h1>
Please wait... We are testing "<?php print $url; ?>"...<br><br>
<b>N.B:</b>This test use a CURL with some fakes user agents to join the website. It doesn't had Javascript, so disable the javascript challenge or it can be an error in the website check.
