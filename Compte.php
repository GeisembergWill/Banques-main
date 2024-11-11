<?php
class Compte {
    private string $_libelee; // Propriété pour stocker le libellé du compte
    private int $_soldeInitial; // Propriété pour le solde initial du compte
    private string $_devise; // Propriété pour stocker la devise
    private Titulaire $_titulaire; // Propriété pour stocker le titulaire

    // Constructeur pour initialiser les propriétés de l'objet Compte
    public function __construct(string $libelee, int $_soldeInitial, string $devise, Titulaire $titulaire) {
        $this->_libelee = $libelee; // Affecter le libellé passé en paramètre à la propriété $_libelee
        $this->_soldeInitial = $_soldeInitial; // Affecter le solde initial passé en paramètre
        $this->_devise = $devise; // Affecter la devise monétaire passée en paramètre
        $this->_titulaire = $titulaire; // Affecter le titulaire passé en paramètre
    }

    // Getter pour le libellé du compte
    public function getLibelee(): string {
        return $this->_libelee;
    }

    // Getter pour le solde initial du compte
    public function getSoldeInitial(): int {
        return $this->_soldeInitial;
    }

    // Getter pour la devise du compte
    public function getDevise(): string {
        return $this->_devise;
    }

    // Méthode pour créditer le compte
    public function crediter(int $montant): void {
        $this->_soldeInitial += $montant; // Ajouter le montant au solde initial
    }

    // Méthode pour débiter le compte
    public function debiter(int $montant): void {
        $this->_soldeInitial -= $montant; // Soustraire le montant du solde initial
    }

    // Méthode pour effectuer un virement vers un autre compte
    public function virement(int $montant, Compte $compteDestinataire): bool {
        if ($montant <= $this->_soldeInitial) {
            $this->debiter($montant); // Débite le montant de ce compte
            $compteDestinataire->crediter($montant); // Crédite le montant sur le compte destinataire
            return true; // Virement réussi
        }
        return false; // Solde insuffisant
    }

    // Méthode magique pour retourner une chaîne représentant le compte
    public function __toString(): string {
        return "$this->_libelee $this->_soldeInitial $this->_devise<br>"; // Retourne le libellé, le solde et la devise
    }
}
?>

