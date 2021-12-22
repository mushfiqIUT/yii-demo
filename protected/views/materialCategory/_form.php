<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'material-category-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'org_id'); ?>
		<?php echo $form->textField($model,'org_id',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'org_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mcat_id'); ?>
		<?php echo $form->textField($model,'mcat_id',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'mcat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_mcat_id'); ?>
		<?php echo $form->textField($model,'parent_mcat_id',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'parent_mcat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mcat_code'); ?>
		<?php echo $form->textField($model,'mcat_code',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'mcat_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mcat_desc'); ?>
		<?php echo $form->textField($model,'mcat_desc',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'mcat_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inventory_account'); ?>
		<?php echo $form->textField($model,'inventory_account',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'inventory_account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'revenue_account'); ?>
		<?php echo $form->textField($model,'revenue_account',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'revenue_account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expense_account'); ?>
		<?php echo $form->textField($model,'expense_account',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'expense_account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_bought'); ?>
		<?php echo $form->textField($model,'is_bought',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'is_bought'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_sold'); ?>
		<?php echo $form->textField($model,'is_sold',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'is_sold'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_built'); ?>
		<?php echo $form->textField($model,'is_built',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'is_built'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_stocked'); ?>
		<?php echo $form->textField($model,'is_stocked',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'is_stocked'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_asset'); ?>
		<?php echo $form->textField($model,'is_asset',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'is_asset'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'material_type_code'); ?>
		<?php echo $form->textField($model,'material_type_code',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'material_type_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mcat_level'); ?>
		<?php echo $form->textField($model,'mcat_level',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'mcat_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sort_order'); ?>
		<?php echo $form->textField($model,'sort_order',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'sort_order'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->