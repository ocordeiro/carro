<?php

if(isset($_REQUEST['id'])){

	$client = new SoapClient(null, array(
      'location' => "http://199.168.139.21/carro/server.php",
      'uri'      => "http://199.168.139.21/carro/server.php",
      'trace'    => 1 ));

	echo json_encode($return = $client->__soapCall("getMovimentos",array((int) $_REQUEST['id'])));
}

?>
