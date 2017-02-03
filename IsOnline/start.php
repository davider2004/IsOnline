<?php
$url_post = $_POST['url'];
$url_get = $_GET['url'];
$protocol_post = $_POST['protocol'];
$protocol_get = $_GET['protocol'];

If (!$_POST['url'] and !$_GET['url']) {
  Exit("Missing the URL, send it in POST or GET method");
}

If (!$_POST['protocol'] and !$_GET['protocol']) {
  Exit("Missing the Protocol, send it in POST or GET method");
}

if ($url_get) {
   Echo "method: get, url: ".$_GET['url'].", STARTING.....";
   $url = urlencode($_GET['url']);
   $header = "Refresh: 2; URL=http://isonline.ramondettidavide.com/ping.php?url=".$url."&protocol=".$protocol_get;
   header($header);
}

If ($url_post) {
   Echo "method: post, url: ".$_POST['url'].", STARTING...";
   $url = urlencode($_POST['url']);
   $header = "Refresh: 2; URL=http://isonline.ramondettidavide.com/ping.php?url=".$url."&protocol=".$protocol_post;
   header($header);
}
