<?php

#Written by Omar FadlAllah
#3-Jan-2014
#Egypt 
#Clent Name:Omar101

$IP=exec("wget -qO- http://ipecho.net/plain") ;


$opts = array('http' =>
    array(
        'method'  => 'GET',
        'header'  => 'Accept: application/x-www-form-urlencoded'
    )
);

$context = stream_context_create($opts);

$result = file_get_contents("http://www.dtdns.com/api/autodns.cfm?id=host.dtdns.net&pw=XXXXXX&ip=$IP&client=omar101", false, $context);

echo $result ;

//$IP=exec("wget -qO- http://ipecho.net/plain") ;
//echo $IP ;

?>
