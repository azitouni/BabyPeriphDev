<?php

$w_routes = array(
	['GET', '/', 'Default#home', 'default_home'],

	/*Inscription*/
	['GET', '/inscription', 'Default#inscription', 'default_inscription'],
	['POST', '/inscription', 'Default#traitementInscription', 'default_traitementInscription'],

	/*Annoce*/
	['GET', '/annonce', 'Annonce#index', 'Annonce_index'],//Créer nouvelle annonce
	['POST', '/annonce', 'Annonce#traitementAnnonce', 'annonce_traitementAnnonce'],//save annonce in db
	['GET', '/annonces', 'Annonce#myAnnonce', 'Annonce_myAnnonce'],//afficher annonces utilisateur
	['GET', '/annonces/[:theme]', 'Annonce#allAnnonce', 'Annonce_allAnnonce'],//afficher toutes les annonces par thème
	['GET', '/annonce/[:id]', 'Annonce#detail', 'Annonce_detail'],//afficher le detail de l'annonce
	['POST', '/annonce/updateDelete/[:id]', 'Annonce#updateDelete', 'annonce_updateDelete'],//update & Delete annonce in db
	['POST', '/annonce/update/[:id]', 'Annonce#update', 'annonce_update'],//update & Delete annonce in db

	/*créer une page connexion */
	['GET', '/connexion', 'Default#connexion', 'default_connexion'],
	['POST', '/connexion', 'Default#traitementConnexion', 'default_traitementConnexion'],
	['GET', '/deconnexion', 'Default#deconnexion', 'default_deconnexion'],
);
