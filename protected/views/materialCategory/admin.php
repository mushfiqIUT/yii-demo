<?php
$this->breadcrumbs=array(
	'Material Categories'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MaterialCategory', 'url'=>array('index')),
	array('label'=>'Create MaterialCategory', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('material-category-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Material Categories</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'material-category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'org_id',
		'mcat_id',
		'parent_mcat_id',
		'mcat_code',
		'mcat_desc',
		'inventory_account',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
