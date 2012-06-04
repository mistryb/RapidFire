<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rfi_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->requestId->rfi_id),array('view','id'=>$data->requestId->rfi_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->requestId->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('originator')); ?>:</b>
	<?php echo CHtml::encode($data->requestId->originator); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('body')); ?>:</b>
	<?php echo CHtml::encode($data->requestId->body); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->requestId->date_created); ?>
	<br />
        
        <b>Assigned To:</b>
	<?php echo CHtml::encode($data->userId->username); ?>
	<br />


</div>