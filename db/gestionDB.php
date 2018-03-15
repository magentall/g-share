<?php
    function delete_file(){


      $stmt2 = $connect->prepare("SELECT link FROM file WHERE DATEDIFF(CURDATE(), date) < 24 AND id!='1'");

      $root = 'http://'.$_SERVER['HTTP_HOST']."/We_Transfert/uploads/";

      $connect = connectDB();
      $stmt = $connect->prepare("SELECT link,id FROM file WHERE DATEDIFF(minute, CURDATE(), date) < 10 AND id='1'");


      $stmt->execute();
      $table = array();

      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $i = 0;

      while($row = $stmt->fetch()) {
           $table[$i] = $root.$row['url'];
           unlink($table[$i]);
           $i++;
      }

      $stmt2 = $connect->prepare("SELECT link,id FROM file WHERE DATEDIFF(minute, CURDATE(), date) < 1440 AND id!='1'");
      $stmt2->execute();
      $table2 = array();

      $stmt2->setFetchMode(PDO::FETCH_ASSOC);
      $i = 0;

      while($row = $stmt2->fetch()) {
           $table2[$i] = $root.$row['url'];
           unlink($table2[$i]);
           $i++;
      }
    }

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

    function returnid($email){
      $connect = connectDB();
      //  Récupération de l'utilisateur et de son pass hashé
          $stmt = $connect->prepare("SELECT id  FROM utilisateur WHERE '$email' = email");
          $stmt->execute();
          $stmt->setFetchMode(PDO::FETCH_ASSOC);
          while($row = $stmt->fetch()) { $id = $row['id']; }
          return $id;
    }

    function fileList($user_id){

        $connect = connectDB();

        try{
            $stmt = $connect->prepare("SELECT name, link, date, status FROM file WHERE utilisateur_id = '$user_id'");

            $stmt->execute();
            return $stmt;


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
