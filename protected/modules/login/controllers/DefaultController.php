<?php
class DefaultController extends Controller{
	public function actionLogout() {
        Yii::app()->user->logout(false);
        $this->redirect('login');
    }
	public function actionLogin()
	{
		$model=new LoginForm;
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			if($model->validate() && $model->login()){
				$this->redirect(Yii::app()->user->returnUrl);		
			}
		}
		$this->render('login',array('model'=>$model));///?????
	}

}