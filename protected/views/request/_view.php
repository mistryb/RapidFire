<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('raised_by')); ?>:</b>
	<?php echo CHtml::encode($data->raised_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_type')); ?>:</b>
	<?php echo CHtml::encode($data->request_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assigned_to')); ?>:</b>
	<?php echo CHtml::encode($data->assignedTo->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('query')); ?>:</b>
	<?php echo CHtml::encode($data->query); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_raised')); ?>:</b>
	<?php echo Yii::app()->dateFormatter->formatDateTime(CHtml::encode($data->date_raised), 'medium', false); ?>
	<br />

</div>