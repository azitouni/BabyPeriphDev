<?php

namespace Controller;

use PHPMailer;
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
		// var_dump($_FILES);
		// var_dump($avatar);
		$address = htmlentities(strip_tags($_POST['address']));
		$postalCode = htmlentities(strip_tags($_POST['postalCode']));
		$city = htmlentities(strip_tags($_POST['city']));
		$phone = htmlentities(strip_tags($_POST['phone']));
		$selectTypeUser = $_POST['select_type_user'];

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



		if (isset($avatar) && strlen($avatar)>0) {
			$avatar = $userData['id'] .'_' .$avatar;
			$updateUser = $user->Update(['avatar' => $avatar],$userData['id']);

			$file_name = $_FILES['fichier']['name'];
			$destination_folder = '../public/assets/img/avatar/' .$userData['id'] .'_'  .$file_name;
			$tmp = $_FILES['fichier']['tmp_name'];
			if (!move_uploaded_file($tmp,$destination_folder)) {
				$erreur = 'Erreur, impossible de copier le fichier dans:' .$destination_folder;
				exit($erreur);
			}
		}
		if (isset($userData) && $userData['id'] !==0) {
			$userModel = new UsersModel();
			$user = $userModel->find($userData['id']);
			$auth->logUserIn($user);
			$this->redirectToRoute('default_home');
		}
		else {
			$this->redirectToRoute('default_home');
		}
	}

	/**
	 * Page connexion
	 */
	public function connexion()
	{
		$this->show('default/connexion');
	}
	/**
	 * Page traitement connexion
	 */
	public function traitementConnexion()
	{
		$auth = new Auth();
		$usernameOrEmail = htmlentities(strip_tags($_POST['identifiant']));
		$plainPassword = htmlentities(strip_tags($_POST['password']));

		$userId = $auth->IsValidLoginInfo($usernameOrEmail,$plainPassword);
		//var_dump($userId);
		if ($userId !==0) {
			$userModel = new UsersModel();
			$user = $userModel->find($userId);
			$auth->logUserIn($user);
			//var_dump($user);
			$this->redirectToRoute('default_home');
			// if (isset($user)) {
			// 	$this->redirectToRoute('admin_index');
			// }
			// else {
			//$this->redirectToRoute('default_home');
			// }

		}
		else {
			$this->redirectToRoute('default_home');
		}
	}

	/**
	 * Page traitement connexion
	 */
	public function deconnexion()
	{
		$auth = new Auth();
		$auth->logUserOut();
		$this->redirectToRoute('default_home');

	}



	public function sitemap()
	{
		$this->show('default/sitemap');
	}
	/**
	 * Page Pourquoi louer?
	 */
	public function pourquoilouer()
	{
		$this->show('default/pourquoilouer');
	}

	public function profile($id){

		$userModel = new UsersModel();
		$user = $userModel->find($id);
		$this->show('default/profile',['user'=>$user]);

	}

	public function updateProfile($id){
		$userModel = new UsersModel();
		$user = $userModel->find($id);
		$auth = new AuthentificationModel;
		$lastName = htmlentities(strip_tags($_POST['lastName']));
		$firstName = htmlentities(strip_tags($_POST['firstName']));
		$username = htmlentities(strip_tags($_POST['username']));
		$email = htmlentities(strip_tags($_POST['email']));
		$avatar = htmlentities(strip_tags($_FILES['fichier']['name']));
		// var_dump($_FILES);
		// var_dump($avatar);
		$address = htmlentities(strip_tags($_POST['address']));
		$postalCode = htmlentities(strip_tags($_POST['postalCode']));
		$city = htmlentities(strip_tags($_POST['city']));
		$phone = htmlentities(strip_tags($_POST['phone']));
		$selectTypeUser = $_POST['select_type_user'];

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
			if (isset($_POST['password'])) {
				$password=$auth->hashPassword($_POST['password']);
			}

		$userData = $userModel->Update([ 'lastName' => $lastName,
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
																'password' => $password],
																$id);



		if (isset($avatar) && strlen($avatar)>0) {
			$avatar = $userData['id'] .'_' .$avatar;
			$updateUser = $user->Update(['avatar' => $avatar],$userData['id']);

			$file_name = $_FILES['fichier']['name'];
			 $destination_folder = '../public/assets/img/avatar/' .$userData['id'] .'_'  .$file_name;
			 $tmp = $_FILES['fichier']['tmp_name'];
			 if (!move_uploaded_file($tmp,$destination_folder)) {
				 $erreur = 'Erreur, impossible de copier le fichier dans:' .$destination_folder;
				 exit($erreur);
			 }
		}
		if (isset($userData) && $userData['id'] !==0) {
			$userModel = new UsersModel();
			$user = $userModel->find($userData['id']);
			$auth->logUserIn($user);
			$this->redirectToRoute('default_home');
		}
		else {
			$this->redirectToRoute('default_home');
		}
	}


	public function lost()
	{

		$this->show('default/lostPassword');
		
	}


	public function traitementLost(){

		$auth = new AuthentificationModel;
		$user = new UsersModel;


		$usernameOrEmail = htmlentities(strip_tags($_POST['email']));
		


		$userNew = $user->getUserByUsernameOrEmail($usernameOrEmail);
		$token = md5($usernameOrEmail.date('dmY')); //création token??
		$link = $_SERVER['SERVER_NAME'] . $this->generateUrl('modifier_mdp', ['token' => $token, 'id' => $userNew['id']]);

		
		
			
			//$user = $userModel->find($userId);

			$mail = new PHPMailer; // nouvel objet de type mail
		$mail->isSMTP(); // on va se connecter directement au serveur SMTP
		$mail->isHTML(true); // on va utiliser le format HTML pour le message
		$mail->Host = "smtp.gmail.com"; // le serveur SMTP utilisé
		$mail->Port = 465; // le port utilisé pour le SMTP
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'ssl'; // certificats SSl
		$mail->Username = "bioforce3@gmail.com";
		$mail->Password = "547896321";
		$mail->setFrom('bioforce3@gmail.com', 'Bioforce 3 '); //expediteur
		$mail->addAddress($usernameOrEmail); // le destinataire
		$mail->Subject = utf8_decode('Récuperation de votre mot de passe');
		$mail->Body = '<html>
						<head>
						<meta charset="utf-8" />
						<style>
						h1{color: green;}
						</style>
						</head>
						<body>
						<h1>Mot de passe perdu</h1>
						<p>Vous avez signalé votre mot de passe comme oublié. Veuillez
						cliquer sur le lien suivant pour le réinitialiser.</p>
						<a href="'.$link.'">réinitialiser mon mot de passe</a> 
						</body>
						</html>';

		if(!$mail->send())// si l'envoi délire...
		{
			echo 'Erreur envoi : '.$mail->ErrorInfo;
		} 
		else{
			var_dump($user);
			$updateUser = $user->Update(['token' => $token],$userNew['id']);
			echo '<script>
					alert("vous allez recevoir un mail dans quelques instants.");
					</script>';	
			$this->redirectToRoute('default_home');

		}		
	}
	public function traitementSuccess(){
		$this->show('default/success');
	}
	public function changementMdpErreur($erreur){
		$this->show('default/changePassword',['erreur' => $erreur]);
	}

	public function changementMdp($token,$id){
		$this->show('default/changePassword',['token' => $token, 'id'=>$id]);
	}
	public function traitementChangementMdp(){
		$token = $_POST['token'];
		$id = $_POST['id'];
		$user = new UsersModel;
		$currentUser = $user->find($id);
		if($currentUser['token'] === $token){
			if($_POST['pass'] === $_POST['pass2']){
				$nouveauMdp = password_hash($_POST['pass'], PASSWORD_DEFAULT);
				$user->update(['password' => $nouveauMdp], $currentUser['id']);
				$_SESSION['success'] = 'Mot de passe modifier';
				//$this->redirectToRoute('default_home');
				//ça se passe bien
				$auth = new AuthentificationModel;
				$auth->logUserIn($currentUser);
				$this->redirectToRoute('default_home');
	      		
			}else{
				$_SESSION['erreur'] = 'Veuillez saisir 2 mot de passe identique';
				$this->redirectToRoute('modifier_mdp',['token' => $token, 'id'=>$id]);
			}

		}else{ 
			$_SESSION['erreur'] = 'Veuillez redonner votre Email';
			$this->redirectToRoute('default_lostPassword');
			

		}
	}
}


