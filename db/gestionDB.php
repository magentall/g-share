<?php
    function fct_insert_file($name, $user_id){

        $connect = connectDB();
        $extension = substr($name, strpos($name, "."));
        $link = md5(time()).$extension;

        try{
            $stmt = $connect->prepare("INSERT INTO file(name, utilisateur_id, link, date, status) VALUES('$name', '$user_id', '$link', NOW(), 'valide')");

            $stmt->execute();

            return $link;
        }
        catch(PDOExeption $e){
            $error = $e->getMessage();
            messageErreur($error);
        }
    }

    function insertUser($name, $pwd, $email){

        $connect = connectDB();
        try{
            $stmt = $connect->prepare("INSERT INTO utilisateur(name, password, email) VALUES('$name', '$pwd', '$email')");

            $stmt->execute();
        }
        catch(PDOExeption $e){
            $error = $e->getMessage();
            messageErreur($error);
        }

    }

    function fileList($user_id){

        $connect = connectDB();

        try{
            $stmt = $connect->prepare("SELECT name, link, date, state FROM file WHERE utilisateur_id = '$user_id");

            $stmt->execute();


        }
        catch(PDOExeption $e){
            $error = $e->getMessage();
            messageErreur($error);
        }
    }

    function selectEmail($id){
      $connect = connectDB();

      try{
          $stmt = $connect->prepare("SELECT name FROM utilisateur WHERE id='$id'");
          $stmt->execute();
          $stmt->setFetchMode(PDO::FETCH_ASSOC);
          while($row = $stmt->fetch()) {  $email = $row['name']; }
          return $email;
      }
      catch(PDOExeption $e){
          $error = $e->getMessage();
          messageErreur($error);
      }

    }
