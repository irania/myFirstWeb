<?php
class User extends CActiveRecord
{
	public $userName;
	public $lastName;
	public $email;
	public $phoneNumber;
	
    public static function model($className=__CLASS__){
        return parent::model($className);
    }
 
    public function tableName(){
        return 'tbl_user';
    }
	public function primaryKey(){
		return 'id';
	}
}