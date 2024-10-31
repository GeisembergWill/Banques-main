<?php
class Compte {
    private string $_libelee; 
    // Propriété pour stocker le libellé du compte 
    private int $_soldeInitial; 
    // Propriété pour le solde initial du compte
    private string $_devise;
    // Propriété pour stocker la devise 
    private Titulaire $_titulaire; 
    // Propriété pour stocker le titulaire 

    // Constructeur pour initialiser les propriétés de l'objet Compte
    public function __construct(string $libelee, int $_soldeInitial, string $devise, Titulaire $titulaire) {
        $this->_libelee = $libelee; 
        // Affecter le libellé passé en paramètre à la propriété $_libelee
        $this->_soldeInitial = $_soldeInitial; 
        // Affecter le solde initial passé en paramètre à la propriété $_soldeInitial
        $this->_devise = $devise; 
        // Affecter la devise monétaire passée en paramètre à la propriété $_devise 
        $this->_titulaire = $titulaire; 
        // Affecter le titulaire passé en paramètre à la propriété $_titulaire
    }             

    public function getLibelee(): string {
        return $this->_libelee; 
        // Retourner le libellé du compte
    }
    
    public function setLibelee(string $libelee): void {
        $this->_libelee = $libelee; 
        // Mettre à jour le libellé du compte avec le nouveau libellé fourni
    }

    public function getSoldeInitial(): int {
        return $this->_soldeInitial; 
        // Retourner le solde initial du compte
    }
    
    public function setSoldeInitial(int $_soldeInitial): void {
        $this->_soldeInitial = $_soldeInitial; 
        // Mettre à jour le solde initial du compte avec le nouveau montant fourni
    }
    
    public function getDevise(): string {
        return $this->_devise; 
        // Retourner la devise
    }
    
    public function setDevise(string $devise): void {
        $this->_devise = $devise; 
        // Mettre à jour la devise avec la nouvelle valeur fournie
    }

    public function crediter(int $montant): void {
        $this->_soldeInitial += $montant; 
        // Ajouter le montant au solde initial
    }

    public function debiter(int $montant): void {
        $this->_soldeInitial -= $montant; 
        // Soustraire le montant du solde initial
    }
       
    public function __toString(): string {
        return "$this->_libelee $this->_soldeInitial $this->_devise<br>"; 
        // Retourner une chaîne contenant le libellé, le solde initial et la devise
    }
}
