<?php
class DatabaseConnection {

	private $DB;

	public function __construct() {
		$db = 'mysql:dbname=lobby_db;host=127.0.0.1';
		$user = 'root';
		$password = '';
			
		try {
			$this->DB = new PDO ( $db, $user, $password );
			$this->DB->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		} catch ( PDOException $e ) {
			echo ('Error establishing Connection');
			exit ();
		}
	}

	/*********************************************************************************************
	 * user
	 ********************************************************************************************/
	// Arguments: Username [String], Password [String], Name [String]
	// Returns: True if Username is unique and successfully added to the database
	// Returns: False if Username is already in database
	public function register($username, $realname, $email, $address, $city, $state, $zipcode, $password) {
		$sql = "SELECT username FROM users WHERE UPPER(username) = UPPER(:username);";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':username' => $username) );
		$row = $stmt->fetch( PDO::FETCH_ASSOC );

		if($stmt->rowCount() > 0) {
			return false;
		}

		$hash = password_hash($password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES(:username, :realname, :email, :address, :city, :state, :zipcode, :password);";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':username' => $username, ':realname' => $realname, ':email' => $email, ':address' => $address, ':city' => $city, ':state' => $state, ':zipcode' => $zipcode, ':password' => $hash) );

		return true;
	}

	// Arguments: Username [String], Password [String]
	// Returns: The string "manager" if the user is a manager
	// Returns: The string "employee" if the user is a employee
	// Returns: False if the Username and Password are incorrect
	public function verifyLogin($username, $password) {
		$sql = "SELECT password FROM users WHERE UPPER(username) = UPPER(:username);";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':username' => $username) );
		$row = $stmt->fetch( PDO::FETCH_ASSOC );
		
		// check for valid users
		if (empty($row)) {
			return false;
		}

		// check password correct
		return password_verify($password, $row['password']);
	}
	
	public function getUser($username) {
		$sql = "SELECT * FROM users UPPER(username) = UPPER(:username);";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':username' => $username) );
		$row = $stmt->fetch( PDO::FETCH_ASSOC );
		
		return $row;
	}
	
	/*********************************************************************************************
	 * lobbyists
	 ********************************************************************************************/
	public function registerLobbyist($lobbyist_username, $realname, $email, $password) {
		$sql = "SELECT lobbyist_username FROM lobbyists WHERE UPPER(lobbyist_username) = UPPER(:lobbyist_username);";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':username' => $username) );
		$row = $stmt->fetch( PDO::FETCH_ASSOC );
	
		if($stmt->rowCount() > 0) {
			return false;
		}
	
		$hash = password_hash($password, PASSWORD_DEFAULT);
	
		$sql = "INSERT INTO lobbyists(lobbyist_username, realname, email, password) VALUES(:lobbyist_username, :realname, :email, :password);";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':lobbyist_username' => $lobbyist_username, ':realname' => $realname, ':email' => $email, ':password' => $hash) );

		return true;
	}
	
	public function verifyLobbyistLogin($lobbyist_username, $password) {
		$sql = "SELECT password FROM lobbyists WHERE UPPER(lobbyist_username) = UPPER(:lobbyist_username);";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':lobbyist_username' => $lobbyist_username) );
		$row = $stmt->fetch( PDO::FETCH_ASSOC );
	
		// check for valid users
		if (empty($row)) {
			return false;
		}
	
		// check password correct
		return password_verify($password, $row['password']);
	}
	
	public function getLobbyist($lobbyist_username) {
		$sql = "SELECT * FROM lobbyists WHERE UPPER(lobbyist_username) = UPPER(:lobbyist_username);";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':lobbyist_username' => $lobbyist_username) );
		$row = $stmt->fetch( PDO::FETCH_ASSOC );
	
		return $row;
	}
	
	/*********************************************************************************************
	 * issues
	 ********************************************************************************************/
	public function createIssue($issue_name, $issue_scope, $goal_amount, $picture, $fk_lobbyist_username) {
		// create dates
		$startdate = new DateTime("now");
		$enddate = new DateTime("+180 day");
		
		$startdate = $startdate->format("D, M d Y");
		$enddate = $startdate->format("D, M d Y");
	
		if (empty($this->getLobbyist($fk_lobbyist_username))) {
			return false;
		}
		
		$sql = "INSERT INTO issues(issue_name, issue_scope, issue_start_date, issue_end_date, goal_amount, picture, fk_lobbyist_username) VALUES(:issue_name, :issue_scope, :issue_start_date, :issue_end_date, :goal_amount, :picture, :fk_lobbyist_username);";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':issue_name' => $issue_name, ':issue_scope' => $issue_scope, ':issue_start_date' => $startdate, ':issue_end_date' => $enddate, ':goal_amount' => $goal_amount, ':picture' => $picture, ':fk_lobbyist_username' => $fk_lobbyist_username) );
	}
	
	public function getIssue($issue_id) {
		$sql = "SELECT * FROM issues WHERE issue_id = :issue_id;";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':issue_id' => $issue_id) );
		$row = $stmt->fetch( PDO::FETCH_ASSOC );
	
		return $row;
	}
	
	public function getAllIssues($issue_scope) {
		$sql = "SELECT * FROM issues WHERE issue_scope = :issue_scope;";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':issue_scope' => issue_scope) );
		$row = $stmt->fetchAll( PDO::FETCH_ASSOC );
	
		return $row;
	}

	public function getAllIssuesALL() {
		$sql = "SELECT * FROM issues";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute();
		$row = $stmt->fetchAll( PDO::FETCH_ASSOC );	
		return $row;
	}
	
	public function getPopularIssues($issue_scope) {
		$sql = "SELECT * FROM issues WHERE issue_scope = :issue_scope;";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':issue_scope' => $issue_scope) );
		$row = $stmt->fetchAll( PDO::FETCH_ASSOC );
	
		$firstSum  = -1;
		$secondSum = -1;
		$thirdSum  = -1;
		
		$first  = -1;
		$second = -1;
		$third  = -1;
		
		for ($i = 0; $i < count($row); $i++) {
			$sum = $this->countDonations($row[$i]['issue_id']);
			
			if ($sum > $thirdSum) {
				$thirdSum = $sum;
				$third = $row[$i]['issue_id'];

				if ($sum > $secondSum) {
					$thirdSum = $secondSum;
					$third = $second;
				
					$secondSum = $sum;
					$second = $row[$i]['issue_id'];

					if ($sum > $firstSum) {
						$tempSum = $firstSum;
						$temp = $first;
				
						$firstSum = $sum;
						$first = $row[$i]['issue_id'];

						$secondSum = $tempSum;
						$second = $temp;
					}
				}
			}
		}
		
		$issues = array();
		$issues[0] = array();
		$issues[1] = array();
		$issues[2] = array();
		
		$issues[0] = $this->getIssue($first);
		$issues[1] = $this->getIssue($second);
		$issues[2] = $this->getIssue($third);
		
		return $issues;
	}
	
	/*********************************************************************************************
	 * vote
	 ********************************************************************************************/
	public function vote($fk_username, $fk_issue_id) {
		$sql = "INSERT INTO votes(fk_username, fk_issue_id) VALUES(:fk_username, :fk_issue_id);";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':fk_username' => $fk_username, ':fk_issue_id' => $fk_issue_id) );
	}
	
	public function unvote($fk_username, $fk_issue_id) {
		$sql = "DELETE FROM votes WHERE fk_username = :fk_username AND fk_issue_id = :fk_issue_id;";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':fk_username' => $fk_username, ':fk_issue_id' => $fk_issue_id) );
	}
	
	public function countVotes($fk_issue_id) {
		$sql = "SELECT * FROM votes WHERE fk_issue_id = :fk_issue_id;";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':fk_issue_id' => $fk_issue_id) );
		$row = $stmt->fetchAll( PDO::FETCH_ASSOC );
		
		return count($row);
	}
	
	public function votedFor($fk_username) {
		$sql = "SELECT fk_issue_id FROM votes WHERE fk_username = :fk_username;";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':fk_username' => $fk_username) );
		$row = $stmt->fetchAll( PDO::FETCH_ASSOC );
		
		return $row;
	}
	
	/*********************************************************************************************
	 * donation
	 ********************************************************************************************/
	public function donate($fk_username, $fk_issue_id, $money_amount) {
		$sql = "INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES(:fk_username, :fk_issue_id, :money_amount);";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':fk_username' => $fk_username, ':fk_issue_id' => $fk_issue_id, ':money_amount' => $money_amount) );
	}
	
	public function undonate($fk_username, $fk_issue_id) {
		$sql = "DELETE FROM donations WHERE fk_username = :fk_username AND fk_issue_id = :fk_issue_id;";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':fk_username' => $fk_username, ':fk_issue_id' => $fk_issue_id) );
	}
	
	public function countDonations($fk_issue_id) {
		$sql = "SELECT * FROM donations WHERE fk_issue_id = :fk_issue_id;";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':fk_issue_id' => $fk_issue_id) );
		$row = $stmt->fetchAll( PDO::FETCH_ASSOC );
	
		$sum = 0;
		for ($i = 0; $i < count($row); $i++) {
			$sum += $row[$i]['money_amount'];
		}
		
		return $sum;
	}
	
	public function countDonators($fk_issue_id) {
		$sql = "SELECT * FROM donations WHERE fk_issue_id = :fk_issue_id;";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':fk_issue_id' => $fk_issue_id) );
		$row = $stmt->fetchAll( PDO::FETCH_ASSOC );
		
		return count($row);
	}
	
	public function donatedTo($fk_username) {
		$sql = "SELECT * FROM donations WHERE fk_username = :fk_username;";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':fk_username' => $fk_username) );
		$row = $stmt->fetch( PDO::FETCH_ASSOC );
	
		return $row;
	}

	public function returnVotingIssues() {
		$sql = "SELECT * FROM votingIssues";
		$stmt = $this->DB->prepare( $sql );
		$row = $stmt->fetchAll( PDO::FETCH_ASSOC );
		return $row;
	}
	
}
?>