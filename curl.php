<?php
//$username="admin"; 
//$password="opencast";
//$action = "logon";
//$utf8CharTest="ä™®";
//$submit = "Submit";
//$url="http://localhost/wikindx/index.php?action=initLogon"; 
//$cookie="cookie.txt"; 
//
//$postdata = "username=".$username."&userpass=".$password."&action=".$action."&utf8CharTest=".$utf8CharTest."&submit=".$submit.""; 
//
//$ch = curl_init(); 
//curl_setopt ($ch, CURLOPT_URL, $url); 
//curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
//curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); 
//curl_setopt ($ch, CURLOPT_TIMEOUT, 60); 
//curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0); 
//curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
////curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie); 
//curl_setopt ($ch, CURLOPT_REFERER, $url); 
//
//curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata); 
//curl_setopt ($ch, CURLOPT_POST, 1); 
//$result = curl_exec ($ch); 
//
//echo $result;  
//curl_close($ch);

echo $string = file_get_contents('http://localhost/wikindx/cmsprint.php?action=getRecent&limit=10');
print_r(unserialize(base64_decode($string)));