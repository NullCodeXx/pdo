<?php

//Concernant le spl_autoload pour qu'il prenne en charge les majuscule.
function myLoader($classname) {
    $class = str_replace("\\", "/", $classname);
    require($class . ".php");
}

//Enregistre une fonction en tant qu'implémentation de __autoload()
//http://php.net/manual/fr/function.spl-autoload-register.php
spl_autoload_register("myLoader");

//Le Use sert a utiliser le nameSpace dossier entities
use entities\SmallDoggo;

//Vérifie si la class Smalldoggo recupere les valeurque l'on lui ajoute.
//var_dump(new SmallDoggo('test', 'test', new DateTime(), false));


//Ajouter un user et un mdp 

//CREATE USER 'newuser'@'localhost' IDENTIFIED BY 'password';
//GRANT ALL PRIVILEGES ON *.* TO 'newuser'@'localhost';
//FLUSH PRIVILEGES;

//phpinfo(); verification dans  PDO si c'est activer.

//pas important.
// mysql://localhost:3306/first_db


try {
//On crée une instance de pdo en lui fournissant le domaine ou
//se trouve notre bdd musql, on lui indique le nom de la bdd
//a laquelle on se connecte avec dbname
//puis on lui donne le username et le password en deuxieme et troisieme argument.?

$db = new PDO("mysql:host=localhost;dbname=first_db", 
        "solocrako", //identifiant 
        "simplon3"); //Mdp
//On utilise la méthode query de notre db PDO qui attend
//en argument une requete SQL classique.
//Ici on sélectione tout les petit_chien.
$query = $db->query("SELECT * FROM petit_chien");

//Servira a faire un pripert mais pas necessaire 
////pour l'éxécution puisqu'il s'éxécute automatiquement. .
//$query->execute();
//On récupère la valeur d'une cologne.    
//le $query->fetchALL() renvoie un tableau qui contient tout.
//echo "<ul><li>" . $query->fetch()["name"] . "</li></ul>";


/*
 * On utilise le fetch() afin de positionner le curseur sur la ligne de resultat suivant.
 * On le fais à l'interieur d'une boucle while afin de recupérer tout les resultats de notre 
 * requêtes.
 */


/*La boucle FOREACH fonctione aussi.
 * foreach($query as $value) {
 * echo $value["name"]; pas sur que sa marche. }
 */
$chiens = [];
while($ligne = $query->fetch()) {
    //Crée des instance de chien a partir des lignes.
    $chien = new SmallDoggo($ligne["name"],
            $ligne["race"],
            new DateTime($ligne["birthdate"]),
            $ligne["is_good"],
            $ligne["id"]);
    $chiens[] = $chien; 
}
//echo '<pre>';
//var_dump($chiens);
//echo '</pre>';

/*
 * faire en sorte que dans $id = n; puisse selectionner le chien portant son id propre.
*/

$id = 1;
} catch (PDOException $exception) {
    echo $exception->getMessage();
}