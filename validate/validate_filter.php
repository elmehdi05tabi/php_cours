<?php 
/*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Validate Filters

    ------ FILTER_VALIDATE_BOOL => [True, 1, Yes, On]
    ---------- Flag => FILTER_NULL_ON_FAILURE => False For [False, 0, No, Off, ""] Only

    ------ FILTER_VALIDATE_URL
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_PATH_REQUIRED
    ---------- Flag => FILTER_FLAG_QUERY_REQUIRED

    ------ FILTER_VALIDATE_IP
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_IPV4
    ---------- Flag => FILTER_FLAG_IPV6

    ------ FILTER_VALIDATE_MAC
    ---------- Flag => FILTER_NULL_ON_FAILURE
*/
// ! validation sur boolen 
$bool = "elmehdi" ;  // true | 1 | "yes" | "on"   
echo var_dump(filter_var($bool , FILTER_VALIDATE_BOOL,FILTER_NULL_ON_FAILURE)) ."<br>"  ; 
// ^ validation sur lien 
$url1 = "http//www.elmehdi.cm" ; 
$url2 = "http://www.elmehdi.com//fla" ; 
$url3 = "http://www.elmehdi.com" ; 
echo var_dump(filter_var($url1,FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE)) ."<br>" ; 
echo var_dump(filter_var($url2,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED)) ."<br>" ; 
echo var_dump(filter_var($url3,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)) ."<br>" ; 

// ~ validte sur ip => interet protocol address 
$ip = "192.168.123.132" ; 
$ipv4 = "192.168.1.255" ; 
$ipv6 = "1050:0000:0000:0000:0005:0600:300c:326b" ; 
echo var_dump(filter_var($ip ,FILTER_VALIDATE_IP,FILTER_NULL_ON_FAILURE)) ."<br>" ;
echo var_dump(filter_var($ipv4 , FILTER_VALIDATE_IP,FILTER_FLAG_IPV4)) ."<br>";
echo var_dump(filter_var($ipv6 , FILTER_VALIDATE_IP,FILTER_FLAG_IPV6))."<br>";

// & validation sur mac => mediac acces control address 
$mac = "00:00:5e:00d:53:af";

  var_dump(filter_var($mac, FILTER_VALIDATE_MAC));
?>