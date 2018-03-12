<?php
    //include 'connectDB.php';
    function fct_insert_file($name, $user_id){        

        $connect = connectDB();
        $extension = substr($name, strpos($name, "."));
        $link = md5(time()).$extension;

        try{
            $stmt = $connect->prepare("INSERT INTO file(name, utilisateur_id, link, date, state) VALUES('$name', '$user_id', '$link', NOW(), 'valide')");

            $stmt->execute();

            return $link;
        }
        catch(PDOExeption $e){
            $error = $e->getMessage();
            messageErreur($error);
        }
    }
