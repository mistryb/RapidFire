<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rfi_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rfi_id),array('view','id'=>$data->rfi_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('originator')); ?>:</b>
	<?php echo CHtml::encode($data->originator); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('body')); ?>:</b>
	<?php echo CHtml::encode($data->body); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />


</div>