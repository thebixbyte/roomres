<?php
/* 
	Author: bixbyte
	For: The University Of Eastern Africa Baraton
*/
@session_start();


class login{
	
	public $id = "add_login.php";
	public $tbl_name = "reservants";
	
	public $username;		public $passw4d;		public $action;
	
	public function __construct($user, $pass, $action){ 
		 
		if(@$user != '' && @$pass != ''):
			
			$this->username = $user;
			$this->passw4d	= $pass; 
			$this->action   = $action;
			
			switch ($this->action){
			
				case "do_login":
					$this->get_in();
				break;
				
				case "do_logout":
					$this->get_out(); 
				break;
				
				case "admin_login":
					$this->tbl_name = "admin";
					$this->myAdmin();
				break;
				
				default:
					die('<script> alert("Sorry, there was an error authenticating your login request!"); history.back(1); </script>');
				break;
			
			}
			
			
		else:
			die('<script>alert("FILL IN ALL DETAILS TO CONTINUE!"); history.back();</script>');
		endif;
		
	}
	
	//Administrator login
	private function myAdmin(){
		
		//Reject any login via an email address
		if(filter_var($this->username, FILTER_VALIDATE_EMAIL)){ echo '<script>alert("This platform does not accept email addresses for login"); history.back();</script>';
		exit();	
		}
		
		$id = $this->id;
		$connect = true;
		include "main.php";
		$make_pass = new obsfucate($this->passw4d,'make_password');
		$this->passw4d = $_SESSION['passwd']; 
		
		//See whether a user with the given credentials exists
		$connection->num_rows("SELECT * FROM $this->tbl_name WHERE (a_idnum='$this->username') AND (paski='$this->passw4d') ",true);
		
		if(@$_SESSION['num_rows'] <> 0){
			
			$_SESSION['l031n45'] = $this->username;
			$_SESSION['p455w06d'] = $this->passw4d;
			$_SESSION['154dm1n'] = true;
			
			$connection->query("SELECT * FROM $this->tbl_name WHERE a_idnum='$_SESSION[l031n45]' ",true);
	
			$arraydets = $_SESSION['query'];
	
			while($res = mysqli_fetch_array($arraydets)){
				$_SESSION['u56_id'] 		= $res['id'];
				$_SESSION['u56_name'] 		= $res['name'];
				$_SESSION['u56_a_idnum'] 	= $res['a_idnum'];
				$_SESSION['u56_email'] 		= $res['email'];
				$_SESSION['u56_passwd'] 	= $res['paski'];
				$_SESSION['u56_gender'] 	= $res['gender'];
			}
			
			$relocate = new redirect("cpanel.php");
			exit; 
			
		}else{
			die('<script> alert("Your username + password combination is incorrect! \n\n\n PLEASE TRY AGAIN. "); history.back(); </script>');
		}
		
		
	///end of admin login	
	}
	
	private function get_in(){
		//Login proccess
		
		if(filter_var($this->username, FILTER_VALIDATE_EMAIL)){ echo '<script>alert("This platform does not accept email addresses for login"); history.back();</script>';
		exit();	
		}
			
		
		$id = $this->id;
		$connect = true;
		include "main.php";
		$make_pass = new obsfucate($this->passw4d,'make_password');
		$this->passw4d = $_SESSION['passwd']; 
		
		$connection->num_rows("SELECT * FROM $this->tbl_name WHERE (email='$this->username' OR s_idnum='$this->username') AND (passwd='$this->passw4d') ",true);
		
		if(@$_SESSION['num_rows'] <> 0){
			
			//$this->check_activation(); 
			@$_SESSION['num_rows'] = '';
		
			$connection->num_rows("SELECT * FROM $this->tbl_name WHERE (email='$this->username' OR s_idnum='$this->username') AND (actif='1')", false);
		
			if($_SESSION['num_rows'] <> 0 ):
				$_SESSION['activated'] = true;
			endif;
			//$this->check_activation();
					
			if(@$_SESSION['activated']):
			
				if(@$_SESSION['num_rows'] == 0){
					
				
				}else{
					$_SESSION['l031n45'] = $this->username;
					
					if($_SESSION['l031n45'] == $this->username){echo("success! ... Redirecting.");}else{echo("Error establishing a secure protocol ...");};
					$_SESSION['p455w06d'] = $this->passw4d;
					$_SESSION['154dm1n'] = false;
					$redir = new redirect('panel.php');
					die();
				}
			else:
			
				echo "<a href='new_recovery_key.php'> Request Activation Link! </a>";
				die('<script> alert("Please go to your email address to activate your account in order to login!"); </script>');
					
			endif;
			
		}else{
			die('<script> alert("Your username + password combination is incorrect! \n\n\n PLEASE TRY AGAIN. "); history.back(); </script>');
		}
		
	}
	
	
	public function get_out(){
		session_unset();
		$id = $this->id;
		include "main.php";
		$redir = new redirect("index.php");
		die();
		
	}
	
	
	
//End of Class	
}

?>