<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'rfi_id',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->textFieldRow($model,'originator',array('class'=>'span5','maxlength'=>256)); ?>

	<?php echo $form->textFieldRow($model,'body',array('class'=>'span5','maxlength'=>1500)); ?>

	<?php echo $form->textFieldRow($model,'date_created',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
