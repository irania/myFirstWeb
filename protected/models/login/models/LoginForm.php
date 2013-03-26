<?php

class LoginForm extends CFormModel
{
	public $username;
	public $password;
	public function rules(){
		return array(
			array('username,password','required','message'=>'all field must fill'),
		);
	}
	public function login(){
		if($this->username == "admin" && $this->password=="admin")
			return true;
		return false;
	}
}
