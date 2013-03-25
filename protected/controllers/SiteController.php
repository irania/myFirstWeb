<?php
class SiteController extends Controller
{
	public function actions()
	{
	return array(
		'page'=>array(
		'class'=>'CViewAction',
		),
	);
	}
	public function actionClock(){
		$theTime = date("D M j G:i:s T Y"); 
		$this->render('clock',array('time'=>$theTime));
	}
	public function actionIndex(){
		$this->render('index');
	}
	public function actionPicture(){
		$imageAddress = 'http:\\localhost\test2\images\Ati.JPG';
		$this->render('picture',array('imageAddress'=>$imageAddress));
	}
	public function actionMain(){
		$model = new MainForm;
		$user = new User;
		if(isset($_POST['MainForm'])){
			$model->attributes=$_POST['MainForm'];
			 $user->setAttributes($_POST['MainForm'],false);
			if($model->validate())
				echo "thank you!";
			$user->save();
		}
		$this->render('main',array('model' => $model));
	}
		
}