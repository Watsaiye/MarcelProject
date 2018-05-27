<?php 

/**
 * 
 */
class Voiture {

	private $couleur;
	private $marque;
	
	function __construct($couleur, $marque) {
		$this->couleur = $couleur;
		$this->marque = $marque;
	}

	public function getCouleur(){
		return $this->couleur;
	}

	public function getMarque() {
		return $this->marque;
	}

	public function setCouleur($couleur) {
		return $this->couleur = $couleur;
	}

	public function setMarque($marque) {
		return $this->marque = $marque;
	}

	

	$voiture = new Voiture("Bleu", "Audi");

	$voiture->getCouleur();
	$voiture->setMarque("BMW");
}