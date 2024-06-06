<?php 

if($_SERVER['SERVER_NAME'] == 'localhost')
{
	/** database config **/
	define('DBNAME', 'SSHOA_DATABASE');
	define('DBHOST', 'localhost');
	define('DBUSER', 'postgres');
	define('DBPASS', '1234');
	define('DBDRIVER', 'pgsql');
	
	define('ROOT', 'http://localhost/mvcim/public');

}else
{
	/** database config **/
	define('DBNAME', 'SSHOA_DATABASE');
	define('DBHOST', 'localhost');
	define('DBUSER', 'postgres');
	define('DBPASS', '1234');
	define('DBDRIVER', 'pgsql');

	define('ROOT', 'https://www.yourwebsite.com');
}

define('APP_NAME', "My Website");
define('APP_DESC', "Best website on the planet");

/** true means show errors **/
define('DEBUG', true);