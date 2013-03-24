<?php

class MainForm extends CFormModel{
	public $firstName;
	public $lastName;
	public $email;
	public $phoneNumber;
	public $_identity;
	
	public function rules(){
		return array(
			array('firstName,lastName,email,phoneNumber','required','message'=>'all field must fill'),
			array('email','email'),
			array('phoneNumber','match','pattern'=>"/^[0-9]*$/"),
			);
	}
	

	
}; 