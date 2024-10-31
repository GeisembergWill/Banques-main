<?php
class Titulaire {
    
    private string $_nom; 
    // Propriété pour stocker le nom du titulaire
    private string $_prenom; 
    // Propriété pour stocker le prénom du titulaire
    private DateTime $_dateDeNaissance; 
    // Propriété pour stocker la date de naissance du titulaire
    private string $_ville;
    // Propriété pour stocker la ville de résidence du titulaire

    // Constructeur pour initialiser les propriétés de l'objet Titulaire
    public function __construct(string $nom, string $prenom, string $dateDeNaissance, string $ville) {
        $this->_nom = $nom; 
        // Affecter le nom passé en paramètre à la propriété $_nom
        $this->_prenom = $prenom; 
        // Affecter le prénom passé en paramètre à la propriété $_prenom
        $this->_dateDeNaissance = new DateTime($dateDeNaissance); 
        // Créer un objet DateTime à partir de la date de naissance fournie
        $this->_ville = $ville;
        // Affecter la ville passée en paramètre à la propriété $_ville
    }    
    
    // Méthode pour obtenir l'âge du titulaire
    public function getAge(): int {
        $datetime = new DateTime('now'); 
        // Créer un nouvel objet DateTime représentant le moment actuel
        return $datetime->diff($this->_dateDeNaissance)->y; 
        // Calculer et renvoyer la différence en années entre la date actuelle et la date de naissance
    }
    
    // Méthode pour définir la date de naissance du titulaire
    public function setDateDeNaissance(string $dateDeNaissance): void {
        $this->_dateDeNaissance = DateTime::createFromFormat('d/m/Y', $dateDeNaissance); 
        // Mettre à jour la date de naissance avec la nouvelle date fournie
    }
    
    public function getNom(): string {
        return $this->_nom; 
        // Retourner le nom du titulaire
    }

    public function setNom(string $nom): void {
        $this->_nom = $nom; 
        // Mettre à jour le nom du titulaire avec le nouveau nom fourni
    }
    
    public function getPrenom(): string {
        return $this->_prenom; 
        // Retourner le prénom du titulaire
    }

    public function setPrenom(string $prenom): void {
        $this->_prenom = $prenom; 
        // Mettre à jour le prénom du titulaire avec le nouveau prénom fourni
    }

    public function getVille(): string {
        return $this->_ville; 
        // Retourner la ville du titulaire
    }

    public function setVille(string $ville): void {
        $this->_ville = $ville; 
        // Mettre à jour la ville du titulaire avec la nouvelle ville
    }

    // Méthode magique pour retourner une chaîne représentant le titulaire
    public function __toString(): string {
        return "{$this->_nom} {$this->_prenom} de {$this->_ville}"; 
        // Retourner les informations du titulaire (nom + prénom + ville)
    }
}