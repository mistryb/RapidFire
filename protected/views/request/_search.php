<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'raised_by'); ?>
		<?php echo $form->textField($model,'raised_by',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'request_type'); ?>
		<?php echo $form->textField($model,'request_type',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assigned_to'); ?>
		<?php echo $form->textField($model,'assigned_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'query'); ?>
		<?php echo $form->textArea($model,'query',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_raised'); ?>
		<?php echo $form->textField($model,'date_raised'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_responded'); ?>
		<?php echo $form->textField($model,'date_responded'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->