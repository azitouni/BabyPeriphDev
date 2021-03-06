<?php

namespace Model;

use \W\Model\ConnectionModel;

class annonce extends \W\Model\Model {
  private $id ="";
  private $annoceName = "";
  private $annonceDescription = "";
  private $prix = "";
  private $isLocation ="";
  private $isVente ="";
  private $isService ="";
  private $dateCreation="";
  private $dateModification="";
  private $imagePrincipale="";
  private $imageFree="";
  private $image1="";
  private $image2="";
  private $image3="";
  private $data="";

  public function __construct(){

    $this->setTable('annonce');

    $this->dbh = ConnectionModel::getDbh();
  }

  public function getAnnonce($id){
    $annonce = $this->find($id);
    var_dump($annonce);
    $this->id = $annonce['id'];
    $this->annonceName= $annonce['annonceName'];
    $this->annonceDescription = $annonce['annonceDescription'];
    $this->prix = $annonce['prix'];
    $this->isLocation = $annonce['isLocation'];
    $this->isVente = $annonce['isVente'];
    $this->isService = $annonce['isService'];
    $this->dateCreation = $annonce['dateCreation'];
    $this->dateModification = $annonce['dateModification'];
    $this->imagePrincipale = $annonce['imagePrincipale'];
    $this->imageFree = $annonce['imagefree'];
    $this->image1 = $annonce['image1'];
    $this->image2 = $annonce['image2'];
    $this->image3 = $annonce['image3'];
    return $this;
  }
  public function getAnnonceById($id){
    //var_dump($id);
    //var_dump($this);
    $annonce = $this->find($id);
    //var_dump($annonce);
    return $annonce;
  }

  public function getAnnonceByUserId($user_id){
    $app = getApp();
    $sql = 'SELECT * FROM ' .$this->table .' WHERE idUtilisateur = :user_id LIMIT 1';

    $dbh = ConnectionModel::getDbh();
		$sth = $dbh->prepare($sql);
		$sth->bindValue('idUtilisateur', $user_id);
    if($sth->execute()){
			$foundAnnonce = $sth->fetch();
			if($foundAnnonce){
        $this->id = $foundAnnonce['id'];
        $this->annonceName= $foundAnnonce['annonceName'];
        $this->annonceDescription = $foundAnnonce['annonceDescription'];
        $this->prix = $foundAnnonce['prix'];
        $this->isLocation = $foundAnnonce['isLocation'];
        $this->isVente = $foundAnnonce['isVente'];
        $this->isService = $foundAnnonce['isService'];
        $this->user_id = $foundAnnonce['idUtilisateur'];
				//return $foundUser;
			}
		}
    return false;
  }

  public function getData($field) {
    return unserialize($this->data)[$field];
  }

  public function getAnnonceTitle(){
  return $this->annonceName;
}

  public function setAnnonceTitle($title){
    return $this->annonceName = $title;
  }

  public function setRenouvelAnnonce($id){
  $annonce = $this->find($id);
  $updateAnnonce = $this->update(['dateCreation' => date("d-m-Y H:i:s")]);
  }
  public function findAllAnnonceByTheme($theme)
	{
    switch ($theme) {
      case 'vente':
        $sql = 'SELECT  * FROM annonce WHERE  isVente = 1';
        break;
      case 'service':
          $sql = 'SELECT  * FROM annonce WHERE  isService = 1';
          break;
      default:
        $sql = 'SELECT  * FROM annonce WHERE  isLocation = 1';
        break;
    }

		$sth = $this->dbh->prepare($sql);
		$sth->execute();

		return $sth->fetchAll();
	}

  public function findAllAnnonceBySearch($chaine)
	{
    //var_dump($vars...)
    if (isset($chaine)) {
      $sql = "SELECT  * FROM annonce WHERE  annonceName LIKE '%" .$chaine ."%'  OR annonceDescription LIKE '%" .$chaine ."%' ";
      //var_dump($sql);
      $sth = $this->dbh->prepare($sql);
		  $sth->execute();

		  return $sth->fetchAll();
    }
    else {
      return false;
    }
	}

  public function findMyAnnonce($loggedUser)
	{

    if (!isset($loggedUser)) {
      return false;
    }

    $sql = 'SELECT  * FROM annonce WHERE idUtilisateur = ' .$loggedUser['id'];

		$sth = $this->dbh->prepare($sql);
		$sth->execute();

		return $sth->fetchAll();
	}
}









 ?>
