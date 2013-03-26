<?php
Yii::import('zii.widgets.CMenu');
class Menu extends CMenu{
	public $color;
	public function run(){
		switch($this->color){
		case 'green':
			$imagefile = 'bgr.jpg';
			break;
		case 'blue':
			$imagefile = 'bg.gif';
			break;
		case 'red':
			$imagefile = 'br.jpg';
			break;
		case 'pink':
			$imagefile = 'bpi.jpg';
			break;
		case 'purple':
			$imagefile = 'bp.jpg';
			break;
		}
		$this->render('menuView',array('imagefile'=>$imagefile));
	}
}
?>