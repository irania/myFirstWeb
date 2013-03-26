	
<html>
	<head>

				<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link rel="stylesheet" type="text/css" href="/test2/css/main.css" />
	</head>
	<body>
	<div class="container" id="page">
		<div id="header">
			<?php echo CHtml::encode(Yii::app()->name); ?>
		</div>
		<?php $this->widget('application.components.Menu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Clock', 'url'=>array('/site/clock')),
				array('label'=>'Picture', 'url'=>array('/site/picture')),
				array('label'=>'Form', 'url'=>array('/site/main')),
				),
			));
		
		?>
		<?php echo $content; ?>
	</div>
	</body>
</html>