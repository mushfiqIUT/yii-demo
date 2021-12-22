<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcat_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mcat_id), array('view', 'id'=>$data->mcat_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('org_id')); ?>:</b>
	<?php echo CHtml::encode($data->org_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_mcat_id')); ?>:</b>
	<?php echo CHtml::encode($data->parent_mcat_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcat_code')); ?>:</b>
	<?php echo CHtml::encode($data->mcat_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcat_desc')); ?>:</b>
	<?php echo CHtml::encode($data->mcat_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inventory_account')); ?>:</b>
	<?php echo CHtml::encode($data->inventory_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('revenue_account')); ?>:</b>
	<?php echo CHtml::encode($data->revenue_account); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('expense_account')); ?>:</b>
	<?php echo CHtml::encode($data->expense_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_bought')); ?>:</b>
	<?php echo CHtml::encode($data->is_bought); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_sold')); ?>:</b>
	<?php echo CHtml::encode($data->is_sold); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_built')); ?>:</b>
	<?php echo CHtml::encode($data->is_built); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_stocked')); ?>:</b>
	<?php echo CHtml::encode($data->is_stocked); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_asset')); ?>:</b>
	<?php echo CHtml::encode($data->is_asset); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('material_type_code')); ?>:</b>
	<?php echo CHtml::encode($data->material_type_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcat_level')); ?>:</b>
	<?php echo CHtml::encode($data->mcat_level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sort_order')); ?>:</b>
	<?php echo CHtml::encode($data->sort_order); ?>
	<br />

	*/ ?>

</div>