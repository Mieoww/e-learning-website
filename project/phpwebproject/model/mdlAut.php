<?php
    class Models {

        static function add($e)
        {
            $pdo = new PDO('mysql:host=localhost;dbname=esti', 'root', '');
    
            $username =  $_POST['username']; 
            $password =  $_POST['password']; 
            
            $a = "INSERT INTO `users`(`username`, `password`) VALUES ('$username' ,'$password' )";
            
            $add = $pdo->query($a);
            
        }

    }

?>