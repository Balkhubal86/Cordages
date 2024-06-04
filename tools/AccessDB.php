<?php
    class AccessDB
    {
        private $host;
        private $login;
        private $password;
        private $dataBase;
        private $conn;

        public function __construct()
        {
            $this->host = "127.0.0.1";
            $this->login = "root";
            $this->password = "";
            $this->dataBase = "cordages";
            $this->connexion();
        }

        public function connexion()
        {
			try
			{
				$this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dataBase.";charset=utf8", $this->login, $this->password);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			}
			catch(PDOException $e)
			{
				die("Connection à la base de données échouée".$e->getMessage());
			}
        }

		// Fonction de connexion
		public function logUser($email,$password)
		{   
			// Vérification du mot de passe lors de la connexion
			$stmt = $this->conn->prepare("SELECT password FROM users WHERE email = ?");
			$stmt->execute([$_POST['email']]);
			$user = $stmt->fetch();

			if ($user && password_verify($_POST['password'], $user['password'])) {
    		// Connexion réussie
    		?>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <div class="card" style="width: 20rem;">
                            <div class="card-body">
                                <h5 class="card-title text-red">Connexion Réussi ! </h5><br>
                                <h6 class="card-subtitle mb-2 text-body-secondary"></h6>
                                <p class="card-text">Dashboard disponible ou revenez à l'acceuil</p>
                                <a href="index.php" class="card-link">Acceuil</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="index.php?view=dashboard&action=home">Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="index.php?view=connexion&action=deconnect" class="card-link text-danger">Déconnexion</a>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>   
            </div>
            <br>
            <?php

			// On commence la session et on créer des variables sessions qui pourront parcourir le site durant la navigation
			$_SESSION['email'] = $email;
			$_SESSION['idRole'] = $this->roleUser();

			} else {
    		// Connexion échouée
			?>
    		<br>
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title text-red">Connexion Echoué ! </h5><br>
                                <h6 class="card-subtitle mb-2 text-body-secondary"></h6>
                                <p class="card-text">Réessayer ou connecter-vous ultérieurement.</p>
                                <a href="index.php" class="card-link">Acceuil</a>
                                <a href="index.php?view=connexion&action=connexion" class="card-link">Connexion</a>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>   
            </div>
            <br>
            <?php

			}

		}



		// Fonction d'enregistrement
		public function registerUser($name, $firstname, $email, $password) 
		{
			// Hash du mot de passe
			$hashed_password = password_hash($password, PASSWORD_BCRYPT);
		
			// Prépare la requête 
			$stmt = $this->conn->prepare("INSERT INTO users (id, name, firstname, email, password, idRole) VALUES (?, ?, ?, ?, ?, ?)");
			$stmt->bindValue(1, $this->giveNextId('users'));
			$stmt->bindValue(2, $name);
			$stmt->bindValue(3, $firstname);
			$stmt->bindValue(4, $email);
			$stmt->bindValue(5, $hashed_password);
			$stmt->bindValue(6, 2);
		
			// Executer la requête
			if ($stmt->execute()) {
				// Si la requête est réussi, on met un message de confirmation et un lien pour aller sur la page de connexion
				echo'Enregistrement réussi ! <br>';
				echo'<a href=index.php?view=connexion&action=connexion>Connexion</a>';
			} else {
				echo "Erreur: " . $stmt->error;
				return;
			}

		}

		// Fonction qui vérifie si l'email est déjà utilisé
		public function emailExist($email)
		{
			$stmt = $this->conn->prepare("SELECT id FROM users WHERE email = :email");
			$stmt->bindParam(':email', $email);
			$stmt->execute();

			if ($stmt->rowCount() > 0) {
				return false;		// On retourne FALSE si il existe déjà
			}else{
				return true;		// On retourne TRUE si il n'existe pas
			}
		}


		// Fonction qui donne le l'idRole de l'utilisateur connecté (en fonction de l'email)
		public function roleUser() {
			$email = $_SESSION['email'];
			$idRole=null;
			$request = $this->conn->prepare('SELECT idRole FROM users WHERE email = "'.$email.'";');
			if(!$request->execute())
			{
				die("Erreur dans le Role de l'utilisateur : ".$request->errorCode());
			}
			else
			{
				$idRole = $request->fetchAll(PDO::FETCH_ASSOC);
			}
			return $idRole[0];	
		}

		// Fonction pour récupérer les informations de l'utilisateur par email
		public function getUserInfo($email) {
			// Définition de la requête SQL
			$request = "SELECT * FROM users WHERE email = :email";
	
			// Préparation de la requête pour éviter les injections SQL
			$stmt = $this->conn->prepare($request);
	
			// Liaison du paramètre :email à la valeur de l'email fourni
			$stmt->bindParam(':email', $email, PDO::PARAM_STR);
	
			// Exécution de la requête
			$stmt->execute();
	
			// Récupération du résultat sous forme de tableau associatif
			$userInfo = $stmt->fetch(PDO::FETCH_ASSOC);
	
			// Retourne les informations de l'utilisateur ou false si l'utilisateur n'est pas trouvé
			return $userInfo;
		}

		// Fonction de message en fonction du message
		public function messageCard($message)
		{
			?>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title text-red">Erreur d'enregistrement !</h5><br>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $error;?></h6>
                                <p class="card-text">Revenez sur la page pour continuer ou revenez sur l'acceuil</p>
                                <a href="index.php" class="card-link">Acceuil</a>
                                <a href="index.php?view=connexion&action=register" class="card-link">Revenir</a>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>   
            </div>
            <br>
            <?php
		}

        // Fonction Chargement des tables dans la BD

        public function Load($uneTable)
	    {
	    	$lesInfos=null;
	    	$nbTuples=0;
	    	$stringQuery="SELECT * FROM ";
	    	$stringQuery = $this->specialCase($stringQuery,$uneTable);
	    	$query = $this->conn->prepare($stringQuery);
		  	if($query->execute())
	    	{
	    		while($row = $query->fetch(PDO::FETCH_NUM))
	    		{
	    			$lesInfos[$nbTuples] = $row;
	    			$nbTuples++;
	    		}
	    	}
	    	else
	    	{
	    		die('Problème dans chargement : '.$query->errorCode());
	    	}
	    	return $lesInfos;
	    }

	    private function specialCase($stringQuery,$uneTable)
	    {
	    	$uneTable = strtoupper($uneTable);
	    	switch ($uneTable) 
			{
				case 'USERS':
					$stringQuery.='users';
                    break;
				case 'LOGOS':
					$stringQuery.='logos';
					break;
				case 'ROLE':
					$stringQuery.='role';
					break;
	    		default:
	    			die('Pas une table valide');
	    	}
	    	return $stringQuery.";";
	    }

		// Fonction qui donne l'ID suivant de la table 
		public function giveNextId($table)
		{
			$stringQuery = $this->specialCase("SELECT * FROM ",$table);
			$requete = $this->conn->prepare($stringQuery);

			if($requete->execute())
			{
				$nb=0;
				while($row = $requete->fetch(PDO::FETCH_NUM))
				{
					$nb = $row[0];
				}
				return $nb+1;
			}
			else
			{
				die('Erreur sur donneProchainIdentifiant : '+$requete->errorCode());
			}
		}

		// Fonction pour Ajouter un LOGO
		public function uploadLogo()
		{
			$targetDir = "uploads/logos/";
			$uploadOk = 1;
			$fileType = strtolower(pathinfo($_FILES["logo"]["name"], PATHINFO_EXTENSION));

			// Vérifiez les types de fichiers autorisés (ici pour les logos on limite en JPG, JPEG, PNG)
			$allowedTypes = ['jpg', 'jpeg', 'png'];
			if (!in_array($fileType, $allowedTypes)) {
    			echo "Désolé, seuls les fichiers JPG, JPEG, PNG sont autorisés.";
    			$uploadOk = 0;
			}

			// Vérifiez si le fichier existe déjà
			$targetFile = $targetDir . uniqid() . "." . $fileType;
			if (file_exists($targetFile)) {
			    echo "Désolé, le fichier existe déjà.";
			    $uploadOk = 0;
			}

			// Limitez la taille du fichier (par exemple, 5MB maximum)
			if ($_FILES["logo"]["size"] > 5000000) {
			    echo "Désolé, votre fichier est trop volumineux.";
			    $uploadOk = 0;
			}

			// Vérifiez si $uploadOk est à 0 à cause d'une erreur
			if ($uploadOk == 0) 
			{
				echo "Désolé, votre fichier n'a pas été téléchargé.";
				// Si tout est ok, essayez de télécharger le fichier
			} else {
			    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $targetFile)) 
				{
        			echo "Le fichier ". htmlspecialchars( basename( $_FILES["logo"]["name"])). " a été téléchargé. <br>";

        			// Prépare une déclaration SQL
        			$stmt = $this->conn->prepare("INSERT INTO logos (name, path) VALUES (?, ?)");
        
        			// Définir les paramètres et exécuter
        			$filename = basename($_FILES["logo"]["name"]);
        			$filepath = $targetFile;

					$stmt->bindValue(1, $filename);
					$stmt->bindValue(2, $filepath);
        			$stmt->execute();
        
        			echo "Les informations du fichier ont été sauvegardées dans la base de données.";

    			} else {
        			echo "Désolé, une erreur est survenue lors du téléchargement de votre fichier.";
   				}
			}
		}

		// Fonction pour SUPPRIMER un LOGO
		public function eraseLogo()
		{
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$id = $_POST['id'];
				$path = $_POST['path'];
			
				// Supprimer le fichier du serveur
				if (file_exists($path)) {
					unlink($path);
				}
			
				// Prépare une déclaration SQL pour supprimer l'enregistrement
				$stmt = $this->conn->prepare("DELETE FROM logos WHERE id = ?");
				$stmt->bindValue(1, $id);
			
				// Exécute la déclaration
				if ($stmt->execute()) {
					echo "Logo supprimé avec succès.";
				} else {
					echo "Erreur lors de la suppression du logo : " . $conn->error;
				}
			}
		}
    }
?>