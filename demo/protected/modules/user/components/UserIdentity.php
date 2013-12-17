<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	public $uid;
	public $username;
	public $isadmin;
	
	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user = User::model()->find("username='". strtolower($this->username) ."'");
		if(empty($user)){
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		}elseif(!$user->validatePassword($this->password)){
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		}else{
			$this->uid = $user->uid;
			$this->username = $user->username;
			$this->isadmin = $user->isadmin;
			$this->errorCode = self::ERROR_NONE;
		}
		return $this->errorCode;
	}

	/**
	 * @return integer the ID of the user record
	 */
	public function getId()
	{
		return $this->uid;
	}
}
?>