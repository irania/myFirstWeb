	
<html>
	<head>

				<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	</head>
	<body>
		<div id="header">
			<?php echo CHtml::encode(Yii::app()->name); ?>
		</div>
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Clock', 'url'=>array('/site/clock')),
				array('label'=>'Picture', 'url'=>array('/site/picture')),
				array('label'=>'Form', 'url'=>array('/site/main')),
				),
			));
		
		?>
	</body>
</html>