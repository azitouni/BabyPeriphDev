<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel;
use \W\Security\AuthentificationModel;
use \Model\PageModel;
use \W\Security\AuthentificationModel as Auth;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		//$this->show('default/home');
		$loggedUser = $this->getUser();
		$this->show('default/home',['user' => $loggedUser]);
	}

	/**
	 * Page inscription
	 */
	public function inscription()
	{
		$this->show('default/inscription');
	}

	/**
	 * Page inscription
	 */

	public function traitementInscription()
	{
		$user = new UsersModel;
		$auth = new AuthentificationModel;
		$lastName = htmlentities(strip_tags($_POST['lastName']));
		$firstName = htmlentities(strip_tags($_POST['firstName']));
		$username = htmlentities(strip_tags($_POST['username']));
		$email = htmlentities(strip_tags($_POST['email']));
		$avatar = htmlentities(strip_tags($_FILES['fichier']['name']));
		$address = htmlentities(strip_tags($_POST['address']));
		$postalCode = htmlentities(strip_tags($_POST['postalCode']));
		$city = htmlentities(strip_tags($_POST['city']));
		$phone = htmlentities(strip_tags($_POST['phone']));
		$selectTypeUser = $_POST['select_type_user'];

		if (isset($selectTypeUser)) {
			switch ($selectTypeUser) {
				case 2:
					$isPremium =true;
					$isProfessional =false;
					break;
				case 3:
					$isPremium =false;
					$isProfessional =true;
					break;
				default:
				$isPremium =false;
				$isProfessional =false;
				break;
			}

		}

		$password=$auth->hashPassword($_POST['password']);
		$userData = $user->Insert([ 'lastName' => $lastName,
																'firstName' => $firstName,
																'username' => $username,
																'email' => $email,
																'address' => $address,
																//'avatar' => $avatar,
																'postalCode' => $postalCode,
																'city' => $city,
																'phone' =>$phone,
																'isPremium' => $isPremium,
																'isProfessional' => $isProfessional,
																'password' => $password]);

		$auth->logUserIn($userData);

		$avatar = $userData['id'] .'_' .$avatar;
		$update = $user->Update(['avatar' => $avatar],$userData['id']);
		var_dump($update);
		if (isset($avatar)) {
			var_dump($_FILES);
			$file_name = $_FILES['fichier']['name'];
			 $destination_folder = '../public/assets/img/avatar/' .$userData['id'] .'_'  .$file_name;
			 $tmp = $_FILES['fichier']['tmp_name'];
			 if (!move_uploaded_file($tmp,$destination_folder)) {
				 $erreur = 'Erreur, impossible de copier le fichier dans:' .$destination_folder;
				 exit($erreur);
			 }
		}

		//$this->redirectToRoute('default_inscription');
	}


}
