<?php

class LoginForm extends CFormModel
{
	public $username;
	public $password;
	private $_identity;
	public function rules(){
		return array(
			array('username,password','required','message'=>'all field must fill'),
		);
	}
	public function login(){
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}
		
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
}
