<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'request-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'raised_by'); ?>
		<?php echo $form->dropDownList($model,'raised_by',array('Proponent 1'=>'Proponent 1','Proponent 2'=>'Proponent 2', 'Proponent 3'=> 'Proponent 3'), array('empty'=>'Select Proponent')); ?>
		<?php echo $form->error($model,'raised_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'request_type'); ?>
		<?php echo $form->dropDownList($model,'request_type',array('Information'=>'Information','Clarification'=>'Clarification', 'Meeting'=>'Meeting'),array('empty'=>'Select Type')); ?>
		<?php echo $form->error($model,'request_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assigned_to'); ?>
		<?php echo $form->dropDownList($model,'assigned_to', CHtml::listData(User::model()->findAll(), 'id', 'username'), array('empty'=>'Select User')); ?>
		<?php echo $form->error($model,'assigned_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'query'); ?>
		<?php echo $form->textArea($model,'query',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'query'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_raised'); ?>
		<?php 
                    Yii::import('application.extensions.CJuiDatePicker.CJuiDatePicker');
                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'model'=>$model,   // model object
                        'attribute'=>'date_raised',
                        'value'=>$model->date_raised,
                        'options'=>array('autoSize'=>true,
                            'dateFormat'=>'yy-mm-dd',
                            'defaultDate'=>$model->date_raised,
                            'buttomImageOnly'=>true,
                            'buttonText'=>'Select',
                            'showAnim'=>'fold',
                            'showOn'=>'button',
                            'showButtonPanel'=>true,
                            'yearRange'=>'1900',
                        ),
                    'language'=>'en-AU',
                    )
                    );
                ?>
		<?php echo $form->error($model,'date_raised'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_responded'); ?>
           <?php 
                    Yii::import('application.extensions.CJuiDatePicker.CJuiDatePicker');
                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'model'=>$model,   // model object
                        'attribute'=>'date_responded',
                        'value'=>$model->date_responded,
                        'options'=>array('autoSize'=>true,
                            'dateFormat'=>'yy-mm-dd',
                            'defaultDate'=>$model->date_responded,
                            'buttomImageOnly'=>true,
                            'buttonText'=>'Select',
                            'showAnim'=>'fold',
                            'showOn'=>'button',
                            'showButtonPanel'=>true,
                            'yearRange'=>'1900',
                        ),
                    'language'=>'en-AU',
                    )
                    );
                ?>
		<?php echo $form->error($model,'date_responded'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->