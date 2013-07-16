<?php
    function send($desc,$api,$amount,$redirect){
	$client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', array('encoding'=>'UTF-8'));
	$res = $client->PaymentRequest(
	array(
					'MerchantID' 	=> $api ,
					'Amount' 		=> $amount ,
					'Description' 	=> $desc ,
					'Email' 		=> '' ,
					'Mobile' 		=> '' ,
					'CallbackURL' 	=> $redirect

					)
	 );
        return $res;
    }
    function get($api,$au,$amount){
	$client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', array('encoding'=>'UTF-8'));
	$res = $client->PaymentVerification(
			array(
					'MerchantID'	 => $api ,
					'Authority' 	 => $au ,
					'Amount'	 	=> $amount
				)
		);
        return $res;
    }
?>
