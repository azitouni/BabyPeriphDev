<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],

		/*Inscription*/
	['GET', '/inscription', 'Default#inscription', 'default_inscription'],
	['POST', '/inscription', 'Default#traitementInscription', 'default_traitementInscription'],
	);
