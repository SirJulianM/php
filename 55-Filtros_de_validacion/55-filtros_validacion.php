<?php

/*

* FILTER_VALIDATE_BOOLEAN
*   FILTER_NULL_ON_FAILURE
* FILTER_VALIDATE_EMAIL
* FILTER_VALIDATE_FLOAT
*   FILTER_FLAG_ALLOW_THOUSAND
* FILTER_VALIDATE_INT
*   FILTER_FLAG_ALLOW_OCTAL
*   FILTER_FLAG_ALLOW_HEX
* FILTER_VALIDATE_IP
*   FILTER_FLAG_IPV4
*   FILTER_FLAG_IPV6
*   FILTER_FLAG_NO_PRIV_RANGE
*   FILTER_FLAG_NO_RES_RANGE
* FILTER_VALIDATE_MAC
* FILTER_VALIDATE_REGEXP
* FILTER_VALIDATE_URL
*   FILTER_FLAG_PATH_REQUEST
*   FILTER_FLAG_QUERY_REQUIRED 

*/

$booleano = true;
echo filter_var($booleano, FILTER_VALIDATE_BOOLEAN)."<br /><hr />";
$email = "ing_julianmadrid@hotmail.com";
echo filter_var($email, FILTER_VALIDATE_EMAIL)."<br /><hr />";
$int = 5;
echo filter_var($int, FILTER_VALIDATE_INT)."<br /><hr />";
$hexa = "0xaf01";
echo filter_var($hexa, FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_HEX)."<br /><hr />";
$ipv6 = "FE80::20A:41FF:FEEA:C249";
echo filter_var($ipv6, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)."<br /><hr />";
$webpage = "https://www.youlauss.com";
echo filter_var($webpage, FILTER_VALIDATE_URL);

?>