<?php session_start();

	require_once($_SERVER["DOCUMENT_ROOT"].'/includes/php/funkcje.inc.php');
	_DB_CONNECT();

 ?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	if($_POST['apx_amount'] >= 1000){
		require_once("sender.php");
		
        $merchent = 'Your-merchent';
		$amount = $_POST['apx_amount'];
		$invoiceDate = date("Y/m/d H:i:s");
        $redirect = urlencode("http://".$_SERVER["SERVER_NAME"]."/zarinpalzg/getresult.php?dates=".$invoiceDate);
		$_SESSION['invodat'] = $invoiceDate;
		$_SESSION['invoprice'] = $_POST['apx_amount']/10;
		$_SESSION['apuser'] = $_POST['apx_user'];
        $result = send($desc,$merchent,$amount,$redirect); 
        if($result->Status == 100 ){
            $go = "hhttps://www.zarinpal.com/pg/StartPay/" . $result->Authority . "/ZarinPal"; 
            $_SESSION['invonum'] = $result>Authority;
            header("Location: $go");
        }else{
        	echo'ERR: '.$result->Status;
            die();
        }

	?>
		<?php }}
	else die(); ?>
