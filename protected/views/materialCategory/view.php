<?php
$this->breadcrumbs=array(
	'Material Categories'=>array('index'),
	$model->mcat_id,
);

$this->menu=array(
	array('label'=>'List MaterialCategory', 'url'=>array('index')),
	array('label'=>'Create MaterialCategory', 'url'=>array('create')),
	array('label'=>'Update MaterialCategory', 'url'=>array('update', 'id'=>$model->mcat_id)),
	array('label'=>'Delete MaterialCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->mcat_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MaterialCategory', 'url'=>array('admin')),
);
?>

<h1>View MaterialCategory #<?php echo $model->mcat_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'org_id',
		'mcat_id',
		'parent_mcat_id',
		'mcat_code',
		'mcat_desc',
		'inventory_account',
		'revenue_account',
		'expense_account',
		'is_bought',
		'is_sold',
		'is_built',
		'is_stocked',
		'is_asset',
		'material_type_code',
		'mcat_level',
		'sort_order',
	),
)); ?>
