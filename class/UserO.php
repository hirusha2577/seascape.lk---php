<?php 

/**
 * 
 */
class UserO
{
	private $id;
	private $name;
	private $email;
	private $isActive;
	private $createdAt;
	private $authToken;
	private $lastLogin;
	private $username;
	private $password;
	private $last_updated;


	function __construct($id)
	{
		if ($id) {
			$this->id=$id;
			$query="SELECT * FROM `user` WHERE `id` LIKE '$id' AND `type` LIKE 'frontoffice'";
			$DB = new Database();
			$result = $DB->read_query($query);
			$row = mysqli_fetch_array($result);

			$this->name=$row['name'];
			$this->email=$row['email'];
			$this->isActive=$row['isActive'];
			$this->createdAt=$row['createdAt'];
			$this->authToken=$row['authToken'];
			$this->lastLogin=$row['lastLogin'];
			$this->username=$row['username'];
			$this->password=$row['password'];
			$this->last_updated=$row['last_updated'];
		return $row;
		}
	}

	public function all(){
			$query="SELECT * FROM `user` WHERE `type` LIKE 'frontoffice'";
			$DB = new Database();
			$result = $DB->read_query($query);
			$array_res = array();
			while ($row = mysqli_fetch_array($result)) {
				array_push($array_res, $row);
			}
			return $array_res;
	}
	
	public function create(){

	}

	//
	public function login($username,$password){

		$encryptedpass = Hash::create('sha256',$password,'j3dvlbdj*k9jvjk6nvkdnvastrfrwa2@');//j3dvlbdj*k9jvjk6nvkdnvastrfrwa2@
		$query = "SELECT * FROM `user` WHERE `username` LIKE '$username' AND `password` LIKE '$encryptedpass' AND `type` LIKE 'frontoffice'";
		$DB = new Database();
		$result = $DB->read_query($query);
		$row = mysqli_fetch_array($result);
		// Helper::dd($row);
		if ($row) {
			$this->id = $row['id'];
			$this->set_token($row['id']);
			$this->set_last_login($row['id']);
			$user = $this->__construct($this->id);
			$this->set_session($user);
			// Helper::dd($_SESSION);
			return $user;
		}else{
			return false;
		}
	}

	////////////////////////////////////////////////////////////////////////////
	private function set_token($id){
		$auth_token = md5(uniqid(rand(),true));
		$query = "UPDATE `user` SET `authToken`='$auth_token' WHERE `id`='$id' AND `type` LIKE 'frontoffice'";
		$DB = new Database();
		if($DB->read_query($query)){
			return true;
		}else{
			return false;
		}
	}

	private function set_last_login($id){
		date_default_timezone_set('Asia/Colombo');
        $time = date('Y-m-d H:i:s');

        $query = "UPDATE `user` SET `lastLogin`='$time' WHERE `id`='$id' AND `type` LIKE 'frontoffice'";
        $DB = new Database();
        if($DB->read_query($query)){
        	return true;
        }else{
        	return false;
        }
	}

	private function set_session($user){
		if (!isset($_SESSION)) {
			session_start();
		}
		$_SESSION['oooid'] = $user['id'];
		$_SESSION['oooname'] = $user['name'];
		$_SESSION['oooemail'] = $user['email'];
		$_SESSION['oooisActive'] = $user['isActive'];
		$_SESSION['oooauthToken'] = $user['authToken'];
		$_SESSION['ooolastLogin'] = $user['lastLogin'];
		$_SESSION['ooousername'] = $user['username'];
		// $_SESSION['oootype'] = $user['type'];
	}//////////////////////////////////////////////////////////////////////////////

	//
	public function logout(){
		if (!isset($_SESSION)) {
			session_start();
		}
		unset($_SESSION['oooid']);
		unset($_SESSION['oooname']);
		unset($_SESSION['oooemail']);
		unset($_SESSION['oooisActive']);
		unset($_SESSION['oooauthToken']);
		unset($_SESSION['ooolastLogin']);
		unset($_SESSION['ooousername']);
		// unset($_SESSION['oootype']);

		return true;
	}


	///////////////////////////////////////////////////////////////////////////
	public function authenticate() {

        if (!isset($_SESSION)) {
            session_start();
        }

        $id = NULL;
        $authToken = NULL;

        if (isset($_SESSION["oooid"])) {
            $id = $_SESSION["oooid"];
        }
		// if (isset($_SESSION["oootype"])) {
        //     $type = $_SESSION["oootype"];
        // }
        if (isset($_SESSION["oooauthToken"])) {
            $authToken = $_SESSION["oooauthToken"];
        }

        $query = "SELECT `id` FROM `user` WHERE `id`= '$id' AND `authToken`= '$authToken' AND `type` LIKE 'frontoffice'";

        $DB = new Database();

        $result = mysqli_fetch_array($DB->read_query($query));

        if (!$result) {
            return FALSE;
        } else {

            return TRUE;
        }
    }
}


 ?>