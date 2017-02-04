<?php
If (!$_POST['url'] and !$_GET['url']) {
  Exit("Missing the URL, send it in POST or GET method");
}

If (!$_POST['protocol'] and !$_GET['protocol']) {
  Exit("Protocol is missing. Please send it in POST or GET method");
}

If ($_GET['url']) {
  $url = $_GET['url'];
}

If ($_POST['url']) {
  $url = $_POST['url'];
}

If ($_POST['protocol']) {
  $protocol = $_POST['protocol'];
}

If ($_GET['protocol']) {
  $protocol = $_GET['protocol'];
}

$serverip = "isonline.ramondettidavide.com"; # HERE MUST GO THE SERVER IP

function watermark(){
  include("watermark.php");
}
