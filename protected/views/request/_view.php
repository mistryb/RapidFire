<div class="view">

    <div class="requestid">	
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
    </div>
    

     
    <div class="dateraised">
            <b><?php echo CHtml::encode($data->getAttributeLabel('date_raised')); ?>:</b>
            <?php echo Yii::app()->dateFormatter->formatDateTime(CHtml::encode($data->date_raised), 'medium', false); ?>
            <br />
    </div>
       <br/>
    
    <div class="querycontent">
	<?php echo CHtml::encode($data->query); ?>
    </div>
	
       <br />
       <br />

</div>