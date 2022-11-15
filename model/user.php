<?php 

/**
 * 
 */
class user extends DB
{
	
	function __construct(DB $conn)
	{
		$this->conn = $conn->conn;

	}



	public function login_user($username, $password) {
		$sql = "SELECT * FROM `users` WHERE `username`= :username AND `password` = :password";
		$stmt = $this->conn->prepare($sql);
		$stmt->bindValue('username', $username);
		$stmt->bindValue('password', $password);
		$stmt->execute();


		return $stmt;
	}

	public function register($requests)
	{
		$sql="INSERT INTO `users`(`fullname`, `username`, `email`, `password`) VALUES (:fullname, :username, :email, :password)";
		$stmt= $this->conn->prepare($sql);
		$stmt->bindvalue('fullname', $requests['fullname']);
		$stmt->bindvalue('username', $requests['username']);
		$stmt->bindvalue('email', $requests['email']);
		$stmt->bindvalue('password', $requests['password']);
		$stmt->execute();

		return $stmt;




   }
}

?>
