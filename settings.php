<?PHP
#DB Access
  define('DB_SERVER', "localhost");
  define('DB_PORT', "5432");
  define('DB_NAME', "DBNAME");
  define('DB_USER', "DBUSER");
  define('DB_PASSWORD',"PASSWORD");


  require_once 'dbclass.php';
  $db = new DATABASE();

  //Statements einbinden
  require_once 'statements.php';