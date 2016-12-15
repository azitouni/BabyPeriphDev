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
    $this->imageFree = $annonce['imageFree'];
    $this->image1 = $annonce['image1'];
    $this->image2 = $annonce['image2'];
    $this->image3 = $annonce['image3'];

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

}









 ?>
