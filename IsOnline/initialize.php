<?php
include("check.php");
$lang = $_POST['lang'];
$url  = urlencode($url);

function alertforit(){
  Echo "<font color=red><b>Da adesso in poi il sito sarà in Inglese.</b></font>";
}

Header("Refresh: 6.5; URL=http://isonline.ramondettidavide.com/start.php?url=".$url."&protocol=".$protocol);
?>
<!doctype html>
<html>
<head>
    <title>IsOnline ? The best website online status checker / RamondettiDavide</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style type="text/css">
    body {
        background-color: #f0f0f2;
        margin: 0;
        padding: 0;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        
    }
    div {
        width: 600px;
        margin: 5em auto;
        padding: 50px;
        background-color: #fff;
        border-radius: 1em;
    }
    a:link, a:visited {
        color: #38488f;
        text-decoration: none;
    }
    @media (max-width: 700px) {
        body {
            background-color: #fff;
        }
        div {
            width: auto;
            margin: 0 auto;
            border-radius: 0;
            padding: 1em;
        }
    }
    </style>    
</head>

<body>
<div>
    <h1>IsOnline - The best website online status checker</h1>
    <p><small>by RamondettiDavide</small></p>
    <p></p>
    <h2>Preparing website tester.....</h2>
    <p></p>
    <p>Preparing the test on <b><?php print $protocol; ?>://<?php print urldecode($url); ?></b>...</p>
    <p></p>
    <p><font color="Red"><b>WARNING: If your website had a DDoS Protection (like CloudFlare) some test can fail (tests can fail are: Ping,FSocket and Visit), so you must only count the CURL and Socket tests. </font></b></p>
    <p><?php if ($lang == "it"){ alertforit(); } ?></p>
    <p></p>
    <p><b>Excuse me for my English, but i'm Italian. If i've typed somes errors contact me at davide@ramondettidavide.com</b></p>
    <p></p>
    <p><i>&copy; 2017 <a href="https://ramondettidavide.com/" target="_blank">RamondettiDavide</a>, all rights riserved</i></p>
</div>
</body>
</html>
