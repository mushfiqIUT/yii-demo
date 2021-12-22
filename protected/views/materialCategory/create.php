<?php
$this->breadcrumbs=array(
	'Material Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MaterialCategory', 'url'=>array('index')),
	array('label'=>'Manage MaterialCategory', 'url'=>array('admin')),
);
?>

<h1>Create MaterialCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>