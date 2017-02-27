<?php
Include("check.php"); 

$url = $_GET['url'];
$ping = $_GET['ping'];
$fsocket = $_GET['fsocket'];
$protocol = $_GET['protocol'];

$link = $protocol."://".$url;
       if (isDomainAvailible($link)){ 
               $result = "ok";
       }else{
               $result = "no";
       }

       //returns true, if domain is availible, false if not
       function isDomainAvailible($domain)
       {
               //check, if a valid url is provided
               if(!filter_var($domain, FILTER_VALIDATE_URL))
               {
                       return false;
               }

               //initialize curl
               $curlInit = curl_init($domain);
               curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
               curl_setopt($curlInit,CURLOPT_HEADER,true);
               curl_setopt($curlInit,CURLOPT_NOBODY,true);
               curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);

               //get answer
               $response = curl_exec($curlInit);

               curl_close($curlInit);

               if ($response) return true;

               return false;
       }

$to = "http://".$serverip."/visit.php?url=".urlencode($url)."&ping=".$ping."&fsocket=".$fsocket."&curl=".$result."&protocol=".$protocol;
$refresh = rand(0,1);
$header = "Refresh: ".$refresh."; URL=".$to;

Header($header);
?>

<h1>IsOnline by RamondettiDavide - Test 3/5 - CURL Test</h1>
Please wait... We are testing "<?php print $url; ?>"...
