	
<html>
	<head>

				<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	</head>
	<body>
	<div class="container" id="page">
		<div id="header">
			<?php echo CHtml::encode(Yii::app()->name); ?>
		</div>
		<div id="mainmenu">
		<?php $this->widget('application.components.Menu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Clock', 'url'=>array('/site/clock')),
				array('label'=>'Picture', 'url'=>array('/site/picture')),
				array('label'=>'Form', 'url'=>array('/site/main')),
				),
			));
		
		?>
		</div>
		<?php echo $content; ?>
	</div>
	</body>
</html>