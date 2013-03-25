<?php
Yii::import('zii.widgets.CMenu');
class Menu extends CMenu{
	public $color;
	
	public function run(){
		$this->render('menuView');
	}
}
?>