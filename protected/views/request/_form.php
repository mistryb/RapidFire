<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'id'=>'request-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'rfi_id',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->textFieldRow($model,'originator',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->textFieldRow($model,'body',array('class'=>'span5','maxlength'=>1500)); ?>

	<?php echo $form->textFieldRow($model,'date_created',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
