<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'org_id'); ?>
		<?php echo $form->textField($model,'org_id',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcat_id'); ?>
		<?php echo $form->textField($model,'mcat_id',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parent_mcat_id'); ?>
		<?php echo $form->textField($model,'parent_mcat_id',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcat_code'); ?>
		<?php echo $form->textField($model,'mcat_code',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcat_desc'); ?>
		<?php echo $form->textField($model,'mcat_desc',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inventory_account'); ?>
		<?php echo $form->textField($model,'inventory_account',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'revenue_account'); ?>
		<?php echo $form->textField($model,'revenue_account',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expense_account'); ?>
		<?php echo $form->textField($model,'expense_account',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_bought'); ?>
		<?php echo $form->textField($model,'is_bought',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_sold'); ?>
		<?php echo $form->textField($model,'is_sold',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_built'); ?>
		<?php echo $form->textField($model,'is_built',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_stocked'); ?>
		<?php echo $form->textField($model,'is_stocked',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_asset'); ?>
		<?php echo $form->textField($model,'is_asset',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'material_type_code'); ?>
		<?php echo $form->textField($model,'material_type_code',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcat_level'); ?>
		<?php echo $form->textField($model,'mcat_level',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sort_order'); ?>
		<?php echo $form->textField($model,'sort_order',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->