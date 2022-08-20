<?php

session_start();
if($_POST['username'] == "" || $_POST['password']== "")
{
   header('Location: form_register.php?erreur=1');
}
else {
   
   $info = $_POST;
   require ("../../controler/ctrlAut.php");
 
   $e = new ctrlAut;
   $e = ctrlAut::add($info);
 
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'esti';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));

    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM users where 
              username = '".$username."' and password = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        echo '<pre>'; 
        print_r ($reponse); 
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location: ../accueil/accueil.php');
        }
   }


mysqli_close($db); // fermer la connexion*/


}


?>