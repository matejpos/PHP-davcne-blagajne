<?php

	// uradna dokumentacija
	// http://www.datoteke.fu.gov.si/dpr/index.html

	require_once 'DavcneBlagajne.class.php';
	ini_set('display_errors', true);
	
	// echo msg
	// echo msg
	
	$db = new DavcneBlagajne;
	// switch on test mode & create message
	$db->setTestMode();
	$db->createEchoMsg();
	
	// post message to FURS
	$db->postXML2Furs();
	var_dump($db->getFURSResponse());
	
	// display xml message
	// $db->echoXML();
	
	
	// business premise declaration
	// business premise declaration
	
	/*
	 $config_business = array(
	 		'businessID' => '1',
	 		'businessValidityDate' => '2200-01-01'
	 );
	
	$db = new DavcneBlagajne;
	// switch on test mode & create message
	$db->setTestMode();
	$db->data = $config_business;
	$db->createBusinessMsg();
	
	// post xml message to furs
	// $db->postXML2Furs();
	// var_dump($db->getFURSResponse());
	
	// display message xml
	$db->echoXML();
	*/
	
	
	// invoice declaration
	// invoice declaration
	
	/*
	$config_invoice = array(
			'InvoiceNumber' => $invoiceId,
			'IssueDateTime' => $invoiceDate,
			'InvoiceAmount' => $invoiceAmount,
			'OperatorTaxNumber' => $operatorTaxNum
	);
	
	$db = new DavcneBlagajne;
	// switch on test mode
	$db->setTestMode();
	$db->data = $config_invoice;
	$db->createInvoiceMsg();
	
	// post xml message to furs
	$db->postXML2Furs();
	var_dump($db->getFURSResponse());
	$db->generateQR();
	
	// display xml message 
	// $db->echoXML();
	*/


?>