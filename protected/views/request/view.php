<?php
$this->breadcrumbs=array(
	'Requests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Request', 'url'=>array('index')),
	array('label'=>'Create Request', 'url'=>array('create')),
	array('label'=>'Update Request', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Request', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Request', 'url'=>array('admin')),
);
?>

<div class="viewinfo">
    <div class="requestid">
        <?php echo $model->id; ?>
        <b style="font-size: 11px;">Request</b>
    </div>
    <div class="dateraised">            
        <?php echo Yii::app()->dateFormatter->formatDateTime(CHtml::encode($model->date_raised), 'medium', false); ?>
        <br />
        <b style="font-size: 11px;"><?php echo CHtml::encode($model->getAttributeLabel('date_raised')); ?></b>
    </div>
    <div class="raisedby">
        <?php echo CHtml::encode($model->raised_by); ?>
        <br />
        <b style="font-size: 11px;"><?php echo CHtml::encode($model->getAttributeLabel('raised_by')); ?></b>
    </div>
    <div class="assignedto">
        <?php echo CHtml::encode($model->assignedTo->username); ?>
        <br />
        <b style="font-size: 11px;"><?php echo CHtml::encode($model->getAttributeLabel('assigned_to')); ?></b>
    </div>
    <div class="requesttype">
        <?php echo CHtml::encode($model->request_type); ?>
        <br />
        <b style="font-size: 11px;"><?php echo CHtml::encode($model->getAttributeLabel('request_type')); ?></b>
    </div>
</div>
<br/>

<div class="request">
    <div class="requesttop">
        <b>Request Information</b>
    </div>
    <div class="requestcontent">
        <?php echo CHtml::decode($model->query);?>
    </div>
</div>    
<br/>

<div class="response">
    <div class="responsetop">
        <b>Response Information</b>
    </div>
    <br/>
        <?php if ($model->response): ?>
    <h2 style="text-align:center;">A Response has Been Generated for this Request</h2>
    
        <?php $this->renderPartial('_response',array(
            'post'=>$model,
            'response'=>$model->response,
        )); ?>
    <?php else: ?>
    
    <h3 style="text-align:center;">You have not responded to this request yet.</h3>
 
    <?php if(Yii::app()->user->hasFlash('responseSubmitted')): ?>
        <div class="flash-success">
            <?php echo Yii::app()->user->getFlash('responseSubmitted'); ?>
        </div>
    <?php else: ?>
        <?php $this->renderPartial('/response/_form',array(
            'model'=>$response,
        )); ?>
    <?php endif; ?>
    <?php endif; ?>
</div>
<br/>
<div id="comments">
    <?php if($model->commentCount>=1): ?>
        <h3>
            Discussion
        </h3>
 
        <?php $this->renderPartial('_comments',array(
            'post'=>$model,
            'comments'=>$model->comments,
        )); ?>
    <?php endif; ?>
    <h3>Start a Discussion</h3>
 
    <?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
        <div class="flash-success">
            <?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
        </div>
    <?php else: ?>
        <?php $this->renderPartial('/comment/_form',array(
            'model'=>$comment,
        )); ?>
    <?php endif; ?>
</div>
