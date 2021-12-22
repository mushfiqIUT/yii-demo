<?php
$this->breadcrumbs=array(
	'Material Categories',
);

$this->menu=array(
	array('label'=>'Create MaterialCategory', 'url'=>array('create')),
	array('label'=>'Manage MaterialCategory', 'url'=>array('admin')),
);
?>

<h1>Material Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
