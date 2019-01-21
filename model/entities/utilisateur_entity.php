
 <?php

 function getUtilisateurByEmailMotDePasse(string $email, string $password)  {
     global $connection;

     $query = "
    SELECT *
    FROM utilisateur 
    WHERE email = :email 
    AND mot_de_passe = SHA1(:password) 
    
    ";

     $stmt = $connection->prepare($query);
     $stmt->bindParam(":email", $email);
     $stmt->bindParam(":password", $password);
     $stmt->execute();
// on veut recuperer les donnees d'un seul utilisateur

     return $stmt->fetch();

 }