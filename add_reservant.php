<?php
/* 
	Author: bixbyte
	For: The University Of Eastern Africa Baraton
*/
@session_start();
class reservant{
	
	public $id = "add_reservant.php"; 
	public $tbl_name = "reservants";
	public $name;		public $s_num;			public $tel;
	public $email;		public $passw4d;			public $gender;
	
	public function __construct($reservant_name, $reservant_idnumber, $reservant_telephone, $reservant_email, $reservant_password, $reservant_gender){
		
		$this->email 	= @strtolower($reservant_email);
		$this->gender 	= @strtolower($reservant_gender);
		$this->name 	= @$reservant_name;
		$this->s_num 	= @strtoupper($reservant_idnumber);
		$this->passw4d 	= @$reservant_password;
		$this->tel 		= @$reservant_telephone;
					
	}
	
	public function signup(){
		
		$subject = "UEAB RoomRes| Confirm Signup ";
		
		$connect = true;
		$id = $this->id;
		if(@$_SESSION['query_error'] != ''){unset($_SESSION['query_error']);}
		
		include "main.php";
		
		//Encrypt password and generate a recovery key
		$clean_pass   = new obsfucate($this->passw4d, 'make_password');
		$clean_reckey = new obsfucate($this->s_num, 'make_recovery_key');
		
		$this->passw4d2 = $_SESSION['passwd'];
		$this->reckey =	$_SESSION['reckey'];
		
		$this->reclink = "{$this_site}proc_adds.php?act=room_verification&i=$this->s_num&v=$this->reckey";
		
				
		$this->message_content  = 'Username: '.$this->s_num."<br />";
		$this->message_content .= 'Password: '.$this->passw4d."<br />";
		$this->message_content .= $this->reclink."<br />";
		$this->message_content .= "<br />";
		$this->message_content .= 'If the above link does not work, copy the link below and paste it into your browsers URL bar';
		$this->message_content .= "<br />";
		$this->message_content .= $this->reclink;
		$this->message_content .= "<br />";
							
		$custom_image_url = "{$this_site}$this->reclink";
		
                /* CREATE AN INITIALLY ACTIVE USER [Change last 1 to a 0 to make initially inactive] */
		if( $connection->query("INSERT INTO $this->tbl_name (name, s_idnum, gender, email, tel, passwd, rnum, reckey, actif, reg ) VALUES ('$this->name','$this->s_num','$this->gender','$this->email','$this->tel', '$this->passw4d2',0, '$this->reckey', 1, 1) ", false) ){
				
			
			//Write an email to the new reservant... then give them a congratulatory message!
			if(@$_SESSION['mailed'] != ''){unset($_SESSION['mailed']);}
			$mailit = new mailer($this->name ,$this->email, $subject, $this->message_content, $this->reclink, 'sendmail');
			//...
			
			if($_SESSION['mailed']):
                               echo '<div class="alert alert-success alert-bold-border fade in alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Success!</strong><br> You have been Successfully Registered!<br><br>
                                       <!-- Please go to your email address <code> '.$this->email.'</code> to verify your registration. <br><br>
                                        <div class="panel-warning"> Please check your [JUNK] or [SPAM] folder incase you do not see the message in your inbox!</div><br><br> -->
                                        <a href="login.php" class="alert-link"> Login</a>.
                                      </div>';
                                exit;
				
				
			else:
			
                            echo '<div class="alert alert-warning alert-bold-border fade in alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Slight Note!</strong><br> You have been Successfully Registered!<br><br> We were however unable to send a verification email to you on <code> '.$this->email.'
                                        </code> Your Details have however been successfully Saved and you will be able to recover your password. <br><br>
                                        <a href="'.$this->reclink.'" class="alert-link"> continue with Signup </a>.
                                      </div>';
                                      die;
				
				
			endif;
            
        }else{
            
             echo '<div class="alert alert-danger alert-bold-border fade in alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong><i class="fa fa-times-circle" style="color:red"></i></strong><br> A user with the id <code>'.$this->s_num.'</code> or email <code>'.$this->email.'</code> already exists.
                  </div>';
                  die;
            
        }
			
		
		
	}
	
	 function deactivate(){
		 
		$id = $this->id;
		$connect = true;
		include 'admin_tools.php';
		include "main.php";
		

        $users = explode(",",$this->s_num);
		
         foreach( $users as $user ){
             $this->s_num = $user;
               
            if( $connection->num_rows("SELECT * FROM $this->tbl_name WHERE s_idnum='$this->s_num'") > 0 ){ 

                $connection->query("UPDATE $this->tbl_name SET actif='0', reg='0' WHERE s_idnum='$this->s_num'", false);
                if($_SESSION['query']){
                    echo '<div class="alert alert-success alert-bold-border fade in alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong><i style="color:green;" class="fa fa-check-circle" style="color:green;" ></i></strong> User Account <code>'.$this->s_num.'</code> Deactivated!
                                                         </div>';
                    //exit;
                }else{
                    echo '<div class="alert alert-danger alert-bold-border fade in alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong><i class="fa fa-times-circle fa-2x" style="color:red;"></i></strong> Something Went Terribly Wrong while trying to de-activate the account <code>'.$this->s_num.'</code><br><br>
                                    <a href="#" class="alert-link">Please Try Again </a>.
                                  </div>';
                    //exit;
                }

            }else{
               echo '<div class="alert alert-danger alert-bold-border fade in alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong><i class="fa fa-times-circle " style="color:red;"></i></strong> The Account <code>'.$this->s_num.'</code> does not exist!<br>
                                    <a href="#" onclick="occuFin()" class="alert-link">Please Try Again </a>.
                                  </div>';
                //exit; 
            }
             
         }
		
	}

//End of class	
}

?>