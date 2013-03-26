<html>
<head>
<link rel="stylesheet" type="text/css" href="/test2/css/main.css" />
<style>
#mainmenu
{
	background:white url(css/<?php echo $this->imagefile ?>) repeat-x left top;
}
</style>

</head>
<body>
<div id="mainmenu">
<?php $this->renderMenu($this->items);?>
</div>
</body>
</html>
