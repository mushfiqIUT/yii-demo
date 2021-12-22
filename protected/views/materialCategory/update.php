<?php
$this->breadcrumbs=array(
	'Material Categories'=>array('index'),
	$model->mcat_id=>array('view','id'=>$model->mcat_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MaterialCategory', 'url'=>array('index')),
	array('label'=>'Create MaterialCategory', 'url'=>array('create')),
	array('label'=>'View MaterialCategory', 'url'=>array('view', 'id'=>$model->mcat_id)),
	array('label'=>'Manage MaterialCategory', 'url'=>array('admin')),
);
?>

<h1>Update MaterialCategory <?php echo $model->mcat_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>