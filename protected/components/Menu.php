<?php
Yii::import('zii.widgets.CMenu');
class Menu extends CMenu{
	public $color;
	public $imagefile;
	public function run(){
		$color='green';
		$imagefile ='bgr.jpg';
		$this->render('menuView');
	}
}
?>