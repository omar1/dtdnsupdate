<php?
#==================================#
# Written by: Omar FadlAllah       #
                                   #
# Date : 3-Jan-2014                #
                                   #
# dtdns update client : omar101    #
                                   #
#==================================#

$IP=exec("wget -qO- http://ipecho.net/plain") ;


#==========you will need only to change the below varibles =========
$password="XXXXX" ;

$host="XXXX" ;

#=================================================================
$opts = array('http' =>
    array(
        'method'  => 'GET',
        'header'  => 'Accept: application/x-www-form-urlencoded'
    )
);

$context = stream_context_create($opts);

$result = file_get_contents("http://www.dtdns.com/api/autodns.cfm?id=$host&pw=$password&ip=$IP&client=omar101", false, $context);

echo $result ;

echo $IP ;

?>
