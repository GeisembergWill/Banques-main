<?php

include 'Titulaire.php'; 
// Inclut la définition de la classe Titulaire depuis le fichier Titulaire.php

include 'Compte.php';  
// Inclut la définition de la classe Compte depuis le fichier Compte.php

// Crée une instance de la classe Titulaire avec les informations du titulaire
$titulaire = new Titulaire("Geisemberg", "Bruxelles", "12/25/1989", "Mulhouse");

// Crée plusieurs comptes pour le titulaire avec un solde initial et une devise
$compte1 = new Compte("Compte Courant", 500, "€", $titulaire);
$compte2 = new Compte("Livret Jeune", 500, "€", $titulaire);
$compte3 = new Compte("Livret PEL", 500, "€", $titulaire);
$compte4 = new Compte("Livret Bloqué", 500, "€", $titulaire);


// Affiche le titulaire et son âge
echo "Les Comptes bancaires de Mr $titulaire (68100/Haut-Rhin), " . $titulaire->getAge() . " ans au Crédit Dauphin.<br>";
echo "Soldes initiale des comptes.<br>";//solde intiales
// Fonction pour afficher le solde d'un compte
function afficherSolde($compte) {
    // Affiche le libellé du compte, le solde actuel et la devise
    echo "Solde de {$compte->getLibelee()}: {$compte->getSoldeInitial()} {$compte->getDevise()}<br>";
}
// Affiche les informations de tous les comptes
echo "$compte1 $compte2 $compte3 $compte4<br><br>";
echo "Mouvements Bancaires. Crediter de 100 sur tous les comptes <br>";
// Crédite 100 à compte 1 a 4 et affiche le nouveau solde
$compte1->crediter(100); 
afficherSolde($compte1)."<br>";  

$compte2->crediter(100);
afficherSolde($compte2)."<br>"; 

$compte3->crediter(100); 
afficherSolde($compte3)."<br>";  

$compte4->crediter(100); 
afficherSolde($compte4)."<br>"; 

echo "Débiter de 50 € sur tous les comptes <br>";
// Débite 50 les comptes 1 a 4 et affiche le nouveau solde
$compte1->debiter(50); 
afficherSolde($compte1)."<br>";

$compte2->debiter(50); 
afficherSolde($compte2)."<br>";


$compte3->debiter(50); 
afficherSolde($compte3)."<br>";


$compte4->debiter(50); 
afficherSolde($compte4)."<br>";



?>










?>
