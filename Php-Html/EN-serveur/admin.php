<?php 
    session_start(); // Démarrage de la session


    try 
    {
        $bdd =  new PDO('mysql:host=localhost;dbname=Damien Connetable WebSite;charset=utf8', 'root', '');
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
   

  
    if(!empty($_POST['name']) && !empty($_POST['password'])) // Si il existe les champs email, password et qu'il sont pas vident
    {
        // Patch XSS
        $name = htmlspecialchars($_POST['name']); 
        $password = htmlspecialchars($_POST['password']);
      
        // On regarde si l'utilisateur est inscrit dans la table utilisateurs
        $check = $bdd->prepare('SELECT name, mdp FROM Admin WHERE name = ?');
        $check->execute(array($name));
        $data = $check->fetch();
        $row = $check->rowCount();
        
    
        // Si > à 0 alors l'utilisateur existe
        if($row > 0)
        {
                // Si le mot de passe est le bon
                if(password_verify($password, $data['mdp']))
                {
                    // On créer la session et on redirige 
                    $_SESSION['user'] = $data['name'];

                    header('Location: ../Anglais/EN-adminGestion.php?token=validation_token');
                    die();
                }else{ header('Location: ../Anglais/EN-administrationHome.php?login_err=password'); die(); }
            
        }else{ header('Location: ../Anglais/EN-administrationHome.php?login_err=already'); die(); }
    }else{ header('Location: ../Anglais/En-administrationHome.php?'); die();} // si le formulaire est envoyé sans aucune données
