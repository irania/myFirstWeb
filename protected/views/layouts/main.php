	
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/test2/css/main.css" />
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>


	</head>
	<body>
	<div class="container" id="page">
		<div id="header">
			<div id="logo">
				<?php echo CHtml::encode(Yii::app()->name); ?>
			</div>
		</div>
		<?php $this->widget('application.components.Menu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Clock', 'url'=>array('/site/clock')),
				array('label'=>'Picture', 'url'=>array('/site/picture')),
				array('label'=>'Form', 'url'=>array('/site/main')),
				array('label'=>'Login', 'url'=>array('login/default/login' ), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/login/default/logout'), 'visible'=>!Yii::app()->user->isGuest),
				),'color'=>'green',
			));
		
		?>
		<?php echo $content; ?>
	</div>
	</body>
</html>