<?php

$w_routes = array(
	['GET', '/', 'Default#home', 'default_home'],

	/*Inscription*/
	['GET', '/inscription', 'Default#inscription', 'default_inscription'],
	['POST', '/inscription', 'Default#traitementInscription', 'default_traitementInscription'],

	/*Annoce*/
	['GET', '/annonce', 'Annonce#index', 'Annonce_index'],//Créer nouvelle annonce
	['POST', '/annonce', 'Annonce#traitementAnnonce', 'annonce_traitementAnnonce'],//save annonce in db
	['GET', '/annonce', 'Annonce#myAnnonce', 'Annonce_myAnnonce'],//afficher annonces utilisateur
	['GET', '/annonce/[:theme]', 'Annonce#allAnnonce', 'Annonce_allAnnonce'],//afficher toutes les annonces par thème


	/*créer une page connexion */
	['GET', '/connexion', 'Default#connexion', 'default_connexion'],
	['POST', '/connexion', 'Default#traitementConnexion', 'default_traitementConnexion'],
	['GET', '/deconnexion', 'Default#deconnexion', 'default_deconnexion'],
);
