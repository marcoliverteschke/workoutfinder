<?php

	require 'includes/flight/Flight.php';

	Flight::route('/', function(){
		Flight::render('layout', array('title' => 'Home Page'));
	});

	Flight::start();
