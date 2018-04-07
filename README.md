# InMalaza - by ANDRIAMALALA Louison Mamy Nico S6 N°02B
## Mini-document d'installation
### Etape 1 : Extraire le contenu du dossier compréssé codeigniter-306.zip dans un repertoire de votre serveur web
### Etape 2 : Copier les autres fichiers et dossiers à part codeigniter-306.zip et assets.rar dans le répértoire oû vous aviez décompréssé CodeIgniter précédement et assurez-vous que tout les fichiers du même nom soit remplacer par le nouveau
### Etape 3 : Extraire assets.rar dans le repertoire
### Etape 4 : Créer la base de donnée MySQL avec db.sql
### Etape 5 : Configurer votre base de donnée MySQL dans application/config/database.php 
  Exemple : 
  
    $db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => 'root',
	'database' => 'inmalaza',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE);
### Etape 6 : Configuration de .htaccess : après AuthUserFile changer l'url au chemin absolu de votre repertoire sans oublier le .htpsswd à la fin
   Exemple:
   
        RewriteEngine on
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule ^(.*)$ index.php/$1 [L,QSA]
	<FilesMatch login>
	    AuthUserFile D:/Professionel/Data/UwAmp/www/Git-InMalaza/.htpsswd
	    AuthName "InMalaza - Authentification Administrateur"
	    AuthType Basic
	    Require valid-user
	</FilesMatch>
   

  ### Etape 7 : Lancer votre application (Aucune article n'est inséré dans la base de donné il faudra donc que vous en insérer via le BackOffice)
  
    lien backoffice : votre-url/BackOffice
    identifiant backoffice : 
    *htaccess : username=admin - password=test
    *normal : username=admin - pass=admin1234
