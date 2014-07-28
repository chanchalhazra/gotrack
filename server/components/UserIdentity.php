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

    private $_id;
    
    public function authenticate()
	{
            $user = Users::model()->find('LOWER(username)=?', array(strtolower($this->username)));
        
		if($user===NULL)
                {
			$this->errorCode=self::ERROR_USERNAME_INVALID;
                        echo 'userid is null';
                        
                } 
		elseif(md5($this->password) != $user->password)
                {
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
                        
                        echo md5($this->password);
                        echo $this->username;
                        echo $user->password;
                        //echo 'Password did not match';
                }
		else
                {
                    $this->_id = $user->user_id;
                    $this->username = $user->username;
                    $this->errorCode=self::ERROR_NONE;
                    //echo 'I am in else loop';
                    return TRUE;
                }
              return $this->errorCode;
             
              
        }
        public function getId() {
           return $this->_id;
        }
        
        }
