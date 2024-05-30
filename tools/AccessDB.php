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
			$stmt = $pdo->prepare("SELECT password FROM users WHERE email = ?");
			$stmt->execute([$_POST['username']]);
			$user = $stmt->fetch();

			if ($user && password_verify($_POST['password'], $user['password'])) {
    		// Connexion réussie
    		$_SESSION['username'] = $_POST['username'];
    		echo "Connexion réussie!";
			session_start();

			// Redirection sur la page d'admin
			

			} else {
    		// Connexion échouée
    		echo "Nom d'utilisateur ou mot de passe incorrect.";
			}
 
		}

		// Fonction d'enregistrement
		public function registerUser($name, $firstname, $email, $password) 
		{
			// Hash du mot de passe
			$hashed_password = password_hash($password, PASSWORD_BCRYPT);
		
			// Prépare la requête 
			$stmt = $this->conn->prepare("INSERT INTO users (id, name, firstname, email, password) VALUES (?, ?, ?, ?, ?)");
			$stmt->bindValue(1, $this->giveNextId('users'));
			$stmt->bindValue(2, $name);
			$stmt->bindValue(3, $firstname);
			$stmt->bindValue(4, $email);
			$stmt->bindValue(5, $hashed_password);
		
			// Executer la requête
			if ($stmt->execute()) {
				// Si la requête est réussi, on met un message de confirmation et un lien pour aller sur la page de connexion
				echo'Enregistrement réussi !';
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
			// Si un email existe déjà on arrête la fonction
			if ($stmt->rowCount() > 0) {
				echo "Cette adresse email est déjà utilisée par un autre utilisateur.";
				return false;
			}else{
				return true;
			}
		}


		// Fonction qui donne le l'idRole de l'utilisateur connecté
		public function roleUser() {
			$login = $_SESSION['login'];
			$idRole=null;
			$request = $this->conn->prepare('SELECT idRole FROM utilisateur WHERE login = "'.$login.'";');
			if(!$request->execute())
			{
				die("Erreur dans le Role de l'utilisateur : ".$request->errorCode());
			}
			else
			{
				$idRole = $request->fetchAll();
			}
			return $idRole;	
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

    }
?>