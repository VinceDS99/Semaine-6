<?php
class Employe 
{   
public $_Nom;
public $_Prenom;
public $_DateEmbauche;
public $_Poste;								   
public $_SalaireAn;		
public $_Service;
public $_Agence;
public function Anciennete(){

$now = time();
var_dump($this->_DateEmbauche);
$DateE = strtotime($this->_DateEmbauche);

$diff = ($now - $DateE)/31536000;

$diff=round ($diff,0,PHP_ROUND_HALF_DOWN);

if($diff>0)
{if($diff==1){echo $this->_Nom." ".$this->_Prenom." est la depuis au moins un an.";return $diff;}
else{echo $this->_Prenom." ".$this->_Nom." est la depuis au moins ".$diff." ans.";return $diff;}}
else{echo $this->_Nom." ".$this->_Prenom." est la depuis moins d'un an.";return $diff;}
}

public function Prime(){

$now = time();
var_dump($this->_DateEmbauche);
$DateE = strtotime($this->_DateEmbauche);

$diff = ($now - $DateE)/31536000;

$diff = round ($diff,0,PHP_ROUND_HALF_DOWN);

$PourcentageP = ($diff*2)+5;
$Prime = ($this->_SalaireAn*1000)*$PourcentageP/100;
echo'Montant de la prime de '.$this->_Nom." ".$this->_Prenom." = ".$Prime."€";
return $Prime;
$date = date("30/11");   // ~Date de l'envoi de la prime
//$date = date("d/m");


if($date=="30/11"){
echo "<script>console.log('Ordre de transfert envoyé. Montant: ".$Prime."' );</script>";}
}

public function ChequesVacances(){
$now = time();
var_dump($this->_DateEmbauche);
$DateE = strtotime($this->_DateEmbauche);

$diff = ($now - $DateE)/31536000;

$diff=round ($diff,0,PHP_ROUND_HALF_DOWN);


{if($diff>=1){echo  $this->_Nom." ".$this->_Prenom." peut disposer de chèques vacances car il est la depuis au moins un an.";return true;}
else{echo  $this->_Nom." ".$this->_Prenom." est la depuis moins d'un an et ne peut donc pas disposer de chèques vacances.";return false;}

}	}
}

$JackD = new Employe();
$JackD->_Prenom = "Jack";
$JackD->_Nom = "Dubois";
$JackD->_DateEmbauche = "21 March 2001";
$JackD->_Poste = "Comptable";
$JackD->_SalaireAn = 43;
$JackD->_Service = "Comptabilité";
$JackD->_Agence = $AgenceHDF;









class Agence 
{   
    public $_Nom;
    public $_Adresse;
    public $_CodePostal;
    public $_Ville;
    public $_Restauration;
} 

$AgenceIDF = new Agence();
$AgenceIDF->_Nom = "AgenceIDF";
$AgenceIDF->_Adresse = "5 rue Victor Hugo";
$AgenceIDF->_CodePostal = "75000";
$AgenceIDF->_Ville = "Paris";
$AgenceIDF->_Restauration = "Tickets";

?>