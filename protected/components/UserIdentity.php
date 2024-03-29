<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */

    //Default
	/*public function authenticate()
	{
        $users = Users::model()->find('username=:username', array(':username' => $this->username));
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($users[$this->password]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}*/

    private $_id;

    public function authenticate() {
        $User = Users::model()->find('username=:username', array(':username' => $this->username));

        if (!isset($User->username)) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        }
        else if ($User->password !== $this->password) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        }
        else {
            //$this->setState('id', $User->id);
            $this->_id=$User->name;
            $this->errorCode = self::ERROR_NONE;
        }

        return !$this->errorCode;
    }

    public function getId()
    {
        return $this->_id;
    }
}