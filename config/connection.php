<?php 

include 'config.php';

class DB {

	protected $host = DB_HOST;
	protected $user = DB_USER;
	protected $db = DB_NAME;
	protected $pass = DB_PASS;
	protected $conn;

	function __construct(){
		try {
			$this->conn = new PDO("mysql:host=" .$this->host.";dbname=".$this->db, $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

}

$db_connect = new DB;

?>