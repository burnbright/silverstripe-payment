<?php

class PayerHavingReceipt extends DataExtension{
	
	static $db = array(
		'Street' =>		'Varchar',
		'Suburb' =>		'Varchar',
		'CityTown' =>	'Varchar',
		'Country' =>	'Varchar'
	);
	
	function ReceiptMessage(){
		return $this->owner->renderWith('Payer_receipt');
	}
}