<?php
namespace App\Entity;


use \Core\Entity\Entity;

class Post extends Entity
{
	// ##############################################################################
	// Constructeur de classe
	// ##############################################################################
	public function __construct($result)
	{
		parent::__construct();
		
		$this->Hydrate($result);
	}
	
	// ##############################################################################
	// Fonction qui retourne l'id
	// ##############################################################################
	public function getId() : int
	{
		return $this->Id ?? 0;
	}
	
	// ##############################################################################
	// Fonction qui retourne le titre
	// ##############################################################################
	public function getTitle() : string
	{
		return $this->Titre ?? '';
	}
	
	// ##############################################################################
	// Fonction qui retourne le contenu
	// ##############################################################################
	public function getContenu() : string
	{
		return $this->Contenu ?? '';
	}
	
	// ##############################################################################
	// Fonction qui retourne le chapo
	// ##############################################################################
	public function getChapo() : string
	{
		return $this->Chapo ?? '';
	}
	
	// ##############################################################################
	// Fonction qui retourne l'image
	// ##############################################################################
	public function getPicture() : string
	{
		return $this->Picture ?? '';
	}
	
	// ##############################################################################
	// Fonction qui retourne le nombre de commentaire
	// ##############################################################################
	public function getCommentNbr() : int
	{
		return $this->CommentNbr ?? 0;
	}
	
	// ##############################################################################
	// Fonction qui retourne la date formatée
	// ##############################################################################
	public function getFormatedDate() : string
	{
		return (isset($this->Date)) ? date('d/m/Y H:i', strtotime($this->Date)) : '';
	}
	
}
?>