<?php

$w_routes = array(
	['GET', '/', 'Default#home', 'default_home'],

	/*Inscription*/
	['GET', '/inscription', 'Default#inscription', 'default_inscription'],
	['POST', '/inscription', 'Default#traitementInscription', 'default_traitementInscription'],

	/*Annonce*/
	['GET', '/annonce', 'Annonce#index', 'Annonce_index'],//Créer nouvelle annonce
	['POST', '/annonce', 'Annonce#traitementAnnonce', 'annonce_traitementAnnonce'],//save annonce in db
	['GET', '/annonces', 'Annonce#myAnnonce', 'Annonce_myAnnonce'],//afficher annonces utilisateur
	['GET', '/annonces/[:theme]', 'Annonce#allAnnonce', 'Annonce_allAnnonce'],//afficher toutes les annonces par thème
	['GET', '/annonce/[:id]', 'Annonce#detail', 'Annonce_detail'],//afficher le detail de l'annonce
	['POST', '/annonce/updateDelete/[:id]', 'Annonce#updateDelete', 'annonce_updateDelete'],//update & Delete annonce in db
	['POST', '/annonce/update/[:id]', 'Annonce#update', 'annonce_update'],//update & Delete annonce in db
	['POST', '/annonce/search', 'Annonce#search', 'Annonce_search'],//afficher liste anoonce résultat recherche

	/* connexion */
	['GET', '/connexion', 'Default#connexion', 'default_connexion'],
	['POST', '/connexion', 'Default#traitementConnexion', 'default_traitementConnexion'],
	['GET', '/deconnexion', 'Default#deconnexion', 'default_deconnexion'],

	/*Plan de site*/
	['GET', '/planDeSite', 'Default#sitemap', 'default_sitemap'],

	/*mot de passe perdu */
	['GET', '/motDePassePerdu', 'Default#lost','default_lostPassword'],
	['POST', '/motDePassePerdu', 'Default#traitementLost','default_traitementLost'],

	['GET', '/motDePassePerdu/[:token]/[:id]', 'Default#changementMdp','modifier_mdp'],
	['POST', '/changementMdp', 'Default#traitementChangementMdp','default_changementMdp'],
	/*page success*/
	['GET', '/success','Default#traitementSuccess','default_success'],

	/*Pourquoi louer?*/
	['GET', '/pourquoilouer', 'Default#pourquoilouer', 'default_pourquoiLouer'],
	/* Qui sommes nous?*/
	['GET', '/quisommesnous', 'Default#quisommesnous', 'default_quisommesnous'],
	/*envoie message*/
	['GET', '/contact', 'contact#index', 'contact_index'],
	['POST', '/envoi-formulaire', 'contact#traitementForm', 'contact_traitementform'],

	/*Profile*/
	['POST', '/profile/update/[:id]', 'Default#updateProfile', 'default_updateProfile'],//update & Delete annonce in db
	['GET', '/profile/[:id]', 'Default#profile', 'default_profile'],//update & Delete annonce in db

);
