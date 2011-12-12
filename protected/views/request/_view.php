<div class="view">

    <div class="requestid">	
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
        <b style="font-size: 11px;">Request</b>
    </div>
        
    <div class="dateraised">            
            <?php echo Yii::app()->dateFormatter->formatDateTime(CHtml::encode($data->date_raised), 'medium', false); ?>
            <br />
            <b style="font-size: 11px;"><?php echo CHtml::encode($data->getAttributeLabel('date_raised')); ?></b>
    </div> 
    
    <div class="raisedby">
        <?php echo CHtml::encode($data->raised_by); ?>
        <br />
        <b style="font-size: 11px;"><?php echo CHtml::encode($data->getAttributeLabel('raised_by')); ?></b>
    </div>
    
    <div class="requesttype">
        <?php echo CHtml::encode($data->request_type); ?>
        <br />
        <b style="font-size: 11px;"><?php echo CHtml::encode($data->getAttributeLabel('request_type')); ?></b>
    </div>
    
    <div class="commentcount">
        <?php echo CHtml::encode($data->commentCount); ?>
        <br />
        <b style="font-size: 11px;">Comments</b>
    </div>

</div>