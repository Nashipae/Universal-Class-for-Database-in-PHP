# PHP-Multidatabase-PDO-Class
PHP Class to connect and work with MySQL and PostgreSQL via PDO

**USAGE:**
1. Edit your settings.php:

	    define('DB_SERVER',  "localhost");
	    define('DB_PORT',  "5432");
	    define('DB_NAME',  "DBNAME");
	    define('DB_USER',  "DBUSER");
	    define('DB_PASSWORD',"PASSWORD");

2. Fill in your statements in statements.php

3. Use class like this:

	    function  testconnection()  {

			global  $db,  $statements;

			$searchquery1  =  "12345";
			$searchquery2  =  "ABC";
			$searchquery3  =  "6789";
			$searchquery4  =  "DEF";
			$searchquery5  =  "GHI";

			//Select

			$getsamepledata  =  $db>selectRows($statements['getsampledata'],[$searchquery1]);

			//Insert

			$insertexample  =  $db->executeRow($statements['insertexample'],[$searchquery1,$searchquery2,$searchquery3]);

			//Update

			$updatexample  =  $db->selectRows($statements['updateexample'],[$searchquery1,$searchquery2,$searchquery3,$searchquery4,$searchquery5  ]);

  

	}



