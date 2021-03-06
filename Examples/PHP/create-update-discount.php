<?php

require_once('../../Library/PHP/Explara.php');

function createDiscount(){
	$explara					= new Explara();
	$event						= new Discount();
	$event->eventId				= 'EKDJHH';
	$event->ticketId			= 'TKCIGJ';
	$event->discountCategory  	= 'flat';
	$event->discount   			= 30;
	$event->discountType  		= 'fixed';
	$response					= $explara->createDiscount($event);
	echo "<br><pre>"; print_r($response); die;
}

function updateDiscount(){
	$explara					= new Explara();
	$event						= new Discount();
	$event->eventId				= 'EKDJHH';
	$event->ticketId			= 'TKCIGJ';
	$event->discountCategory  	= 'flat';
	$event->discount   			= 50;
	$event->discountType  		= 'fixed';
	$event->discountId			= 'DKFJ';
	$response					= $explara->updateDiscount($event);
	echo "<br><pre>"; print_r($response); die;
}
